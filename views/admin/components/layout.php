<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title ?? "Trang chủ"; ?></title>
    <link rel="stylesheet" href="http://localhost/WEBBANHANG/views/admin/css/component.css">
</head>
<body>
    <div class="container">
        <?php include 'aside.php'; ?>
        <div class="headerAndContent">
            <?php include 'header.php'; ?>
            <?php if (isset($breadcrumb)) include 'breadcrumb.php'; ?>
            <main>
                <?php include $content; ?>
            </main>
        </div>
    </div>
    <!-- <?php include 'footer.php'; ?> -->

    <script>
        const token = localStorage.getItem('token');
        if (!token) {
            alert("Phiên đăng nhập đã hết hạn, vui lòng đăng nhập lại.");
            window.location.href = 'index.php?page=login&expired=1';
        }
    </script>

</body>
</html>
