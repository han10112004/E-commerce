<?php
include 'views/constants/customer.php';

// mock data
$customer = [
    [
        "id" => 1,
        "img" => "https://via.placeholder.com/40",
        "lastName" => "Nguyễn",
        "middleName" => "Văn",
        "firstName" => "An",
        "gender" => 1,
        "birthDate" => "2000-05-12",
        "phone" => "0912345678",
        "email" => "an.nguyen@example.com",
        "userCatalogueName" => "Khách hàng VIP"
    ],
    [
        "id" => 2,
        "img" => "",
        "lastName" => "Trần",
        "middleName" => "Thị",
        "firstName" => "Bích",
        "gender" => 2,
        "birthDate" => null,
        "phone" => "0987654321",
        "email" => "bich.tran@example.com",
        "userCatalogueName" => "Khách hàng thường"
    ]
];

// gán dữ liệu cho customtable
$columns = $table;
$data = $customer;
$describe = $describe;
?>

<!doctype html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <title>Quản lý khách hàng</title>
    <link rel="stylesheet" href="http://localhost/WEBBANHANG/views/admin/css/customers.css">
</head>
<body>
<div class="container">
    <?php include 'views/customs/CustomTable.php'; ?>
</div>
</body>
</html>
