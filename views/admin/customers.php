<?php
include 'constants/customer.php';

// dữ liệu tạm (mock)
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
    ],
    [
        "id" => 3,
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
    <table>
        <thead>
        <tr>
            <th></th> 
            <?php foreach ($customerTable as $column): ?>
                <th class="<?= $column["className"] ?? "" ?>"><?= $column["name"] ?></th>
            <?php endforeach; ?>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($customer as $index => $row): ?>
            <tr class="<?= ($row["id"] % 2 === 0) ? "highlight" : "" ?>"> <!-- demo highlight -->
                <td>
                    <input type="checkbox" />
                </td>
                <?php foreach ($customerTable as $column): ?>
                    <td class="<?= $column["className"] ?? "" ?>">
                        <?= $column["render"]($row) ?>
                    </td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
