<?php


session_start();
$name = $_POST['name'];
$syu = $_SESSION['user']['login'];
$sname = $_SESSION['user']['surname'];
$odn = $_POST['odnoclass'];
$id = $_POST['id222'];
$path = 'chat/' . time() . $_FILES['photo']['name'];
move_uploaded_file($_FILES['photo']['tmp_name'], '../' . $path);
$mysql = new mysqli('localhost', 'root', '', '4vclass');
$gom22 = $mysql->query("SELECT * FROM `users` WHERE  `name` = '$name'");
if (mysqli_num_rows($gom22) == 0) {
    $hyp = 1;

} else {
    $hyp = 2;
}
$mysql = new mysqli('localhost', 'root', '', '4vclass');
$mysql->query("INSERT INTO `chat` (`name`, `pol`, `sname`, `ism`, `sticker`, `odnoclass`, `photo`, `photo_name`) VALUES ('$name', '$syu', '$sname', '$hyp', '', '$odn', '$path', '$id')");
header('Location: ../chat.php');
echo "<a href='../chat.php'>Назад</a>";

