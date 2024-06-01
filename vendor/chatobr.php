<?php
session_start();
$sname = filter_var(trim($_POST['sname']),FILTER_SANITIZE_STRING);
$mess = filter_var(trim($_POST['mess']),FILTER_SANITIZE_STRING);
$odnoclass = filter_var(trim($_POST['odnoclass']),FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
if (strpos($mess, 'фигн') !== false) {
  $_SESSION['otp'] = "Сообщение не было отправлено, так-как содержит нецензурные выражения";
  header('Location: ../chat.php');
  exit();
}
  elseif (strpos($mess, 'Фигн') !== false) {
    $_SESSION['otp'] = "Сообщение не было отправлено, так-как содержит нецензурные выражения";
    header('Location: ../chat.php');
    exit();
  }
elseif (strpos($mess, 'блин') !== false) {
  $_SESSION['otp'] = "Сообщение не было отправлено, так-как содержит нецензурные выражения";
  header('Location: ../chat.php');
  exit();
}
elseif (strpos($mess, 'Блин') !== false) {
  $_SESSION['otp'] = "Сообщение не было отправлено, так-как содержит нецензурные выражения";
  header('Location: ../chat.php');
  exit();
}
$mysql = new mysqli('localhost', 'root', '', '4vclass');
$syu = $_SESSION['user']['login'];
$stt = $mysql->query("SELECT * FROM `semyonc` WHERE `Pollogin` = '$syu'");
$sysmass = mysqli_fetch_assoc($stt);
if ($sysmass['Pole'] = 1) {
   $_SESSION['pol'] = $pol;
}
$gom22 = $mysql->query("SELECT * FROM `users` WHERE  `name` = '$name'");
if (mysqli_num_rows($gom22) == 0) {
  $hyp = 1;

} else {
  $hyp = 2;
}
$mysql = new mysqli('localhost', 'root', '', '4vclass');
$mysql->query("INSERT INTO `chat` (`name`, `pol`, `sname`,`mess`, `odnoclass`, `ism`) VALUES ('$name', '$syu', '$sname','$mess', '$odnoclass', '$hyp')");
$_SESSION['otp'] = 'Сообщение отправлено. Счастливого нового года!';
// $_SESSION['gnom'] = "../images/gnom.webp";
header('Location: ../chat.php');
echo "<a href='../chat.php'>Назад</a>";









 ?>
