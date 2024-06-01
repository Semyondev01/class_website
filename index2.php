<?php
session_start()
?>


<!doctype html>
<html lang="ru">
<head>
  <style>
      .form {
          margin-top: 100px;
          width: 300px;
      }
  a {
      color: #7c9ab7;
      font-weight: bold;
      text-decoration: none;
  }

  p {
      margin: 10px 0;
  }

  form {
      display: flex;
      flex-direction: column;
      width: 300px;
  }

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

  .msg {
      border: 2px solid #ffa908;
      border-radius: 3px;
      padding: 10px;
      text-align: center;
      font-weight: bold;
  }

  .logout {
      color: #b7625c;
  }
  #hhh {
    color: skyblue;
  }
  #ccc {
      color: white;
      margin-left: 22px;
      width: 200px;
      height: 50px;
      border:  3px solid #000;
      border-radius: 10px 10px;
      position: absolute;
      right: 0;
      top: 50px;
      background-color: #ff1213;
  }


  .page {
    min-height: 100%;
    display: flex;
    flex-direction: column;
    overflow: hidden;
  }
  #soshial {
    margin-left: 30px;
  }

#rights {
  margin-left: 30px;
}
footer {
  background-color: black;

  flex: 0 0 auto;
  color: white;
}

#img {
  width: 60px;
}
html,
body {
  height: 100%;
  width: 100%;
}
body {
  display: flex;
  flex-direction: column;
}
.content {
  flex: 1 0 auto;
}

#ff {
  margin-left: 10px;
}
 .date {

  position: absolute;
  /* left: 1820px; */
     top: 0px;
     right: 150px;


}
.one {
 width: 60px;
 height: 50px;
 font-size: 40px;
    text-align: right;
    margin-right: 10px;


}
.popup {
    position: fixed;
    height: 100%;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.8);
    top: 0;
    left: 0;
    opacity: 0;
    visibility: hidden;
}
.popup:target {
    opacity: 1;
    visibility: visible;
}
.popup_text {
    color: black;
}
.popup_title {
    color: black;
}
.popup_body {
    min-height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 30px 10px;
}
.popup_content {
    background-color: white;
    color: white;
    max-width: 800px;
    padding: 30px;
    position: relative;
}
.popup_close {
    position: absolute;
    right: 10px;
    top: 10px;
    font-size: 20px;
    color: black;
    text-decoration: none;
}
header {
      position: fixed;
      z-index: 0;
      width: 100%;
  }
@keyframes showheader {
    0%{
        opacity: 0;
        top: -70%;
    }
    100%{
        opacity: 1;
        top: 0;
    }
}
#gf {
    text-align: center;
    font-size: 30px;
 }
