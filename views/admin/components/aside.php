<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/WEBBANHANG/views/admin/css/aside.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <aside>
        <?php 
            include 'constants/menu.php'; 
            $currentPage = $_GET['page'] ?? 'dashboard';
        ?>
        <?php foreach ($menu as $section): ?>
            <h4><?= $section['label'] ?></h4>
            <ul>
                <?php foreach ($section['items'] as $item): ?>
                    <?php 
                        $itemPage = str_replace('index.php?page=', '', $item['to']); 
                        $isActive = ($currentPage === $itemPage) ? 'active' : '';
                    ?>
                    <li>
                        <a href="<?= $item['to'] ?>" class="<?= $isActive ?>">
                            <i class="<?= $item['icon'] ?>"></i> <?= $item['label'] ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endforeach; ?>
    </aside>

</body>
</html>