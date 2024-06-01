<?php
 session_start()
?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/html">
<head>
  <style>
input {
    margin: 10px 0;
    padding: 10px;
    border: unset;
    border-bottom: 2px solid #e3e3e3;
    outline: none;
}
button {
    background-color: white;
    border-radius: 10px;
    transition: 1s;
}
button:hover {
    background-color: #1595ff;
}
#logout {
    color: #ff1213;
    text-decoration: none;
    transition: 1s;
}
#logout:hover {
    text-decoration: underline;
}
textarea {
    height: 70px;
}
img {
    border-radius: 50%;
}
.header-fixed {
    position: sticky;
    top: 0;
    left: 0;
    animation-name: showheader1;
    animation-duration: 1s;
}
@keyframes showheader1 {
    0% {
        top: -70px;
        opacity: 0;
    }
    100% {
        top: 0;
        opacity: 1;
    }
}

#hen {
    transition: 1s;
}
 #popup {
    position: fixed;
    height: 100%;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.8);
    top: 0;
    left: 0;
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




  </style>
  <meta charset="UTF-8">
  <title>Наш 4"В" класс</title>
  <link rel="shortcut icon" href="images\4v.jpg" type="image/x-icon">
  <meta name="viewport" content="width=device-width, inital-scale=1">
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
<?php


?>
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
              <li class="active"><a href="SemyonC.php">SemyonCoin</a></li>
<!--             <li class="active" id="hen" style="opacity: 0"><a href="createcloud.php">Облако</a></li>-->
            <li class="active"><a href="lobbe.php">Лобби</a></li>
            <li class="active"><a href="panel.php">Стили</a></li>



        </ul>

      </div>
    </div>
  </nav>
  <?php
