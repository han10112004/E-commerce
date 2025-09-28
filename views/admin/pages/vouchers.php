<?php
include 'views/constants/voucher.php';

$voucher = [
    [
        "code" => "VC1001",
        "description" => "Giảm 10% cho đơn hàng trên 500k",
        "discountType" => "PERCENT",
        "discountValue" => 10,
        "startDate" => "2025-09-01",
        "endDate" => "2025-09-30",
        "status" => "Active"
    ],
    [
        "code" => "VC2001",
        "description" => "Giảm 50.000đ cho đơn hàng trên 300k",
        "discountType" => "AMOUNT",
        "discountValue" => 50000,
        "startDate" => "2025-09-10",
        "endDate" => "2025-09-25",
        "status" => "Expired"
    ],
    [
        "code" => "VC3001",
        "description" => "Giảm 20% cho khách hàng mới",
        "discountType" => "PERCENT",
        "discountValue" => 20,
        "startDate" => "2025-09-15",
        "endDate" => "2025-10-15",
        "status" => "Active"
    ],
    [
        "code" => "VC4001",
        "description" => "Giảm 100.000đ cho đơn hàng trên 1 triệu",
        "discountType" => "AMOUNT",
        "discountValue" => 100000,
        "startDate" => "2025-08-01",
        "endDate" => "2025-08-31",
        "status" => "Expired"
    ],
    [
        "code" => "VC5001",
        "description" => "Voucher nội bộ (tạm dừng)",
        "discountType" => "PERCENT",
        "discountValue" => 15,
        "startDate" => "2025-09-05",
        "endDate" => "2025-10-05",
        "status" => "Disabled"
    ]
];
$columns = $table;
$data = $voucher;
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