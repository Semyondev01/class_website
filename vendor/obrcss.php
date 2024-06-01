<?php
$CSS = $_POST['CSS'];


$mysql = new mysqli('localhost', 'root', '', '4vclass');
$mysql->query("INSERT INTO `css` (`Code`) VALUES ('$CSS')");