if (isset($_SESSION['user'])) {



   ?><h3>
  <?php
   echo "Привет, " . $_SESSION['user']['name'] . "! " . "Это твой чат с классом!";
   echo "<br>";
   $mysql = new mysqli('localhost', 'root', '', '4vclass');
   $chel = $_SESSION['user']['login'];
   $systt = $mysql->query("SELECT * FROM `semyonc` WHERE `Pollogin` = '$chel'");



   $sit = mysqli_fetch_assoc($systt);
   $okno = $sit['Pole'];

    ?>
  </h3>
  <div class="mess">
    <form action="vendor\chatobr.php" method="post">
      <?php if ($okno == 1) {


       ?>
      <label>Ваше имя</label>
    <?php }  ?>
      <input type="text" name="name" value="<?= $_SESSION['user']['name']; ?>" <?php if ($okno == 1){

      } else {
        ?>
        hidden
      <?php } ?>  >
      <label hidden>Ваша фамилия</label>
      <input type="text" name="sname" value="<?= $_SESSION['user']['surname']; ?>" hidden>
      <label>Сообщение</label>
        <textarea type="text" name="mess" placeholder="Введите сообщение"></textarea>
      <label>Отправка лично</label>
      <input type="text" name="odnoclass" placeholder="Введите имя одноклассника">
      <button id="mess">Отправить</button>

    </form>
      <div class="sticker">
          <form action="vendor/sticker.php" method="post">
              <?php if ($okno == 1) {


                  ?>
                  <label>Ваше имя</label>
              <?php }  ?>
              <input type="text" name="name" value="<?= $_SESSION['user']['name']; ?>" <?php if ($okno == 1){

              } else {
                  ?>
                  hidden
              <?php } ?>  >
              <label>Отправка лично</label>
              <a href="#popup">Не знаете, что такое ID?</a>
              <input type="text" name="odnoclass" placeholder="Введите имя одноклассника">
              <label for="">Id, по которому вы сможете удалить стикер...</label><input type="text" name="id22" placeholder="id">
              <input type="radio" name="radiogroup" id="radio" hidden value="sticker/228.jpg"><label for="radio"><img src="sticker/228.jpg" alt="" width="50px" height="50px" id="img"></label>
              <input type="radio" name="radiogroup" id="radio2" hidden value="sticker/adidas.jpg">  <label for="radio2"><img src="sticker/adidas.jpg" alt="" width="50px" height="50px" id="img2"></label>
              <input type="radio" name="radiogroup" id="radio3" hidden value="sticker/android.jpg">  <label for="radio3"><img src="sticker/android.jpg" alt="" width="50px" height="50px" id="img3"></label>

              <input type="radio" name="radiogroup" id="radio4" hidden value="sticker/atomik.jpg"><label for="radio4"><img src="sticker/atomik.jpg" alt="" width="50px" height="50px" id="img4"></label>
              <input type="radio" name="radiogroup" id="radio5" hidden value="sticker/bravl.jpg">  <label for="radio5"><img src="sticker/bravl.jpg" alt="" width="50px" height="50px" id="img5"></label>
              <input type="radio" name="radiogroup" id="radio6" hidden value="sticker/bravl2.jpg">  <label for="radio6"><img src="sticker/bravl2.jpg" alt="" width="50px" height="50px" id="img6"></label>


              <input type="radio" name="radiogroup" id="radio7" hidden value="sticker/dislike.jpg"><label for="radio7"><img src="sticker/dislike.jpg" alt="" width="50px" height="50px" id="img7"></label>
              <input type="radio" name="radiogroup" id="radio8" hidden value="sticker/fire.jpg">  <label for="radio8"><img src="sticker/fire.jpg" alt="" width="50px" height="50px" id="img8"></label>
              <input type="radio" name="radiogroup" id="radio9" hidden value="sticker/gg.jpg">  <label for="radio9"><img src="sticker/gg.jpg" alt="" width="50px" height="50px" id="img9"></label>

              <input type="radio" name="radiogroup" id="radio10" hidden value="sticker/love.jpg"><label for="radio10"><img src="sticker/love.jpg" alt="" width="50px" height="50px" id="img10"></label>
              <input type="radio" name="radiogroup" id="radio11" hidden value="sticker/man.jpg"> <label for="radio11"><img src="sticker/man.jpg" alt="" width="50px" height="50px" id="img11"></label>
              <input type="radio" name="radiogroup" id="radio12" hidden value="sticker/sova.jpg">  <label for="radio12"><img src="sticker/sova.jpg" alt="" width="50px" height="50px" id="img12"></label>

              <input type="radio" name="radiogroup" id="radio13" hidden value="sticker/wifi.jpg">  <label for="radio13"><img src="sticker/wifi.jpg" alt="" width="50px" height="50px" id="img13"></label>

              <button>Отправить</button>
          </form>
      </div>
      <div id="popup">
          <div id="popup_body">
              <div id="popup_content">
                  <a href="#" class="popup_close"><img src="images/ccre.png" alt="" width="50px"></a>
                  <div class="popup_title">ID</div>
                  <div id="popup_text">
                      Id - это некое имя фотографии, по которомц вы сможете обратиться к стикеру и удалить его
                  </div>
              </div>
          </div>
      </div>
      <div class="photo">
          <form action="vendor/photo.php" method="post" enctype="multipart/form-data">
              <label for="">Id, по которому вы сможете удалить фото...</label>
              <input type="text" name="id222" placeholder="id">
              <?php if ($okno == 1) {


                  ?>
                  <label>Ваше имя</label>
              <?php }  ?>
              <input type="text" name="name" value="<?= $_SESSION['user']['name']; ?>" <?php if ($okno == 1){

              } else {
                  ?>
                  hidden
              <?php } ?>  >
              <label>Отправка лично</label>
              <input type="text" name="odnoclass" placeholder="Введите имя одноклассника">
              <label for="file">Отправить фотографию</label>
              <input type="file" id="file" name="photo">
              <button>Отправить</button>
          </form>
      </div>

    <?php if (isset($_SESSION['otp'])) {
          echo $_SESSION['otp'];
          unset($_SESSION['otp']);
  }



     ?>

  </div>
  <div class="chat">
    <h1>Чат:</h1>

    <?php
    $mysql = new mysqli('localhost', 'root', '', '4vclass');
    $gom = $mysql->query("SELECT * FROM `chat` WHERE `odnoclass` = ''");
    while ($tt = mysqli_fetch_assoc($gom)) {
        $ret = $tt['pol'];
        $ret1 = $tt['sname'];
        $gom11 = $mysql->query("SELECT * FROM `users` WHERE  `surname` = '$ret1' AND `login` = '$ret'");
        $sew = mysqli_fetch_assoc($gom11);
        $rr41 = $sew['avatar'];


        if ($tt['sticker'] == null) {

            if ($tt['photo'] == null) {
                echo "<img src=$rr41 width=50px>" . $tt['name'];
                if ($tt['ism'] == 1) {

                } else {
                    echo " " . $ret1;
                }
                echo ": " . $tt['mess'];
                echo "<br>";


            } else {
                $ttte = $tt['photo'];
                echo "<img src=$rr41 width=50px>" . $tt['name'];
                if ($tt['ism'] == 1) {
                } else {
                    echo " " . $ret1;
                }
                echo ": " . "<img src=$ttte width='50px' height='50px'>" . "<br>";
            }
        } else {

            $img = $tt['sticker'];

            echo "<img src=$rr41 width=50px>" . $tt['name'];
            if ($tt['ism'] == 1) {

            } else {
                echo " " . $ret1;
            }
            echo ": " . "<img src=$img width='50px' height='50px'>" . "<br>";

        }
    }


    ?>


<form action="vendor/delite.php" method="post">
  <button type="submit" name="button">Удалить ваши сообщения</button>

</form>
      <h1>Отправленные вами сообщения</h1>
      <?php
      $mysql = new mysqli('localhost', 'root', '', '4vclass');
      $sname = $_SESSION['user']['surname'];
      $gom = $mysql->query("SELECT * FROM `chat` WHERE  `sname` = '$sname'");
      while ($tt = mysqli_fetch_assoc($gom)) {
          $ret = $tt['pol'];
          $ret1 = $tt['sname'];
          $gom11 = $mysql->query("SELECT * FROM `users` WHERE  `surname` = '$ret1' AND `login` = '$ret'");
          $sew = mysqli_fetch_assoc($gom11);
          $rr41 = $sew['avatar'];


          if ($tt['sticker'] == null) {

              if ($tt['photo'] == null) {
                  echo "<img src=$rr41 width=50px>" . $tt['name'];
                  if ($tt['ism'] == 1) {

                  } else {
                      echo " " . $ret1;
                  }
                  echo ": " . $tt['mess'];
                  echo "<br>";


              } else {
                  $ttte = $tt['photo'];
                  echo "<img src=$rr41 width=50px>" . $tt['name'];
                  if ($tt['ism'] == 1) {
                  } else {
                      echo " " . $ret1;
                  }
                  echo ": " . "<img src=$ttte width='50px' height='50px'>" . "<br>";
              }
          } else {

              $img = $tt['sticker'];

              echo "<img src=$rr41 width=50px>" . $tt['name'];
              if ($tt['ism'] == 1) {

              } else {
                  echo " " . $ret1;
              }
              echo ": " . "<img src=$img width='50px' height='50px'>" . " " . $tt['sticker_name'] . "<br>";

          }
      }


      ?>
<form action="vendor/deletee.php" method="post">
  <label>Удалить сообщение</label>
  <p>Введите текст сообщения, которое хотите удалить</p>
 <input type="text" name="name3" value="<?=$_SESSION['user']['name']?>" <?php if ($okno == 1) {
  } else {
   ?>
 hidden <?php } ?>>
  <input type="text" name="delete" placeholder="Введите">
  <button type="submit" name="delete2">Удалить</button>
</form>
      <form action="vendor/deliteestick.php" method="post">
          <label>Удалить стикер</label>
          <p>Введите id стикера, который хотите удалить</p>
          <input type="text" name="name34" value="<?=$_SESSION['user']['name']?>" <?php if ($okno == 1) {
          } else {
              ?>
              hidden <?php } ?>>
          <input type="text" name="id44" placeholder="Введите">
          <button type="submit" name="delete2">Удалить</button>
      </form>
      <form action="vendor/deliteephoto.php" method="post">
      <label>Удалить фото</label>
      <p>Введите id фото, которое хотите удалить</p>
      <input type="text" name="name34" value="<?=$_SESSION['user']['name']?>" <?php if ($okno == 1) {
      } else {
          ?>
          hidden <?php } ?>>
      <input type="text" name="id444" placeholder="Введите">
      <button type="submit" name="delete2">Удалить</button>
      </form>
  </div>
  <a href="vendor\logout.php" id="logout">Выйти</a>
  <h1>Личные сообщения</h1>
  <?php
  $mysql = new mysqli('localhost', 'root', '', '4vclass');
  $reg = $_SESSION['user']['login'];
      $gom = $mysql->query("SELECT * FROM `chat` WHERE `odnoclass` = '$reg'");
    while ($tt = mysqli_fetch_assoc($gom)) {
        $ret = $tt['pol'];
        $ret1 = $tt['sname'];
        $gom11 = $mysql->query("SELECT * FROM `users` WHERE  `surname` = '$ret1' AND `login` = '$ret'");
        $sew = mysqli_fetch_assoc($gom11);
        $rr41 = $sew['avatar'];
        if ($tt['sticker'] == null) {

            if ($tt['photo'] == null) {
                echo "<img src=$rr41 width=50px>" . $tt['name'];
                if ($tt['ism'] == 1) {

                } else {
                    echo " " . $ret1;
                }
                echo ": " . $tt['mess'];
                echo "<br>";


            } else {
                $ttte = $tt['photo'];
                echo "<img src=$rr41 width=50px>" . $tt['name'];
                if ($tt['ism'] == 1) {
                } else {
                    echo " " . $ret1;
                }
                echo ": " . "<img src=$ttte width='50px' height='50px'>" . "<br>";
            }
        } else {

            $img = $tt['sticker'];

            echo "<img src=$rr41 width=50px>" . $tt['name'];
            if ($tt['ism'] == 1) {

            } else {
                echo " " . $ret1;
            }
            echo ": " . "<img src=$img width='50px' height='50px'>" . "<br>";

        }
    }
//  $gom = $mysql->query("SELECT * FROM `chat` WHERE `odnoclass` = '$reg'");
//  while ($tt = mysqli_fetch_assoc($gom)) {
//  echo $tt['name'] . " " .  $tt['sname'] . ": " . $tt['mess'];
//  echo "<br>";
//}
?>
<?php } else {
  echo "Авторизируйтесь по новой пожалуйста";
} ?>
  <script>
      window.onscroll = function () {
          var header = document.querySelector('.navbar-default');
          if (window.pageYOffset > 200) {
              header.classList.add('header-fixed');
          } else {
              header.classList.remove('header-fixed');
          }
          if (window.pageYOffset > 300) {
              document.getElementById('hen1').style.display = 'block';
          } else {
              document.getElementById('hen1').style.display = 'none';
          }
      }
  </script>
  <script>
      document.getElementById('radio').addEventListener('change', function () {
          document.getElementById('img').style.border = '2px solid #6495ED';
          document.getElementById('img2').style.border = 'none';
          document.getElementById('img3').style.border = 'none';
          document.getElementById('img4').style.border = 'none';
          document.getElementById('img5').style.border = 'none';
          document.getElementById('img6').style.border = 'none';
          document.getElementById('img7').style.border = 'none';
          document.getElementById('img8').style.border = 'none';
          document.getElementById('img9').style.border = 'none';
          document.getElementById('img10').style.border = 'none';
          document.getElementById('img11').style.border = 'none';
          document.getElementById('img12').style.border = 'none';
      });
      document.getElementById('radio2').addEventListener('change', function () {
          document.getElementById('img').style.border = 'none';
          document.getElementById('img2').style.border = '2px solid #6495ED';
          document.getElementById('img3').style.border = 'none';
          document.getElementById('img4').style.border = 'none';
          document.getElementById('img5').style.border = 'none';
          document.getElementById('img6').style.border = 'none';
          document.getElementById('img7').style.border = 'none';
          document.getElementById('img8').style.border = 'none';
          document.getElementById('img9').style.border = 'none';
          document.getElementById('img10').style.border = 'none';
          document.getElementById('img11').style.border = 'none';
          document.getElementById('img12').style.border = 'none';
          document.getElementById('img13').style.border = 'none';
      });
      document.getElementById('radio3').addEventListener('change', function () {
          document.getElementById('img3').style.border = '2px solid #6495ED';
          document.getElementById('img2').style.border = 'none';
          document.getElementById('img4').style.border = 'none';
          document.getElementById('img4').style.border = 'none';
          document.getElementById('img5').style.border = 'none';
          document.getElementById('img6').style.border = 'none';
          document.getElementById('img7').style.border = 'none';
          document.getElementById('img8').style.border = 'none';
          document.getElementById('img9').style.border = 'none';
          document.getElementById('img10').style.border = 'none';
          document.getElementById('img11').style.border = 'none';
          document.getElementById('img12').style.border = 'none';
      });
      document.getElementById('radio4').addEventListener('change', function () {
          document.getElementById('img4').style.border = '2px solid #6495ED';
          document.getElementById('img2').style.border = 'none';
          document.getElementById('img3').style.border = 'none';
          document.getElementById('img5').style.border = 'none';
          document.getElementById('img6').style.border = 'none';
          document.getElementById('img7').style.border = 'none';
          document.getElementById('img8').style.border = 'none';
          document.getElementById('img9').style.border = 'none';
          document.getElementById('img10').style.border = 'none';
          document.getElementById('img11').style.border = 'none';
          document.getElementById('img12').style.border = 'none';
          document.getElementById('img13').style.border = 'none';
      });
      document.getElementById('radio5').addEventListener('change', function () {
          document.getElementById('img5').style.border = '2px solid #6495ED';
          document.getElementById('img').style.border = 'none';
          document.getElementById('img2').style.border = 'none';
          document.getElementById('img3').style.border = 'none';
          document.getElementById('img4').style.border = 'none';
          document.getElementById('img6').style.border = 'none';
          document.getElementById('img7').style.border = 'none';
          document.getElementById('img8').style.border = 'none';
          document.getElementById('img9').style.border = 'none';
          document.getElementById('img10').style.border = 'none';
          document.getElementById('img11').style.border = 'none';
          document.getElementById('img12').style.border = 'none';
          document.getElementById('img13').style.border = 'none';
      });
      document.getElementById('radio6').addEventListener('change', function () {
          document.getElementById('img6').style.border = '2px solid #6495ED';
          document.getElementById('img').style.border = 'none';
          document.getElementById('img2').style.border = 'none';
          document.getElementById('img3').style.border = 'none';
          document.getElementById('img4').style.border = 'none';
          document.getElementById('img5').style.border = 'none';
          document.getElementById('img7').style.border = 'none';
          document.getElementById('img8').style.border = 'none';
          document.getElementById('img9').style.border = 'none';
          document.getElementById('img10').style.border = 'none';
          document.getElementById('img11').style.border = 'none';
          document.getElementById('img12').style.border = 'none';
          document.getElementById('img13').style.border = 'none';
      });
      document.getElementById('radio7').addEventListener('change', function () {
          document.getElementById('img7').style.border = '2px solid #6495ED';
          document.getElementById('img2').style.border = 'none';
          document.getElementById('img3').style.border = 'none';
          document.getElementById('img4').style.border = 'none';
          document.getElementById('img5').style.border = 'none';
          document.getElementById('img6').style.border = 'none';
          document.getElementById('img8').style.border = 'none';
          document.getElementById('img9').style.border = 'none';
          document.getElementById('img10').style.border = 'none';
          document.getElementById('img11').style.border = 'none';
          document.getElementById('img12').style.border = 'none';
      });
      document.getElementById('radio8').addEventListener('change', function () {
          document.getElementById('img8').style.border = '2px solid #6495ED';
          document.getElementById('img3').style.border = 'none';
          document.getElementById('img4').style.border = 'none';
          document.getElementById('img5').style.border = 'none';
          document.getElementById('img6').style.border = 'none';
          document.getElementById('img7').style.border = 'none';
          document.getElementById('img9').style.border = 'none';
          document.getElementById('img10').style.border = 'none';
          document.getElementById('img11').style.border = 'none';
          document.getElementById('img12').style.border = 'none';
          document.getElementById('img13').style.border = 'none';
      });
      document.getElementById('radio9').addEventListener('change', function () {
          document.getElementById('img9').style.border = '2px solid #6495ED';
          document.getElementById('img2').style.border = 'none';
          document.getElementById('img4').style.border = 'none';
          document.getElementById('img4').style.border = 'none';
          document.getElementById('img5').style.border = 'none';
          document.getElementById('img6').style.border = 'none';
          document.getElementById('img7').style.border = 'none';
          document.getElementById('img8').style.border = 'none';
          document.getElementById('img10').style.border = 'none';
          document.getElementById('img11').style.border = 'none';
          document.getElementById('img12').style.border = 'none';
      });
      document.getElementById('radio10').addEventListener('change', function () {
          document.getElementById('img10').style.border = '2px solid #6495ED';
          document.getElementById('img2').style.border = 'none';
          document.getElementById('img3').style.border = 'none';
          document.getElementById('img5').style.border = 'none';
          document.getElementById('img6').style.border = 'none';
          document.getElementById('img7').style.border = 'none';
          document.getElementById('img8').style.border = 'none';
          document.getElementById('img9').style.border = 'none';
          document.getElementById('img11').style.border = 'none';
          document.getElementById('img12').style.border = 'none';
          document.getElementById('img13').style.border = 'none';
      });
      document.getElementById('radio11').addEventListener('change', function () {
          document.getElementById('img11').style.border = '2px solid #6495ED';
          document.getElementById('img').style.border = 'none';
          document.getElementById('img2').style.border = 'none';
          document.getElementById('img3').style.border = 'none';
          document.getElementById('img4').style.border = 'none';
          document.getElementById('img6').style.border = 'none';
          document.getElementById('img7').style.border = 'none';
          document.getElementById('img8').style.border = 'none';
          document.getElementById('img9').style.border = 'none';
          document.getElementById('img10').style.border = 'none';
          document.getElementById('img12').style.border = 'none';
          document.getElementById('img13').style.border = 'none';
      });
      document.getElementById('radio12').addEventListener('change', function () {
          document.getElementById('img12').style.border = '2px solid #6495ED';
          document.getElementById('img').style.border = 'none';
          document.getElementById('img2').style.border = 'none';
          document.getElementById('img3').style.border = 'none';
          document.getElementById('img4').style.border = 'none';
          document.getElementById('img5').style.border = 'none';
          document.getElementById('img7').style.border = 'none';
          document.getElementById('img8').style.border = 'none';
          document.getElementById('img9').style.border = 'none';
          document.getElementById('img10').style.border = 'none';
          document.getElementById('img11').style.border = 'none';
          document.getElementById('img13').style.border = 'none';
      });
      document.getElementById('radio13').addEventListener('change', function () {
          document.getElementById('img13').style.border = '2px solid #6495ED';
          document.getElementById('img').style.border = 'none';
          document.getElementById('img2').style.border = 'none';
          document.getElementById('img3').style.border = 'none';
          document.getElementById('img4').style.border = 'none';
          document.getElementById('img5').style.border = 'none';
          document.getElementById('img7').style.border = 'none';
          document.getElementById('img8').style.border = 'none';
          document.getElementById('img9').style.border = 'none';
          document.getElementById('img10').style.border = 'none';
          document.getElementById('img11').style.border = 'none';
          document.getElementById('img12').style.border = 'none';
      });

  </script>
</body>
</html>
