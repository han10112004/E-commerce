<?php 
$page = $_GET['page'] ?? 'dashboard';

switch ($page) {
    case 'login':
        $content = 'views/admin/pages/login.php';
        $title = "login";
        break;

    case 'dashboard':
        $content = 'views/admin/pages/dashboard.php';
        $title = "dashboard";
        $breadcrumb = [
            "pageTitle" => "Bảng điều khiển",
            "items" => [
                ["label" => "Dashboard", "url" => "dashboard"],
                ["label" => "Tổng quan"]
            ]
        ];
        break;

    case 'customers':
        $content = 'views/admin/pages/customers.php';
        $title = "customers";
        $breadcrumb = [
            "pageTitle" => "Quản lý khách hàng",
            "items" => [
                ["label" => "Người dùng"],
                ["label" => "Khách hàng", "url" => "customers"],
                ["label" => "Danh sách"]
            ]
        ];
        break;

    case 'employees':
        $content = 'views/admin/pages/employees.php';
        $title = "employees";
        $breadcrumb = [
            "pageTitle" => "Quản lý nhân viên",
            "items" => [
                 ["label" => "Người dùng"],
                ["label" => "Nhân viên", "url" => "employees"],
                ["label" => "Danh sách"]
            ]
        ];
        break;

    case 'orders':
        $content = 'views/admin/pages/orders.php';
        $title = "orders";
        $breadcrumb = [
            "pageTitle" => "Quản lý đơn hàng",
            "items" => [
                ["label" => "Đơn hàng", "url" => "orders"],
                ["label" => "Danh sách"]
            ]
        ];
        break;

    case 'products':
        $content = 'views/admin/pages/products.php';
        $title = "products";
        $breadcrumb = [
            "pageTitle" => "Quản lý sản phẩm",
            "items" => [
                ["label" => "Sản phẩm", "url" => "products"],
                ["label" => "Danh sách"]
            ]
        ];
        break;

    case 'vouchers':
        $content = 'views/admin/pages/vouchers.php';
        $title = "promotions";
        $breadcrumb = [
            "pageTitle" => "Quản lý khuyến mãi",
            "items" => [
                ["label" => "Khuyến mãi", "url" => "vouchers"],
                ["label" => "Danh sách"]
            ]
        ];
        break;

    default:
        $content = 'views/admin/pages/404.php';
        $title = "404 Not Found";
        $breadcrumb = [
            "pageTitle" => "Không tìm thấy trang",
            "items" => [
                ["label" => "Lỗi 404"]
            ]
        ];
        break;
}
