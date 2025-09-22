<?php

require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../configs/token.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);
    $refreshToken = $data['refreshToken'] ?? null;

    if (!$refreshToken) {
        http_response_code(400);
        echo json_encode(["error" => "Thiếu refresh token"]);
        exit;
    }

    $user = User::findByRefreshToken($refreshToken);
    if (!$user) {
        http_response_code(401);
        echo json_encode(["error" => "Refresh token không hợp lệ"]);
        exit;
    }

    if (strtotime($user['expires_at']) < time()) {
        http_response_code(401);
        echo json_encode(["error" => "Refresh token đã hết hạn"]);
        exit;
    }

    $newAccessToken = createJwt([
        "id" => $user['id'],
        "email" => $user['email']
    ], JWT_EXPIRE, JWT_SECRET);

    $newRefreshToken = generateRefreshToken(50);
    $newExpiresAt = date("Y-m-d H:i:s", time() + REFRESH_EXPIRE);

    User::storeRefreshToken($user['id'], $newRefreshToken, $newExpiresAt);

    echo json_encode([
        "token" => $newAccessToken,
        "refreshToken" => $newRefreshToken
    ]);
}
