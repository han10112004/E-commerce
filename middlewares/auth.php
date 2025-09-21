<?php
require_once __DIR__ . '/../controllers/AuthController.php';

function requireAuth() {
    session_start();

    $token = $_COOKIE['auth_token'] ?? null;

    if (!$token) {
        header("Location: index.php?page=login&expired=1");
        exit;
    }

    $authController = new AuthController();
    $payload = $authController->verify($token);

    if (isset($payload['error'])) {
        setcookie('auth_token', '', time() - 3600, '/');
        session_destroy();

        header("Location: index.php?page=login&expired=1");
        exit;
    }
}
