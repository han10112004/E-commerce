<?php
    $menu = [
        [
            "label" => "TRANG CHỦ",
            "items" => [
                [
                    "icon" => "fa-solid fa-house",
                    "label" => "Trang chủ",
                    "active" => ["dashboard"],
                    "to" => "index.php?page=dashboard",
                    "links" => []
                ],
            ],
        ],
        [
            "label" => "TÍNH NĂNG",
            "items" => [
            
                [
                    "icon" => "fa-solid fa-users",
                    "label" => "Khách hàng",
                    "active" => ["customers"],
                    "to" => "index.php?page=customers",
                    "links" => []
                ],
                [
                    "icon" => "fa-solid fa-user-tie",
                    "label" => "Nhân viên",
                    "active" => ["employees"],
                    "to" => "index.php?page=employees",
                    "links" => []
                ],
                [
                    "icon" => "fa-solid fa-box",
                    "label" => "Quản lý sản phẩm",
                    "active" => ["products"],
                    "to" => "index.php?page=products",
                    "links" => []
                ],
                [
                    "icon" => "fa-solid fa-file-invoice",
                    "label" => "Đơn hàng",
                    "active" => ["orders"],
                    "to" => "index.php?page=orders",
                    "links" => []
                ],
                
                [
                    "icon" => "fa-solid fa-tags",
                    "label" => "Khuyến mãi",
                    "active" => ["promotions"],
                    "to" => "index.php?page=promotions",
                    "links" => []
                ]
            ]
        ]
    ];
