<?php
include 'views/constants/user.php';

$apiUrl = "http://localhost/webbanhang/apis/UserApi.php?route=index";
$response = file_get_contents($apiUrl);
$result = json_decode($response, true);

$user = $result['data']['users'] ?? [];

$columns = $table;
$data = $user;
$describe = $describe;
?>

<!doctype html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <title>Quản lý khách hàng</title>
    <link rel="stylesheet" href="http://localhost/WEBBANHANG/views/admin/css/users.css">
</head>
<body>
<div class="container">
    <?php include 'views/customs/CustomTable.php'; ?>
</div>
</body>
</html>
