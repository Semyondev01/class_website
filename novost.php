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
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <style>
    #erer4 {
      width: 100px;
      height: 100px;
    }
      h1 {
        text-decoration: underline;
        text-decoration-color: skyblue;
        color: skyblue;

      }
      b {
        color: #ee1616;
      }
    #imgs, #hell1, #imgs2, #imgs3, #imgs1 {
        position: absolute;
        top: 50px;
        z-index: 2;
        left: 400px;
    }


      </style>
      <title>Наш 4"В" класс</title>
      <link rel="shortcut icon" href="images\4v.jpg" type="image/x-icon">

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
                <a href="profile1.php" class="navbar-brand"><img src="images/profile.png" alt="" width="20px" height="20px"></a>
            </div>

        </div>
    </div>
</header>

<?php
$mysql = new mysqli('localhost', 'root', '', '4vclass');
if (isset($_SESSION['user'])) {
    $mylogin = $_SESSION['user']['login'];
    $res = $mysql->query("SELECT * FROM `style` WHERE `login` = '$mylogin'");
    $vih = mysqli_fetch_assoc($res);
    $color = $vih['mycolor'];
} else{
    $color = '#000';
}
?>
<h1 style="color: <?=$color?>"><strong>Новости нашего класса</strong></h1>

  <?php
  $mysql = new mysqli('localhost', 'root', '', '4vclass');
  $cool = $mysql->query("SELECT * FROM `novost`");
  while ($gg = mysqli_fetch_assoc($cool)) {
  echo "Дата: "  .  $gg['date'];
  echo "<br>";
  echo "<strong>" . "Заголовок: " . $gg['name'] . "</strong>";
  echo "<br>";
  echo "Краткое содержание: " . $gg['crat'];
  echo "<br>";
  $rr1 = $gg['avatar'];

  if ($gg['system'] == 'doc') {
    echo "Приложение: " . "<a href=$rr1 download=>Скачать</a>";
    echo "<br>";
  } else {


  echo "Картинка: " . "<img src=$rr1 width=200px>";
  echo "<br>";
      $rr2 = $gg['avatar1'];
      if (file_exists($rr2)) {
          echo "Картинка: " . "<img src=$rr2 width=200px>";
          echo "<br>";
      }
      $rr3 = $gg['avatar2'];
      if (file_exists($rr3)) {
          echo "Картинка: " . "<img src=$rr3 width=200px>";
          echo "<br>";
      }
  $sdt = $gg['uid'];
  echo "Подробнее: " . "<a href=$sdt>Подробнее</a>";
  echo "<br>";
  echo "<br>";
}
}
  ?>

</body>
