<?php

if (!isset($columns) || !isset($data)) {
    echo "<p style='color:red'>Thiếu dữ liệu để render bảng</p>";
    return;
}
?>
<link rel="stylesheet" href="http://localhost/WEBBANHANg/views/customs/CustomTable.css">

<div class="custom-table-container">
    <div class="describte">
        <?php if (isset($describe) && is_array($describe)): ?>
            <?php foreach ($describe as $desc): ?>
                <h3><?= htmlspecialchars($desc["title"]) ?></h3>
                <p><?= htmlspecialchars($desc["description"]) ?></p>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <table class="custom-table">
        <thead>
        <tr>
            <th></th> <!-- checkbox -->
            <?php foreach ($columns as $column): ?>
                <th class="<?= $column["className"] ?? "" ?>">
                    <?= htmlspecialchars($column["name"]) ?>
                </th>
            <?php endforeach; ?>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $index => $row): ?>
            <tr class="<?= ($row["id"] ?? 0) % 2 === 0 ? "highlight" : "" ?>">
                <td><input type="checkbox" /></td>
                <?php foreach ($columns as $column): ?>
                    <td class="<?= $column["className"] ?? "" ?>">
                        <?= $column["render"]($row) ?>
                    </td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
