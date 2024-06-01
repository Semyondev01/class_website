<?php
session_start();
unset($_SESSION['stert']);
$_SESSION['ender'] = 'Удалено!';
header('Location: ../sre.php');


 ?>
