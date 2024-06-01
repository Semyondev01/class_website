<?php
session_start();
$mysql = new mysqli('localhost', 'root', '', '4vclass');
$chel = $_SESSION['user']['login'];
$result = $mysql->query("SELECT * FROM `semyonc` WHERE `Pollogin` = '$chel'");
$res = mysqli_fetch_assoc($result);
$semyonD = $res['SemyonDollar'];
if ($semyonD >= 100) {
    $semyonC1 = $semyonD - 100;
    $semyonC2 = $res['SemyonCoin'];
    $semyonC2++;
$mysql->query("UPDATE `semyonc` SET `SemyonCoin` = '$semyonC2', `SemyonDollar` = '$semyonC1' WHERE `Pollogin` = '$chel'");
header('Location: ../chat.php');
} else {
    echo "Произошла какая-то ошибка, попробуйте ещё раз";
}
?>
