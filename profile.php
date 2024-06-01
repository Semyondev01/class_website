<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
include 'vendor/signin.php';
}

?>

<!doctype html>
<html lang="ru">
<head>
  <title>Наш 4"В" класс</title>
  <link rel="shortcut icon" href="images\4v.jpg" type="image/x-icon">
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <meta name="viewport" content="width=device-width, inital-scale=1">
    <link rel="stylesheet" href="assets/css/main.css">
    <meta name="viewport" content="width=device-width, inital-scale=1">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="stile.css">
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




    <!-- Профиль -->

    <form>
        <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['name'] ?></h2>
        <a href="#"><?= $_SESSION['user']['email'] ?></a>
        <a href="vendor/logout.php" class="logout">Выход</a>
    </form>

</body>
</html>
