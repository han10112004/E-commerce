<?php
$menu = [
    [
        "label" => "TRANG CHỦ",
        "items" => [
            [
                "icon" => "fa-solid fa-house",
                "label" => "Tổng quan",
                "active" => ["dashboard"],
                "to" => "index.php?page=dashboard",
                "links" => []
            ],
        ],
    ],
    [
        "label" => "CHỨC NĂNG",
        "items" => [
            [
                "icon" => "fa-solid fa-users",
                "label" => "Người dùng",
                "active" => ["employees", "customers"], // Parent active khi sub active
                "to" => "#", 
                "links" => [
                    "items" => [
                        [
                            "icon" => "fa-solid fa-user-tie",
                            "label" => "Nhân viên",
                            "active" => ["employees"],
                            "to" => "index.php?page=employees",
                        ],
                        [
                            "icon" => "fa-solid fa-users",
                            "label" => "Khách hàng",
                            "active" => ["customers"],
                            "to" => "index.php?page=customers",
                        ]
                    ]
                ]
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
                "active" => ["vouchers"],
                "to" => "index.php?page=vouchers",
                "links" => []
            ]
        ]
    ],
    [
        "label" => "BÁO CÁO",
        "items" => [
            [
                "icon" => "fa-solid fa-chart-bar",
                "label" => "Thống kê",
                "active" => ["reports"],
                "to" => "index.php?page=reports",
                "links" => []
            ]
        ]
    ]
];