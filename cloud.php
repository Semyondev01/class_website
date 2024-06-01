<?php session_start(); ?>


<!DOCTYPE html>

<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Облако сайта</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style>
      #create {
        color: black;
        background-color: white;

        border-color: white;
        -webkit-transition-duration: 0.4s; /* Safari */
      transition-duration: 0.4s;
      }
      #create:hover {
        background-color: skyblue; /* Green */
           color: white;
}       p {
        color: black;
        background-color: white;

        border-color: white;
        -webkit-transition-duration: 0.4s; /* Safari */
      transition-duration: 0.4s;
      }
      p:hover {
        color: skyblue;
          
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
  </head>
  <body>
    <h1>Привет, <?=$_SESSION['user']['name']; ?>.</h1>
    <p>Это облако этого сайта. Здесь вы сможете хранить свои файлы и фотографии.
    </p>
    <a href="vendor/cloudcreate.php">
  <button id="create" name="create">Создать облако</button>
    </a>

  </body>
</html>


<?php

 ?>
