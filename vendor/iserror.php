

<?php
session_start();
$rrrr = $_POST['rrrr'];
$result = $_SESSION['error'] * $result = $_SESSION['error1'];
if ($result == $rrrr) {
  $_SESSION['ok'] = 'Теперь всё верно!';
  unset($_SESSION['error']);
  header('Location: ../razvl.php');
  exit();
} else {
  $_SESSION['ok'] = 'Снова ошибка... Попробуй еще раз';
  header('Location: ../razvl.php');
}
