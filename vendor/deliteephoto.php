<?php
session_start();
$delete = $_POST['id444'];
$sname = $_SESSION['user']['login'];
$ff = new mysqli('localhost', 'root', '', '4vclass');
$ff->query("DELETE FROM `chat` WHERE `photo_name` = '$delete' AND `pol` = '$sname'");

echo "<a href='../chat.php'>Назад</a>";

?>