<?php
session_start();
$ff = new mysqli('localhost', 'root', '', '4vclass');
$chat2 = $_SESSION['user']['login'];
$ff->query("DELETE FROM `chat` WHERE `pol` = '$chat2'");
  echo "Действие выполнено";

  echo "<a href='../chat.php'>Назад</a>";

 ?>
