<?php
session_start();
$ff = new mysqli('localhost', 'root', '', '4vclass');
$system = $_POST['system'];
 $update = $_POST['update'];
  $ff = new mysqli('localhost', 'root', '', '4vclass');
  $ff->query("UPDATE `users` SET `status` = '$update' WHERE `id` = '$system'");
  $_SESSION['ok'] = "Пользователь принял статус admin";
  header('Location: ../adminPanel&&&d82d869823ca9eb2bfec2f8239eb625f.php');











 ?>
