<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Наш 4 "В" класс</title>
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
    <?php

    $ff = new mysqli('localhost', 'root', '', '4vclass');
    $array = $ff->query("SELECT * FROM `users`");
    while ($gg = mysqli_fetch_assoc($array)) {
    echo $gg['name'] . " " . $gg['surname'] . ' ' . $gg['lname']  . " " . 'id:' . ' ' . $gg['id'] . "   " .  "status:" . ' ' . $gg['status']  . "<br>";

    } ?>
    <a href="../adminPanel&&&d82d869823ca9eb2bfec2f8239eb625f.php">Вернуться назад</a>
  </body>
</html>
