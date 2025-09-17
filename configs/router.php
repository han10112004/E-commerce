<?php 
$page = $_GET['page'] ?? 'dashboard'; 

switch ($page) {
    case 'login':
        $content = 'views/admin/login.php';
        $title = "login";
        break;

    case 'dashboard':
        $content = 'views/admin/dashboard.php';
        $title = "dashboard";
        $breadcrumb = [
            "pageTitle" => "Bảng điều khiển",
            "items" => [
                ["label" => "Dashboard", "url" => "index.php?page=dashboard"],
                ["label" => "Tổng quan"]
            ]
        ];
        break;

    case 'customers':
        $content = 'views/admin/customers.php';
        $title = "customers";
        $breadcrumb = [
            "pageTitle" => "Quản lý khách hàng",
            "items" => [
                ["label" => "Khách hàng", "url" => "index.php?page=customers"],
                ["label" => "Danh sách"]
            ]
        ];
        break;

    case 'employees':
        $content = 'views/admin/employees.php';
        $title = "employees";
        $breadcrumb = [
            "pageTitle" => "Quản lý nhân viên",
            "items" => [
                ["label" => "Nhân viên", "url" => "index.php?page=employees"],
                ["label" => "Danh sách"]
            ]
        ];
        break;

    case 'orders':
        $content = 'views/admin/orders.php';
        $title = "orders";
        $breadcrumb = [
            "pageTitle" => "Quản lý đơn hàng",
            "items" => [
                ["label" => "Đơn hàng", "url" => "index.php?page=orders"],
                ["label" => "Danh sách"]
            ]
        ];
        break;

    case 'products':
        $content = 'views/admin/products.php';
        $title = "products";
        $breadcrumb = [
            "pageTitle" => "Quản lý sản phẩm",
            "items" => [
                ["label" => "Sản phẩm", "url" => "index.php?page=products"],
                ["label" => "Danh sách"]
            ]
        ];
        break;

    case 'promotions':
        $content = 'views/admin/promotions.php';
        $title = "promotions";
        $breadcrumb = [
            "pageTitle" => "Quản lý khuyến mãi",
            "items" => [
                ["label" => "Khuyến mãi", "url" => "index.php?page=promotions"],
                ["label" => "Danh sách"]
            ]
        ];
        break;

    default:
        $content = 'views/admin/404.php';
        $title = "404 Not Found";
        $breadcrumb = [
            "pageTitle" => "Không tìm thấy trang",
            "items" => [
                ["label" => "Lỗi 404"]
            ]
        ];
        break;
}


