<?php
session_start();
$mysql = new mysqli('localhost', 'root', '', '4vclass');
$login = $_SESSION['user']['login'];
$check = $mysql->query("SELECT * FROM `semyonc` WHERE `Pollogin` = '$login'");
$rabarr = mysqli_fetch_assoc($check);
$semyonC = $rabarr['SemyonCoin'];
$semyonC = $semyonC - 2;
$check = $mysql->query("UPDATE `semyonc` SET `SemyonCoin` = '$semyonC' WHERE `Pollogin` = '$login'");
$check = $mysql->query("UPDATE `style` SET `razblock` = '1' WHERE `login` = '$login'");
header('Location: ../chat.php');

