<?php

$hdelite = $_POST['hdelete'];
$ff = new mysqli('localhost', 'root', '', '4vclass');
$ff->query("DELETE FROM `novost` WHERE `name` = '$hdelite'");

echo "<a href='../adminPanel&&&d82d869823ca9eb2bfec2f8239eb625f.php'>Назад</a>";









 ?>
