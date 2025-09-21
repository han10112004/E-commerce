<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$_SESSION = [];
session_unset();
session_destroy();

if (isset($_COOKIE['auth_token'])) {
    setcookie("auth_token", "", time() - 3600, "/"); 
}

if (isset($_COOKIE['PHPSESSID'])) {
    setcookie("PHPSESSID", "", time() - 3600, "/");
}

header("Location: /WEBBANHANG/index.php?page=login");

exit;
