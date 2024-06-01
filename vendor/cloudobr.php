<?php
session_start();
$name = $_POST['name'];
$mult =  "Cloud/" . $_SESSION['user']['login'] . "/";
$filesize = filesize("../$mult");
if ($filesize >= 5000000000) {
header('Location: ../cloudl.php');
    $_SESSION['otpr'] = "Ваше хранилище переполнено! Купите больше места!";
} else {
    $path = $mult . time() . $_FILES['avatar']['name'];
    move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path);
    $_SESSION['otpr'] = "Отправлено успешно";
    header('Location: ../cloudl.php');
    $ff = new mysqli('localhost', 'root', '', '4vclass');
    $login  =  $_SESSION['user']['login'];
    $ff->query("INSERT INTO `cloud` (`Login`, `Path`, `Name`) VALUES ('$login', '$path', '$name')");
}
