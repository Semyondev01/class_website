<?php
session_start();
$ss = $_POST['ss'];
$mysql = new mysqli('localhost', 'root', '', '4vclass');
$system232 = $mysql->query("SELECT * FROM `massiv` WHERE `id` = 'prav'");
$rrr = mysqli_fetch_assoc($system232);
$ss1 = array($rrr['1'] , $rrr['2'] , $rrr['3'], $rrr['4'], $rrr['5'], $rrr['6'], $rrr['7'], $rrr['8'], $rrr['9'], $rrr['10'], $rrr['11'], $rrr['12'], $rrr['13'], $rrr['14'], $rrr['15'], $rrr['16'], $rrr['17'], $rrr['18'], $rrr['19'], $rrr['20'], $rrr['21'], $rrr['22'], $rrr['23'], $rrr['24'], $rrr['25'], $rrr['26'], $rrr['27'], $rrr['28'], $rrr['29'], $rrr['30']);
if ($ss1[$_SESSION['ss']] == $ss) {
  $_SESSION['ver'] = 'Молодец, всё верно!';
  header('Location: ../razvl.php');
} else {
  $_SESSION['ver'] = 'Ошибка... Попробуй ещё раз';
  $_SESSION['sun'] = 'Ошибка';
  header('Location: ../razvl.php');
}


 ?>
