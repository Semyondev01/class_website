<?php
session_start();
 ?>


<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title></title>
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
    <form action="vendor/obrss.php" method="post">
      <input type="text" name="loc1">
      <input type="text" name="loc2">
      <input type="text" name="loc3">
      <input type="text" name="loc4">
      <input type="text" name="loc5">
      <input type="text" name="loc6">
      <input type="text" name="loc7">
      <input type="text" name="loc8">
      <input type="text" name="loc9">
      <input type="text" name="loc10">
      <input type="text" name="lon11">
      <input type="text" name="loc12">
      <input type="text" name="loc13">
      <input type="text" name="loc14">
      <input type="text" name="loc15">
      <input type="text" name="loc16">
      <input type="text" name="loc17">
      <input type="text" name="loc18">
      <input type="text" name="loc19">
      <input type="text" name="loc20">
      <input type="text" name="loc21">
      <input type="text" name="loc22">
      <input type="text" name="loc23">
      <input type="text" name="loc24">
      <input type="text" name="loc25">
      <input type="text" name="loc26">
      <input type="text" name="loc27">
      <input type="text" name="loc28">
      <input type="text" name="loc29">
      <input type="text" name="loc30">


      <br></br>
      <input type="text" name="loc11">
      <input type="text" name="loc22">
      <input type="text" name="loc33">
      <input type="text" name="loc44">
      <input type="text" name="loc55">
      <input type="text" name="loc66">
      <input type="text" name="loc77">
      <input type="text" name="loc88">
      <input type="text" name="loc99">
      <input type="text" name="loc100">
      <input type="text" name="loc111">
      <input type="text" name="loc122">
      <input type="text" name="loc133">
      <input type="text" name="loc144">
      <input type="text" name="loc155">
      <input type="text" name="loc166">
      <input type="text" name="loc177">
      <input type="text" name="loc188">
      <input type="text" name="loc199">
      <input type="text" name="loc200">
      <input type="text" name="loc211">
      <input type="text" name="loc222">
      <input type="text" name="loc233">
      <input type="text" name="loc244">
      <input type="text" name="loc255">
      <input type="text" name="loc266">
      <input type="text" name="loc277">
      <input type="text" name="loc288">
      <input type="text" name="loc299">
      <input type="text" name="loc300">
      <button>Отправить</button>

    </form>
    <form action="vendor/delete_trenss.php" method="post">
 <button>Удалить тренажер</button>
    </form>
    <?php
if (isset($_SESSION['ender'])) {
  echo $_SESSION['ender'];
} unset($_SESSION['ender']);

     ?>
     <a href="../adminPanel&&&d82d869823ca9eb2bfec2f8239eb625f.php">В adminPanel</a>
  </body>
</html>
