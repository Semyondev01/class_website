<?php


    require_once 'connect.php';

    $login = $_POST['login'];
    $password = ($_POST['password']);






    $user = mysqli_query($connect, "SELECT * FROM `admin` WHERE `login` = '$login' AND `password` = '$password'");
    if (mysqli_num_rows($user) > 0) {

        $user = mysqli_fetch_assoc($user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "full_name" => $user['full_name'],
            "avatar" => $user['avatar'],
            "email" => $user['email']
        ];
        header('Location: ../adminPanel&&&d82d869823ca9eb2bfec2f8239eb625f.php');



    } else {
        $_SESSION['message'] = 'Не верный логин или пароль';
      echo "Не верный логин или пароль";
    }
    ?>
