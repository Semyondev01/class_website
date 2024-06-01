<?php
session_start();
$mysql = new mysqli('localhost', 'root', '', '4vclass');
$path = 'uploads/' . time() . $_FILES['file_name']['name'];
move_uploaded_file($_FILES['file_name']['tmp_name'], '../' . $path);
$login = $_SESSION['user']['login'];
$mysql->query("UPDATE `users` SET `avatar` = '$path' WHERE `login` = '$login'");
