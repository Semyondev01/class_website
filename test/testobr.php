<?php
session_start();
$color = $_POST['color'];
$castomcolor = $_POST['nocolor'];
$tem = $_POST['tem'];
$gamm = $_POST['user_color'];
$name = $_POST['name'];
$sname = $_POST['sname2'];
if (strlen($color) == 2) {
    $_SESSION['error'] = 'Не выбран цвет!';
    header('Location: test.php');
    exit();
}
if (strlen($tem) == 2) {
    $_SESSION['error'] = 'Тема не выбрана!';
    header('Location: test.php');
    exit();
}
if (!isset($gamm)) {
    $_SESSION['error'] = 'Гамма не выбрана!';
    header('Location: test.php');
    exit();
}

$mysql = new mysqli('localhost', 'root', '', '4vclass');
$mysql->query("INSERT INTO `test` (`name`, `sname`,`color`, `castomcolor`, `tem`, `gamm`) VALUES ('$name', '$sname','$color', '$castomcolor', '$tem', '$gamm')");
header('Location: close.php');

