<?php
$mysql = new mysqli('localhost', 'root', '', '4vclass');
$gom0 = $mysql->query("TRUNCATE TABLE `4vclass`.`test`");
header('Location: ../testop.php ');