#imgs, #hell1, #imgs2, #imgs3, #imgs1 {
    position: absolute;
     top: 50px;
    z-index: 2;
    left: 400px;
}
    .navbar-header1 {
        position: absolute;
        right: 100px;
    }
    .one, .y{
        display: inline-block;
    }
      * {
          margin: 0;
          /* box-sizing: border-box; */
      }
      html, body {
          font-size: 18px;
      }


      /* Слайдер */
      .slick-slider{}
      /* Слайдер запущен */
      .slick-slider.slick-initialized{
      }
      /* Слайдер с точками */
      .slick-slider.slick-dotted{}
      /* Ограничивающая оболочка */
      .slick-list {
          overflow: hidden;

      }
      /* Лента слайдов */
      .slick-track{
          display: flex;
      }
      /* Слайд */
      .slick-slide{}
      /* Слайд активный (показывается) */
      .slick-slide.slick-active{}
      /* Слайд основной */
      .slick-slide.slick-current{}
      /* Слайд по центру */
      .slick-slide.slick-center{}
      /* Клонированный слайд */
      .slick-slide.slick-cloned{}
      /* Стрелка */
      .slick-arrow{}
      /* Стрелка влево */
      .slick-arrow.slick-prev{}
      /* Стрелка вправо */
      .slick-arrow.slick-next{}
      /* Стрелка не активная */
      .slick-arrow.slick-disabled{}
      /* Точки (булиты) */
      .slick-dots{}
      .slick-dots li{}
      /* Активная точка */
      .slick-dots li.slick-active{}
      /* Элемент точки */
      .slick-dots li button{}

      .slider {
          position: relative;
          padding: 0 60px;
      }
      .slider .slick-arrow{
          position: absolute;
          top: 50%;
          z-index: 10;
          margin:  -30px 0px 0px 0px;
      }
      .slider .slick-arrow.slick-arrow.slick-prev {
          left: 0;

      }
      .slider .slick-arrow.slick-arrow.slick-next {
          right: 0;

      }
      .slider_item{

      }
      .slider .slick-dots{
          display: flex;
          align-items: center;
          justify-items: center;
      }
      .slider .slick-dots li {
          list-style: none;
          margin: 0px 10px;
      }
      .slider .slick-dots button{
          font-size: 0;
          width: 10px;
          height: 10px;
          background-color: #fff;
          border-radius: 50%;
          border: none;

      }
      .slider .slick-dots li.slick-active button {
          background-color: transparent;
          border: 1px solid #000;
      }
.slider {
    width: 900px;
    background-color: #787671;
    height: 200px;
}
/*.slider img {*/
/*    height: 200px;*/
/*    width: 200px;*/
/*}*/
   .slider {
       position: absolute;
 top: 100px;
       right: 500px;
   }
   .big-content{
       overflow: hidden;
       display: flex;
       flex-direction: column;
       min-height: 80vh;
   }
   footer {
       margin-top: auto;
   }











      <?php
      $mysql = new mysqli('localhost', 'root', '', '4vclass');
      $cool = $mysql->query("SELECT * FROM `css`");
      while ($gg = mysqli_fetch_assoc($cool)) {
         echo $gg['Code'];
      }

      ?>





  </style>

    <meta charset="UTF-8">
    <title>Наш 4"В" класс</title>
    <link rel="shortcut icon" href="images\4v.jpg" type="image/x-icon">
    </div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

    <meta name="keywords" content="4vclass, class, site">
    <meta name="description" content="Это сайт нашего 4 В класса. Здесь вы найдёте интересные игры, новости и многое другое! Пререходите - не пожалеете!" />
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
<noscript><div><img src="https://mc.yandex.ru/watch/91118282" style="" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</head>
<body>



  <header class="navdar navbar-default">
  	<div class="container">
  		<div class="navbar-header">
  			<a href="/" class="navbar-brand" title="С наступающим Новым годом!!!">4 "В" класс</a>
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
  <div class="big-content">
 <div class="slider">
   <div class="slider_item">
       <img src="images/profile.png">
   </div>
  <div class="slider_item">
        <img src="images/profile.png">
  </div>
     <div class="slider_item">
         <img src="images/profile.png">
     </div>
  <div class="slider_item">
      <img src="images/profile.png">
  </div>
   <div class="slider_item">
     <img src="images/profile.png">
   </div>
   <div class="slider_item">
     <img src="images/profile.png" alt="">
  </div>



