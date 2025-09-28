<?php
include 'views/constants/order.php';
$order = [
    [
        "id" => 1,
        "customerName" => "Nguyễn Văn An",
        "orderDate" => "2025-09-20",
        "total" => 1500000,
        "status" => "Chờ xác nhận"
    ],
    [
        "id" => 2,
        "customerName" => "Trần Thị Bích",
        "orderDate" => "2025-09-19",
        "total" => 250000,
        "status" => "Xác nhận đơn hàng"
    ],
    [
        "id" => 3,
        "customerName" => "Lê Văn Cường",
        "orderDate" => "2025-09-18",
        "total" => 7990000,
        "status" => "Đang giao"
    ],
    [
        "id" => 4,
        "customerName" => "Phạm Thị Dung",
        "orderDate" => "2025-09-17",
        "total" => 8900000,
        "status" => "Đã giao"
    ],
    [
        "id" => 5,
        "customerName" => "Hoàng Minh",
        "orderDate" => "2025-09-15",
        "total" => 2200000,
        "status" => "Thành công"
    ]
];
$columns = $table;
$data = $order;
$describe = $describe;

?>

<!doctype html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <title>Quản lý đơn hàng</title>
    <link rel="stylesheet" href="http://localhost/WEBBANHANG/views/admin/css/orders.css">
</head>
<body>
<div class="container">
    <?php include 'views/customs/CustomTable.php'; ?>
</div>
</body>
</html>
