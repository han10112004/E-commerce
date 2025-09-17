<?php
// index.php ở root
include 'configs/router.php';

if ($page === 'login') {
    include $content;
} else {
    include 'views/admin/components/layout.php';
}
