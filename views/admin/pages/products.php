<?php
include 'views/constants/product.php';
$product = [
    [
        "id" => 1,
        "image" => "https://via.placeholder.com/40",
        "name" => "Laptop Dell Inspiron 15",
        "categoryName" => "Laptop",
        "price" => 15000000,
        "stock" => 25,
        "description" => "Laptop Dell Inspiron 15 với CPU i5, RAM 8GB, SSD 512GB."
    ],
    [
        "id" => 2,
        "image" => "https://via.placeholder.com/40",
        "name" => "Chuột Logitech M221",
        "categoryName" => "Phụ kiện",
        "price" => 250000,
        "stock" => 120,
        "description" => "Chuột không dây Logitech M221, kết nối USB Receiver."
    ],
    [
        "id" => 3,
        "image" => "",
        "name" => "Điện thoại Samsung Galaxy A55",
        "categoryName" => "Điện thoại",
        "price" => 7990000,
        "stock" => 40,
        "description" => "Smartphone Samsung Galaxy A55, màn hình 6.5 inch, pin 5000mAh."
    ],
    [
        "id" => 4,
        "image" => "https://via.placeholder.com/40",
        "name" => "Tai nghe Sony WH-1000XM5",
        "categoryName" => "Âm thanh",
        "price" => 8900000,
        "stock" => 10,
        "description" => "Tai nghe chống ồn Sony WH-1000XM5, kết nối Bluetooth."
    ],
    [
        "id" => 5,
        "image" => "",
        "name" => "Bàn phím cơ Keychron K2",
        "categoryName" => "Phụ kiện",
        "price" => 2200000,
        "stock" => 60,
        "description" => "Bàn phím cơ Keychron K2 Bluetooth, switch Red."
    ]
];


$columns = $table;
$data = $product;
$describe = $describe;

?>

<!doctype html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <title>Quản lý khách hàng</title>
    <link rel="stylesheet" href="http://localhost/WEBBANHANG/views/admin/css/products.css">
</head>
<body>
<div class="container">
    <?php include 'views/customs/CustomTable.php'; ?>
</div>
</body>
</html>
