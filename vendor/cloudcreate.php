<?php
session_start();
$path = "../Cloud/" . $_SESSION['user']['login'];
$_SESSION['path'] = $path;
if (is_dir($path)) {
    echo "Вы уже создали облачный сервер на 5 ГБ." . "<a href=../cloudl.php>Перейти</a>";


} else {
    mkdir("$path");

}