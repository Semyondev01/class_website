 <?php
session_start();

 ?>


<!doctype html>
<html lang="ru">
<head>

    <meta charset="UTF-8">
    <title>Развлечения</title>
    <style>
        #imgs, #hell1, #imgs2, #imgs3, #imgs1 {
            position: absolute;
            top: 50px;
            left: 400px;
            z-index: 99;
        }
      h1 {
        text-decoration: underline;
        text-decoration-color: skyblue;
        color: skyblue;

      }
      b {
        color: red;
      }
      input {
          margin: 10px 0;
          padding: 10px;
          border: unset;
          border-bottom: 2px solid #e3e3e3;
          outline: none;
      }
      button {
        background-color: skyblue;
        font-size: 20px;
        border: outset;
        border-color: skyblue;

      }

      </style>

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
  <title>Наш 4"В" класс</title>
  <link rel="shortcut icon" href="images\4v.jpg" type="image/x-icon">

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
                <?php
                if (isset($_SESSION['user']['prov'])) {
                ?>
                <li class="active"><a href="chat.php">Профиль</a></li>
                <?php
                }
                ?>


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

<h1 style="color: <?=$color?>">Развлечения</h1>
<p>Здесь вы найдёте разные интересные игры и тренажеры!</p>
  <form action="obrabot.php" method="post">
    <input type="text" name="var" id="var" placeholder="Введите число" >
    <p>Введите в форму число от 1 до 9 и нажмите кнопку "Пожелание!". Ждите сюрприз!
    <button>Пожелание!</button>
  </form>
<?php
if (isset($_SESSION['error'])) {

 ?>
 <h1>Исправление ошибки</h1>
 <p>Таблица умножения</p>
 <?php
       echo $_SESSION['error'] . "*" . $_SESSION['error1'] . "=";
  ?>
  <form action="vendor\iserror.php" method="post">
    <label>Введите ответ</label>
    <input type="text" name="rrrr" placeholder="Введите ответ">
    <button>Отправить</button>
  </form>
  <?php
  if (isset($_SESSION['ok'])) {
   echo $_SESSION['ok'];
   unset($_SESSION['ok']);
 } ?>
<?php } else {

 ?>
  <div class="tren">
    <h1>Тренажёр по математике</h1>
    <p>Таблица умножения</p>
    <?php $set1 = rand(1, 100);
    $_SESSION['chiss'] = $set1;
          $set2 = rand(1, 10);
          $_SESSION['chiss1'] = $set2;
          echo "$set1" . "*" . "$set2" . "=";
     ?>
     <form action="vendor\trening.php" method="post">
       <label>Введите ответ</label>
       <input type="text" name="chis" placeholder="Введите ответ">
       <button>Отправить</button>
     </form>
     <?php
     if (isset($_SESSION['ok'])) {
      echo $_SESSION['ok'];
      unset($_SESSION['ok']);
     }

}
      ?>

  </div>
  <div class="trenruss">
    <?php if (isset($_SESSION['start'])) {

     ?>
    <h1>Тренажёр "Словарные слова"</h1>
    <?php
if (isset($_SESSION['sun'])) {
echo $_SESSION['sys2'];
     ?>
<form action="vendor/suster.php" method="post">
  <label>Исправьте ошибку</label>
  <input type="text" name="run">
</form>
     <?php
     echo $_SESSION['ver'];
   } else {

    ?>
  <?php
$mysql = new mysqli('localhost', 'root', '', '4vclass');
$system232 = $mysql->query("SELECT * FROM `massiv`");
$rrr = mysqli_fetch_assoc($system232);
if (isset($_SESSION['ender'])) {
$ohss = array($rrr['1'] , $rrr['2'] , $rrr['3'], $rrr['4'], $rrr['5'], $rrr['6'], $rrr['7'], $rrr['8'], $rrr['9'], $rrr['10'], $rrr['11'], $rrr['12'], $rrr['13'], $rrr['14'], $rrr['15'], $rrr['16'], $rrr['17'], $rrr['18'], $rrr['19'], $rrr['20'], $rrr['21'], $rrr['22'], $rrr['23'], $rrr['24'], $rrr['25'], $rrr['26'], $rrr['27'], $rrr['28'], $rrr['29'], $rrr['30']);

}
$osys  = rand(0, 29);
$_SESSION['ss'] = $osys;
if (isset($ohss)) {
$_SESSION['sys2'] = $ohss[$_SESSION['ss']];
echo $_SESSION['sys2'];

}


   ?>
   <form action="vendor/sssystem.php" method="post">
     <label>Введите правильный вариант</label>
     <input type="text" name="ss" autocomplete="off">
   </form>
<?php
if (isset($_SESSION['ver'])) {


echo $_SESSION['ver'];
}
unset($_SESSION['ver']);
}
}
 ?>
  </div>

</body>
</html>
