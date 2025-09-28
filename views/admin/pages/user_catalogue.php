<?php
include 'views/constants/user_catalogue.php';

$apiUrl = "http://localhost/webbanhang/apis/UserCatalogueApi.php?route=index";
$response = file_get_contents($apiUrl);
$result = json_decode($response, true);

$catalogues = $result['data']['catalogues'] ?? [];

$columns = $table;
$data = $catalogues;
$describe = $describe;
?>

<!doctype html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <title>Quản lý Catalogue Người dùng</title>
    <link rel="stylesheet" href="http://localhost/WEBBANHANG/views/admin/css/users.css">
</head>
<body>
<div class="container">
    <?php include 'views/customs/CustomTable.php'; ?>
</div>
</body>
</html>