<!--   <div class="rev_slider">-->
<!--        <div class="slide">-->
<!--            <div class="photo"><img src="images/myschool.jpg" alt="" width="60px" height="60px" style="border-radius: 50%"></div>-->
<!--            <div class="name">Семён</div>-->
<!--            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed enim lacus. Aenean venenatis, nibh ac mollis imperdiet, leo nibh commodo turpis, ac ullamcorper mauris lorem sed eros. Vestibulum sit amet finibus quam, bibendum rhoncus metus. Mauris sollicitudin ante elit, eget vehicula purus euismod eu. Sed varius rhoncus nibh rutrum scelerisque. Ut molestie velit et ipsum vestibulum condimentum. Praesent ullamcorper eleifend dui ut fringilla. Maecenas a suscipit mauris. Proin consequat.</div>-->
<!--        </div>-->
<!--        <div class="slide">-->
<!--            <div class="photo"><img src="images/myschool.jpg" alt="" width="60px" height="60px" style="border-radius: 50%"></div>-->
<!--            <div class="name">Семён</div>-->
<!--            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed enim lacus. Aenean venenatis, nibh ac mollis imperdiet, leo nibh commodo turpis, ac ullamcorper mauris lorem sed eros. Vestibulum sit amet finibus quam, bibendum rhoncus metus. Mauris sollicitudin ante elit, eget vehicula purus euismod eu. Sed varius rhoncus nibh rutrum scelerisque. Ut molestie velit et ipsum vestibulum condimentum. Praesent ullamcorper eleifend dui ut fringilla. Maecenas a suscipit mauris. Proin consequat.</div>-->
<!--        </div>-->
<!--</div>-->
  <div class="content">

<!--      <script>-->
<!--  window.onscroll = function showHeader {-->
<!--      var header = document.querySelector('.navdar navbar-default');-->
<!--      if(window.pageYOffset > 200) {-->
<!--          header.classList.add('header-fixed')-->
<!--      }-->
<!--  }-->
<!--      </script>-->





     <?php $mysql = new mysqli('localhost', 'root', '', '4vclass');
     $cod44 = $mysql->query("SELECT * FROM `predupr`");
  if (mysqli_num_rows($cod44) == 0) {

  } else {

     ?>
      <div id="ccc" onclick="(document.getElementById('ccc').style.display ='none')">
    <?php } ?>

      <?php
      $mysql = new mysqli('localhost', 'root', '', '4vclass');
      $cod = $mysql->query("SELECT * FROM `predupr`");
      while ($dd = mysqli_fetch_assoc($cod)) {
      echo $dd['predupr'];
      echo "<br>";
      }

      ?>
  </div></div>

  <div class="container">

  </div>
<div class="popup" id="popup">
    <div class="popup_body">
        <div class="popup_content">
            <a class="popup_close" href="#">X</a>
            <div class="popup_title">
                     Модельное окно 1
            </div>
            <div class="popup_text">
                text...
            </div>
        </div>
    </div>
</div>
<div class="date">
  <?php date_default_timezone_set('Asia/Yekaterinburg');
  $month = [
    'Январь',
    'Февраль',
    'Март',
    'Апрель',
    'Май',
    'Июнь',
    'Июль',
    'Август',
    'Сентябрь',
    'Октябрь',
    'Ноябрь',
    'Декабрь'
  ];
  $day = [
    'Понедельник',
    'Вторник',
    'Среда',
    'Четверг',
    'Пятница',
    'Суббота',
    'Воскресенье'
  ];
  echo "<div class=one>";
  $b4 = Date('j');
  echo "$b4";
  echo "</div>";
  echo "<div class=y>";
  $b = Date('n')-1;
    $c = $month["$b"];
    echo "$c";
    echo "<br>";
    $b1 = Date('N')-1;
      $c1 = $day["$b1"];
      echo "$c1";
      echo "</div>";
                                                                                                                                                                     "<br>";


 ?>
</div>

</div>
<footer>
  <center><img id="img" src="/images/4v.jpg"></center>
  <div id="ff">
    Все права защищены &copy. <?=date('Y')?> год
  </div>
</footer>
  <div class="scrollTop">
      <i class="fa-solid fa-up"></i>
  </div>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
 <script src="js/slick.min.js"></script>
<script>$(document).ready(function(){
        $('.slider').slick({
            arrows:true,
            dots:true,
            adaptiveHeight:true,
            slidesToShow:3,
            slidesToScroll:3,
            speed:1000,
            autoplay:true,
            autoplaySpeed:5000
        });
    });
</script>


</body>
</html>
