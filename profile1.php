<?php
session_start();
?>
<!doctype html>
<html lang="ru">
<head>
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
    <style>
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
        #gf {
            text-align: center;
            font-size: 30px;
        }

        #imgs, #hell1, #imgs2, #imgs3, #imgs1 {
            position: absolute;
            top: 50px;
            left: 400px;
            z-index: 99;
        }

    </style>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Вход/регистрация</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<header class="navdar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a href="/" class="navbar-brand" title="С наступающим Новым годом!!!"> </a>
        </div>
        <div>
            <ul class="nav navbar-nav">

                <li class="active" onmouseover="document.getElementById('imgs').style.display = 'block'" onmouseout="document.getElementById('imgs').style.display = 'none'"><a href="/">Главная</a></li>
                <img style="display: none" id="imgs" src="images/gl.jpg" width="200px">
                <li class="active" onmouseover="document.getElementById('hell1').style.display = 'block'" onmouseout="document.getElementById('hell1').style.display = 'none'"><a href="onass.php">О нас</a></li>
                <img src="images/Onas.jpg" id="hell1" style="display: none" width="200px">
                <li class="active" onmouseover="document.getElementById('imgs1').style.display = 'block'" onmouseout="document.getElementById('imgs1').style.display = 'none'"><a href="novost.php">Новости</a></li>
                <img style="display: none" id="imgs1" src="images/news.jpg" width="200px">
                <li class="active" onmouseover="document.getElementById('imgs2').style.display = 'block'" onmouseout="document.getElementById('imgs2').style.display = 'none'"><a href="contact.php">Контакты</a></li>
                <img style="display: none" id="imgs2" src="images/cont.jpg" width="200px">
                <li class="active" onmouseover="document.getElementById('imgs3').style.display = 'block'" onmouseout="document.getElementById('imgs3').style.display = 'none'"><a href="razvl.php">Развлечения</a></li>
                <img style="display: none" id="imgs3" src="images/game.jpg" width="200px">



            </ul>
            <div class="navbar-header1">
                <a href="/" class="navbar-brand"><img src="images/profile.png" alt="" width="20px" height="20px"></a>
            </div>

        </div>
    </div>
</header>
<div class="form">
    <p id="gf">Форма авторизации</p>
    <form action="vendor/signin.php" method="post">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button type="submit">Войти</button>
        <p>
            У вас нет аккаунта? - <a href="/register.php">Зарегистрируйтесь</a>!
        </p>
    </form>
<div id="oyp" style="color: #ff1213">
    <?php if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }

    ?>
</div>
</div>
</body>
</html>