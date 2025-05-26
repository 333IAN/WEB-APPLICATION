<?php
require_once '../includes/db_connect.php';
require_once '../includes/header.php';

$judges=$pdo->query("SELECT * FROM judges ORDER BY display_name")->fetchAll();
?>
<h2>JUDGES LIST</h2>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Display Name</th>
            <th>Created At</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($judges as $judge):?>
        <tr>
            <td><?=$judge['id']?></td>
            <td><?=htmlspecialchars($judge['username'])?></td>
            <td><?=htmlspecialchars($judge['display_name'])?></td>
            <td><?=$judge['created_at']?></td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
<?php require_once '../includes/footer.php'