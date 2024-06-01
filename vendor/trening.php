<?php
session_start();
$math = $_POST['chis'];
if ($math == "") {
  $_SESSION['ok'] = 'Вы ничего не ввели!';
  header('Location: ../razvl.php');
  exit();
}

$result = $_SESSION['chiss'] * $_SESSION['chiss1'];
if ($result == $math) {
  $_SESSION['ok'] = 'Правильно! Так держать!';

  $mysql = new mysqli('localhost', 'root', '', '4vclass');
  $chel = $_SESSION['user']['login'];
  $systt = $mysql->query("SELECT * FROM `semyonc` WHERE `Pollogin` = '$chel'");
  $forn  = mysqli_fetch_assoc($systt);
  $ftr = $forn['SemyonDollar'];
  $ftr++;
  $mysql->query("UPDATE `semyonc` SET `SemyonDollar`='$ftr' WHERE `Pollogin` = '$chel'");
  header('Location: ../razvl.php');

}  else {

  $_SESSION['error'] = $_SESSION['chiss'];
  $_SESSION['error1'] = $_SESSION['chiss1'];
  header('Location: ../razvl.php');
}





 ?>
