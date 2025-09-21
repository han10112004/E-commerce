<?php
function requireGuest() {
    session_start();
    if (isset($_COOKIE['auth_token'])) {
        header("Location: index.php?page=dashboard");
        exit;
    }
}
