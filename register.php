<?php
    session_start();

?>

<!doctype html>
<html lang="ru">
<head>
  <style>
  form {
      display: flex;
      flex-direction: column;
      width: 400px;
  }

  input {
      margin: 10px 0;
      padding: 10px;
      border: unset;
      border-bottom: 2px solid #e3e3e3;
      outline: none;
  }

  button {
      padding: 10px;
      background: #e3e3e3;
      border: unset;
      cursor: pointer;
  }
  </style>
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
  <title>Наш 4"В" класс</title>
  <link rel="shortcut icon" href="images\4v.jpg" type="image/x-icon">
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <meta name="viewport" content="width=device-width, inital-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

    <nav class="navdar navbar-default">
    	<div class="container">
    		<div class="navbar-header">
    			<a href="/" class="navbar-brand">  </a>
    		</div>
    		<div>
    			<ul class="nav navbar-nav">

                <li class="active"><a href="/">Главная</a></li>
                <li class="active"><a href="onass.php">О нас</a></li>
                <li class="active"><a href="novost.php">Новости</a></li>
    			      <li class="active"><a href="contact.php">Контакты</a></li>
                <li class="active"><a href="razvl.php">Развлечения</a></li>

    			</ul>

    		</div>
    	</div>
    </nav>

    <!-- Форма регистрации -->

    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
        <label>Фамилия</label>
        <input type="text" name="surname" placeholder="Введите свою фамилию">
        <label>Имя</label>
        <input type="text" name="name" placeholder="Введите своё имя">
        <label>Отчество</label>
        <input type="text" name="lname" placeholder="Введите своё отчество">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Почта</label>
        <input type="email" name="email" placeholder="Введите адрес своей почты">
        <label>Изображение профиля</label>
        <input type="file" name="avatar">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <label>Подтверждение пароля</label>
        <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
        <button type="submit">Зарегистрироваться</button>
        <p>
            У вас уже есть аккаунт? - <a href="/">авторизируйтесь</a>!
        </p>
        <?php

            unset($_SESSION['message']);
        ?>
    </form>

</body>
</html>
