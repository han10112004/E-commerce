<!doctype html>
<html lang="vi">
<head>
  <meta charset="utf-8">
  <title>Quản lý voucher</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php

  $breadcrumb = [
      ["label" => "Dashboard", "url" => "index.php"],
      ["label" => "Khuyến mãi", "url" => "customers.php"],
      ["label" => "Danh sách"] 
  ];
  include 'components/breadcrumb.php';
  
  ?>
  <div class="container">
    <div class="card">
      <h2>Danh sách voucher</h2>
      <p>Thông tin số lượng, thời hạn voucher sẽ hiển thị tại đây.</p>
    </div>
  </div>
</body>
</html>
