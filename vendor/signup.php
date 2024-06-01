<?php
session_start();
?>

<!doctype html>
<html lang="ru">
<head>
  <style>
button {
  font-size: 25px;
  padding: 5px;
  margin: 20px;
  cursor: pointer;
  background-color: skyblue;
  color: white;
  border: 0;
}
br {
  color: red;
}
 div {
  color: red;
}



  </style>
    <meta charset="UTF-8">
    <title>4 "В" класс</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <a href="../index.php">На главную</a>
    </form>
    <meta name="viewport" content="width=device-width, inital-scale=1">
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();
            for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
            k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(91118282, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/91118282" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</head>




<?php

    $surname = filter_var(trim($_POST['surname']),FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
    $lname = filter_var(trim($_POST['lname']),FILTER_SANITIZE_STRING);
    $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);
    $password_confirm = filter_var(trim($_POST['password_confirm']),FILTER_SANITIZE_STRING);
    $mysql = new mysqli('localhost', 'root', '', '4vclass');
    $hell = md5($password);
    $system = $mysql->query("SELECT * FROM `users` WHERE `password` = '$hell' AND `login` = '$login'");
    $kill = mysqli_fetch_assoc($system);
 if (mysqli_num_rows($system) > 0) {
   echo "Данная учётная запись уже была найдена в базе данных";
     $_SESSION['message'] = 'Данная учётная запись уже была найдена в базе данных';
     header('Location: ../profile1.php');
   exit();
 } else {




      if (mb_strlen($login) < 5 || mb_strlen($login) > 90) {
        echo "Недопустимая длина логина";
          $_SESSION['message'] = 'Недопустимая длина логина';
          header('Location: ../profile1.php');
        exit();
      }

      else if (mb_strlen($email) > 50 || mb_strlen($email) < 5) {
        echo "Недопустимая длина email";
          $_SESSION['message'] = 'Недопустимая длина email';
          header('Location: ../profile1.php');
        exit();
      }
      else if (mb_strlen($password) > 20 || mb_strlen($password) < 3) {
        echo "Недопустимая длина пароля";
          $_SESSION['message'] = 'Недопустимая длина пароля';
          header('Location: ../profile1.php');
        exit();
      }

if ($password == $password_confirm) {
        $path = 'uploads/' . time() . $_FILES['avatar']['name'];
     if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
         $_SESSION['message'] = 'Ошибка при загрузке сообщения';
         header('Location: ../profile1.php');


if ($_FILES['name'] == 0) {
    $path = 'images/avatar.png';
}



}

$mysql = new mysqli('localhost', 'root', '', '4vclass');
$password = md5($password);
$mysql->query("INSERT INTO `users` (`surname`, `name`, `lname`, `login`, `email`, `password`, `avatar`) VALUES ('$surname', '$name', '$lname', '$login', '$email', '$password', '$path')");
$mysql = new mysqli('localhost', 'root', '', '4vclass');
$mysql->query("INSERT INTO `semyonc`(`SemyonCoin`, `Pollogin`) VALUES ('0','$login')");
$mysql = new mysqli('localhost', 'root', '', '4vclass');
$mysql->query("INSERT INTO `style`(`name`, `sname`, `login`, `mycolor`, `hover`) VALUES ('$name','$surname', '$login', '#000000', 'yes')");
    $_SESSION['message'] = 'Вы успешно зарегистрированы!';
header('Location: ../profile1.php');



$mysql->close();
}
}







?>
