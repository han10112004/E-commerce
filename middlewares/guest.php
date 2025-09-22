<?php
function requireGuest() {
    if (isset($_COOKIE['token'])) {
        header("Location: index.php?page=dashboard");
        exit;
    }
}
