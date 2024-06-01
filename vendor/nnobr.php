<?php
session_start();
$delete = $_POST['delete'];
$ff = new mysqli('localhost', 'root', '', '4vclass');
$ff->query("DELETE FROM `chat` WHERE `mess` = '$delete'");

echo "<a href='../chat.php'>Назад</a>";





 ?>
