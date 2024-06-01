<?php
session_start();
  $mysql = new mysqli('localhost', 'root', '', '4vclass');
  $chel = $_SESSION['user']['login'];
  $systt = $mysql->query("SELECT * FROM `semyonc` WHERE `Pollogin` = '$chel'");
  $forn  = mysqli_fetch_assoc($systt);
  $ftr = $forn['SemyonCoin'];
  $systen11 = 1;
  $raz = $ftr - $systen11;
  $mysql->query("UPDATE `semyonc` SET `SemyonCoin`='$raz', `Pole`='1' WHERE `Pollogin` = '$chel'");
  header('Location: ../SemyonC.php');


 ?>
