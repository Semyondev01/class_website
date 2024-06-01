<?php

    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $password = md5($_POST['password']);







    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
      $user = mysqli_fetch_assoc($check_user);
      if (mysqli_num_rows($check_user) > 0) {

      if ($user['status'] == 'chat') {
        $_SESSION['user'] = [
            "id" => $user['id'],
            "name" => $user['name'],
            "surname" => $user['surname'],
            "lname" => $user['lname'],
            "avatar" => $user['avatar'],
            "email" => $user['email'],
            "login" => $user['login'],
            "prov" => $user['name']
        ];

        header('Location: ../chat.php');
      }
     elseif ($user['status'] == 'admin') {

       $_SESSION['user'] = [
           "id" => $user['id'],
           "name" => $user['name'],
           "surname" => $user['surname'],
           "lname" => $user['lname'],
           "avatar" => $user['avatar'],
           "email" => $user['email'],
           "login" => $user['login']
       ];
       header('Location: ../adminPanel&&&d82d869823ca9eb2bfec2f8239eb625f.php');
     }  elseif ($user['status'] == '2system') {

        $_SESSION['user'] = [
            "id" => $user['id'],
            "name" => $user['name'],
            "surname" => $user['surname'],
            "lname" => $user['lname'],
            "avatar" => $user['avatar'],
            "email" => $user['email'],
            "login" => $user['login'],
            "prov" => $user['name']
        ];
        header('Location: ../stranicc.php');
      }
else {










        $_SESSION['user'] = [
            "id" => $user['id'],
            "name" => $user['name'],
            "lname" => $user['lname'],
            "surname" => $user['surname'],
            "avatar" => $user['avatar'],
            "email" => $user['email'],
            "login" => $user['login']
        ];
        header('Location: ../profile.php');
      }
 } else {
        $_SESSION['message'] = 'Не верный логин или пароль';
        header('Location: ../profile1.php ');
    }






    ?>
