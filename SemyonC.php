<?php session_start(); ?>

<!DOCTYPE html>
<html lang="ru">
  <head>
  <style>
  button {
  border-radius: 0px;
  color: black;
  background-color: white;
  transition: 1s;
  }
  button:hover {
  background-color: #ffcc2d;
  color: white;
border-radius: 10px;
  }
  .hrg {
  color: black;
  text-decoration: none;
  transition: 1s;
  display: inline-block;
  }
  .hrg:hover {
  transform: rotate(360deg);
  color: #e5c215;
  text-decoration: black;
  }
     #popup {
            position: fixed;
            height: 100%;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            top: 0;
            left: 0px;
            opacity: 0;
            visibility: hidden;
            transition: 1s;
        }
        #popup_body {
            min-height: 100%;
            display: flex;
            align-items: center;
            justify-items: center;
            padding: 30px 10px;
            position: absolute;
        }
        #popup_content {
            background-color: white;
            color: black;
            max-width: 800px;
            padding: 30px;
            position: relative;
            opacity: 0;
            transform: perspective(600px) translate(0px, -100px) rotateX(45deg);
            transition: 1s;
        }
        .popup_close {
position: absolute;
            right: 10px;
            top: 10px;
            font-size: 20px;
            color: black;
            text-decoration: none;
        }
        .popup_title {
            font-size: 40px;
            margin: 0px 0px 1em 0px;
        }
        #popup:target {
            opacity: 1;
            visibility: visible;
        }
        #popup:target #popup_content {
            opacity: 1;
            transform: perspective(600px) translate(0px, 0%) rotateX(0deg);
        }
        .dollar {
        color: #ffcc2d;
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
    <title>SemyonCoin</title>
  </head>
  <body>

    <center><?php
$Login = $_SESSION['user']['login'];
  $mysql = new mysqli('localhost', 'root', '', '4vclass');
  $checSemyonC = $mysql->query("SELECT * FROM `semyonc` WHERE `Pollogin` = '$Login'");
  $syu = mysqli_fetch_assoc($checSemyonC);
echo "Ваш баланс: " . "<div class='dollar'>" . $syu['SemyonDollar'] . "</div>". "ClassCoin" . "<br>"; ?>
<?php
$Login = $_SESSION['user']['login'];
  $mysql = new mysqli('localhost', 'root', '', '4vclass');
  $checSemyon = $mysql->query("SELECT * FROM `semyonc` WHERE `Pollogin` = '$Login'");
  $sy = mysqli_fetch_assoc($checSemyon);
echo "Ваш баланс: " . "<div class='dollar'>" . $sy['SemyonCoin'] . "</div>" . " SemyonCoin" . "<br>"; ?>

<a href="#popup">Более подробная инструкция...</a>

<div id="popup">
    <div id="popup_body">
        <div id="popup_content">
            <a href="#" class="popup_close"><img src="images/ccre.png" alt="" width="50px"></a>
            <div class="popup_title">Инструкция</div>
            <div id="popup_text">
Если пользователь зарегистрирован в системе, то при решении одного примера он получает один ClassCoin.
1 SemyonCoin = 100 ClassCoin
На что же можно его потратить?
Накопив 1 SemyonCoin, можно разблокировать поля и сменить ник в чате.
<br>
<br>

                Все права защищены &copy. <?=date('Y')?> год. <br>
                By Semyon UI.
            </div>
        </div>
    </div>
</div>
<?php
if ($sy['Pole'] == 1){

} else {

$vsys = $syu['SemyonCoin'];
if ($vsys >= 1) {
  echo "Вы можете разблокировать поле для смены никнейма в чате" . "<br>";
  echo "Для разблокировки нажмите сюда";
 ?>
 <form action="vendor/razbloc.php">
 <button>Разблокировать</button>
</form>

  </body>
 </html>
<?php } ?>
<?php
}
$vevs = $sy['SemyonDollar'];
if ($vevs >= 100) {
  echo "Вы можете выполнить обмен на SemyonCoin" . "<br>";
  echo "Для выполнения нажмите сюда";
 ?>
 <form action="vendor/sd-sc.php">
 <button>Разблокировать</button>
</form>
  </body>
 </html>
<?php } ?>

<?php
$mysql = new mysqli('localhost', 'root', '', '4vclass');
$login1 = $_SESSION['user']['login'];
$check1 = $mysql->query("SELECT * FROM `style` WHERE `login` = '$login1'");
$rab = mysqli_fetch_assoc($check1);
$mysystem = $rab['razblock'];
if ($mysystem == 1 ) {

} else {
$def = $sy['SemyonCoin'];
if ($def >= 2) {
    echo "Вы можете изменять цвет на странице!";

 ?>
 <form action="vendor/izm.php" method="post">
<button>Изменить</button>
 </form>
 <?php
}}
 ?>
<p>Решите тренажеры, и вам будет начислен SemyonCoin</p>
<a href="chat.php" class="hrg">Назад</a>
  </body>
</html>
