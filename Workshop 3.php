<?php
$pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $pdo->prepare("SELECT * FROM member");

$stmt->execute();
while ($row = $stmt->fetch()) {
    ?>
    ชื่อสมาชิก:  <?=$row ["name"]?> <br>
    ที่อยู่:  <?=$row ["address"]?> <br>
    อีเมล์:  <?=$row ["email"]?> <br>
    <img src="member_pic/<?=$row["username"]?>.jpg" width='100'><br>
    <hr>
    <?php
}

?>
