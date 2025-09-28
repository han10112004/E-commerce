<?php
include 'views/constants/employee.php';
$employee = [
    [
        "id" => 1,
        "name" => "Nguyễn Văn A",
        "email" => "nguyenvana@example.com",
        "phone" => "0901234567",
        "department" => "Kinh doanh",
        "salary" => 12000000,
        "status" => "Đang làm"
    ],
    [
        "id" => 2,
        "name" => "Trần Thị B",
        "email" => "tranthib@example.com",
        "phone" => "0912345678",
        "department" => "Nhân sự",
        "salary" => 10000000,
        "status" => "Nghỉ phép"
    ],
    [
        "id" => 3,
        "name" => "Lê Văn C",
        "email" => "levanc@example.com",
        "phone" => "0923456789",
        "department" => "Công nghệ thông tin",
        "salary" => 15000000,
        "status" => "Đang làm"
    ],
    [
        "id" => 4,
        "name" => "Phạm Thị D",
        "email" => "phamthid@example.com",
        "phone" => "0934567890",
        "department" => "Marketing",
        "salary" => 11000000,
        "status" => "Nghỉ việc"
    ],
    [
        "id" => 5,
        "name" => "Hoàng Văn E",
        "email" => "hoangvane@example.com",
        "phone" => "0945678901",
        "department" => "Kế toán",
        "salary" => 13000000,
        "status" => "Tạm hoãn"
    ],
    [
        "id" => 6,
        "name" => "Đỗ Thị F",
        "email" => "dothif@example.com",
        "phone" => "0956789012",
        "department" => "Hành chính",
        "salary" => 9500000,
        "status" => "Đang làm"
    ],
    [
        "id" => 7,
        "name" => "Phan Văn G",
        "email" => "phanvang@example.com",
        "phone" => "0967890123",
        "department" => "Kho vận",
        "salary" => 10500000,
        "status" => "Đang làm"
    ],
    [
        "id" => 8,
        "name" => "Ngô Thị H",
        "email" => "ngothih@example.com",
        "phone" => "0978901234",
        "department" => "Chăm sóc khách hàng",
        "salary" => 9800000,
        "status" => "Nghỉ phép"
    ],
    [
        "id" => 9,
        "name" => "Vũ Văn I",
        "email" => "vuvani@example.com",
        "phone" => "0989012345",
        "department" => "Phát triển sản phẩm",
        "salary" => 16000000,
        "status" => "Đang làm"
    ],
    [
        "id" => 10,
        "name" => "Bùi Thị K",
        "email" => "buithik@example.com",
        "phone" => "0990123456",
        "department" => "Kinh doanh",
        "salary" => 12500000,
        "status" => "Đang làm"
    ]
];
$columns = $table;
$data = $employee;
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
