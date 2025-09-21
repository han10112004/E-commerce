<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/WEBBANHANG/views/admin/css/components.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        aside ul { list-style: none; padding-left: 0; }
        aside li { margin: 5px 0; }
        aside a { text-decoration: none; display: block; padding: 8px; border-radius: 5px; }
        aside a.active { background-color: rgba(255, 255, 255, 0.2); color: white; }
        .submenu { display: none; padding-left: 20px; }
        .has-sub.open > .submenu { display: block; }
        .has-sub > a:after {
            content: '\f0d7'; /* caret-down */
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            float: right;
        }
        .has-sub.open > a:after {
            content: '\f0d8'; /* caret-up */
        }
    </style>
</head>
<body>
    <aside>
        <?php 
            include 'views/constants/menu.php'; 
            $currentPage = $_GET['page'] ?? 'dashboard';
        ?>
        <?php foreach ($menu as $section): ?>
            <h4><?= $section['label'] ?></h4>
            <ul>
                <?php foreach ($section['items'] as $item): ?>
                    <?php 
                        $itemPage = str_replace('index.php?page=', '', $item['to']); 
                        $isActive = in_array($currentPage, $item['active']) ? 'active' : '';
                        $hasSub = !empty($item['links']);
                    ?>
                    <li class="<?= $hasSub ? 'has-sub' : '' ?>">
                        <a href="<?= $item['to'] ?>" class="<?= $isActive ?>">
                            <i class="<?= $item['icon'] ?>"></i> <?= $item['label'] ?>
                        </a>

                        <?php if ($hasSub): ?>
                            <ul class="submenu">
                                <?php foreach ($item['links']['items'] as $sub): ?>
                                    <?php 
                                        $subPage = str_replace('index.php?page=', '', $sub['to']); 
                                        $isSubActive = in_array($currentPage, $sub['active']) ? 'active' : '';
                                    ?>
                                    <li>
                                        <a href="<?= $sub['to'] ?>" class="<?= $isSubActive ?>">
                                            <i class="<?= $sub['icon'] ?>"></i> <?= $sub['label'] ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endforeach; ?>
    </aside>

    <script>
document.querySelectorAll(".has-sub > a").forEach(a => {
            a.addEventListener("click", e => {
                e.preventDefault();
                a.parentElement.classList.toggle("open");
            });
        });
    </script>
</body>
</html>
