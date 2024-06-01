<?php

    $connect = mysqli_connect('localhost', 'root', '', '4vclass');

    if (!$connect) {
        die('Error connect to DataBase');
    }
