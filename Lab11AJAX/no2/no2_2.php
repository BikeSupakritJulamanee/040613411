<?php
include('connect.php');
$keyword = $_GET['search'];
$stmt = $pdo->prepare("SELECT * FROM member WHERE username LIKE '%$keyword%';");
$stmt->execute();
?>

<head>
</head>
<table>
    <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
        <img src="member_photo/<?= $row['username'] ?>.jpg" width='100'></td>
        <?= $row['username'] ?>
        <?= $row['password'] ?>
        <?= $row['name'] ?>
        <?= $row['address'] ?>
        <?= $row['mobile'] ?>
        <?= $row['email'] ?>
        <br>
    <?php endwhile; ?>
</table>