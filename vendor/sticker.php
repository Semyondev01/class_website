<?php

session_start();
$radio = $_POST['radiogroup'];
$name = $_POST['name'];
$syu = $_SESSION['user']['login'];
$sname = $_SESSION['user']['surname'];
$odn = $_POST['odnoclass'];
$stickname = $_POST['id22'];
$mysql = new mysqli('localhost', 'root', '', '4vclass');
$gom22 = $mysql->query("SELECT * FROM `users` WHERE  `name` = '$name'");
if (mysqli_num_rows($gom22) == 0) {
    $hyp = 1;

} else {
    $hyp = 2;
}
$mysql = new mysqli('localhost', 'root', '', '4vclass');
$mysql->query("INSERT INTO `chat` (`name`, `pol`, `sname`, `ism`, `sticker`, `odnoclass`, `sticker_name`) VALUES ('$name', '$syu', '$sname', '$hyp', '$radio', '$odn', '$stickname')");
header('Location: ../chat.php');
echo "<a href='../chat.php'>Назад</a>";

?>