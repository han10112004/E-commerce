<?php
require_once __DIR__ . '/../configs/database.php';

class User {
    public $id;
    public $img;
    public $lastName;
    public $middleName;
    public $firstName;
    public $gender;
    public $birthDate;
    public $phone;
    public $email;
    public $password; 
    public $userCatalogueName;

    public function __construct($data = []) {
        $this->id = $data['id'] ?? null;
        $this->img = $data['img'] ?? null;
        $this->lastName = $data['last_name'] ?? null;
        $this->middleName = $data['middle_name'] ?? null;
        $this->firstName = $data['first_name'] ?? null;
        $this->gender = $data['gender'] ?? null;
        $this->birthDate = $data['birth_date'] ?? null;
        $this->phone = $data['phone'] ?? null;
        $this->email = $data['email'] ?? null;
        $this->password = $data['password'] ?? null;
        $this->userCatalogueName = $data['user_catalogue_name'] ?? null;
    }

    public static function findByEmail($email) {
        $pdo = Database::connect();
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email LIMIT 1");
        $stmt->execute(['email' => $email]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            return new User($row);
        }
        return null;
    }

    public static function storeRefreshToken($userId, $refreshToken, $expiresAt) {
        $pdo = Database::connect(); 

        $stmt = $pdo->prepare("DELETE FROM user_tokens WHERE user_id = ?");
        $stmt->execute([$userId]);


        $stmt = $pdo->prepare("INSERT INTO user_tokens (user_id, refresh_token, expires_at) VALUES (?, ?, ?)");
        return $stmt->execute([$userId, $refreshToken, $expiresAt]);
    }

    public static function findByRefreshToken($refreshToken) {
        $pdo = Database::connect();

        $stmt = $pdo->prepare("
            SELECT u.*, ut.expires_at 
            FROM users u 
            JOIN user_tokens ut ON u.id = ut.user_id 
            WHERE ut.refresh_token = ?
            LIMIT 1
        ");
        $stmt->execute([$refreshToken]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}