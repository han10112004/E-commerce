<?php
$pdo = new PDO("mysql:host=localhost;dbname=webbanhang;charset=utf8", "root", "");

require_once __DIR__ . "/seeders/datas/UserSeeder.php";
runUserSeeder($pdo);