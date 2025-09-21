<?php
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../configs/token.php';

class AuthController {
    public function login($request) {
        $email = $request['email'] ?? null;
        $password = $request['password'] ?? null;

        $user = User::findByEmail($email);
        if (!$user) {
            return ["error" => "Email không tồn tại"];
        }

        if (!password_verify($password, $user->password)) {
            return ["error" => "Sai mật khẩu"];
        }

        $token = createJwt([
            "id" => $user->id,
            "email" => $user->email
        ], JWT_EXPIRE, JWT_SECRET);

        $refreshToken = generateRefreshToken(50);
        $expiresAt = date("Y-m-d H:i:s", time() + REFRESH_EXPIRE);

        User::storeRefreshToken($user->id, $refreshToken, $expiresAt);

        return [
            "status" => "success",
            "message" => "Đăng nhập thành công",
            "token" => $token,
            "refreshToken" => $refreshToken,
            "data" => [
                "id" => $user->id,
                "email" => $user->email,
                "firstName" => $user->firstName,
                "middleName" => $user->middleName,
                "lastName" => $user->lastName,
                "img" => $user->img,
                "gender" => $user->gender,
                "phone" => $user->phone,
                "userCatalogueName" => $user->userCatalogueName,
            ]
        ];

        return [
            "status" => "error",
            "message" => "Email hoặc mật khẩu không đúng"
        ];
    }

    public function verify($jwt) {
        $payload = verifyJwt($jwt);
        if (!$payload) {
            return ["error" => "Token không hợp lệ hoặc đã hết hạn"];
        }
        return $payload;
    }
}
