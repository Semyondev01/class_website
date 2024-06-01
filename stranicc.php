<?php session_start(); ?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <style>
    .content {
      margin-left: 50px;
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
    <meta charset="utf-8">
    <title>Наш 4"В" класс</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

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
          <a href="/" class="navbar-brand"> </a>
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
    <?php if (isset($_SESSION['user'])) {

     ?>
    <h3>Здравствуйте, <?=$_SESSION['user']['name'] . ".";?> Выберете, куда хотите попасть</h3>
    <div class="content">

  <a href="chat.php">Чат</a>
  <br><a href="adminPanel&&&d82d869823ca9eb2bfec2f8239eb625f.php">adminPanel</a></br>
</div>
<?php  } else {
  echo "Произошла какая-то ошибка, попробуйте авторизоваться заново";
} ?>

   </body>
</html>
