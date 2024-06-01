<?php
session_start();
?>
<!doctype html>
<html lang="ru">
<head>
    <style>
        #popup_bed {
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
        #popup_bed:target {
            opacity: 1;
            visibility: visible;
        }
        #popup_bed:target #popup_content {
            opacity: 1;
            transform: perspective(600px) translate(0px, 0%) rotateX(0deg);
        }
        #popup_div {
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
        #popup_div:target {
            opacity: 1;
            visibility: visible;
        }
        #popup_div:target #popup_content {
            opacity: 1;
            transform: perspective(600px) translate(0px, 0%) rotateX(0deg);
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
        #popup_book {
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
        #popup_book:target {
            opacity: 1;
            visibility: visible;
        }
        #popup_book:target #popup_content {
            opacity: 1;
            transform: perspective(600px) translate(0px, 0%) rotateX(0deg);
        }
        #popup_stoim {
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
        #popup_stoim:target {
            opacity: 1;
            visibility: visible;
        }
        #popup_stoim:target #popup_content {
            opacity: 1;
            transform: perspective(600px) translate(0px, 0%) rotateX(0deg);
        }
        #popup_sev {
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
        #popup_sev:target {
            opacity: 1;
            visibility: visible;
        }
        #popup_sev:target #popup_content {
            opacity: 1;
            transform: perspective(600px) translate(0px, 0%) rotateX(0deg);
        }

        #popup_war {
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
        #popup_war:target {
            opacity: 1;
            visibility: visible;
        }
        #popup_war:target #popup_content {
            opacity: 1;
            transform: perspective(600px) translate(0px, 0%) rotateX(0deg);
        }
        #imgs, #hell1, #imgs2, #imgs3, #imgs1 {
            position: absolute;
            top: 50px;
            left: 400px;
            z-index: 99;
        }
        .lobbe {
            border: 2px solid black;
            height: 300px;
        }
    </style>
    <meta charset="UTF-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$_SESSION['user']['name']?> - 4 В класс</title>
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
$name  = $_SESSION['user']['name'];
$login = $_SESSION['user']['login'];
$sname = $_SESSION['user']['surname'];
$res = $mysql->query("SELECT * FROM `lobbe` WHERE `login` = '$login'");
if (mysqli_num_rows($res) == 0) {
    $res = $mysql->query("INSERT INTO `lobbe` (`name`, `sname`, `login`, `tabel`, `sofa`, `bed`, `shelv`, `war`) VALUES ('$name', '$sname', '$login', 'images/zomokk.jfif', 'images/zomokk.jfif', 'images/zomokk.jfif', 'images/zomokk.jfif', 'images/zomokk.jfif')");
} 
?>

<a href="#popup">Столы</a>
<a href="#popup_div">Диваны</a>
<a href="#popup_bed">Кровати</a>
<a href="#popup_sev">Полки</a>
<a href="#popup_war">Шкафы</a>
<a href="#popup_stoim">Таблица стоимости</a>
<div id="popup">
    <div id="popup_body">
        <div id="popup_content">
            <a href="#" class="popup_close"><img src="images/ccre.png" alt="" width="50px"></a>
            <div class="popup_title">Столы</div>
            <div id="popup_text">
                <center><p>Столы</p></center>
                <form action="lobbe/tabel/vendor/obrtabel.php" method="post">
               <input type="radio" name="tabel" id="tabel" value="lobbe/tabel/1.png"><label for="tabel"><img title="Доисторический стол 1" src="lobbe/tabel/1.png" alt="" width="100px" height="100px"></label>
                    <input type="radio" name="tabel" id="tabel1" value="lobbe/tabel/2.png"><label for="tabel1"><img title="Простой стол 2" src="lobbe/tabel/2.png" alt="" width="100px" height="100px"></label>
                    <input type="radio" name="tabel" id="tabel2" value="lobbe/tabel/3.png"><label for="tabel2"><img title="Хороший стол 3" src="lobbe/tabel/3.png" alt="" width="100px" height="100px"></label>
                    <input type="radio" name="tabel" id="tabel3" value="lobbe/tabel/4.png"><label for="tabel3"><img  title="Стол богатого 4" src="lobbe/tabel/4.png" alt="" width="100px" height="100px"></label>
                    <input type="radio" name="tabel" id="tabel4" value="lobbe/tabel/5.png"><label for="tabel4"><img  title="Инновационный стол 5" src="lobbe/tabel/5.png" alt="" width="100px" height="100px"></label>
                    <br>
                    <center><button>Обновить</button></center>
                </form>

                <table border="1">
                    <thead>
                    <th>Объект</th>
                    <th>Стоимость</th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Стол 1</td>
                        <td>50CC</td>
                    </tr>
                    <tr>
                        <td>Стол 2</td>
                        <td>2SC</td>
                    </tr>
                    <tr>
                        <td>Стол 3</td>
                        <td>4SC</td>
                    </tr>
                    <tr>
                        <td>Стол 4</td>
                        <td>5SC</td>
                    </tr>
                    <tr>
                        <td>Стол 5</td>
                        <td>6SC</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div id="popup_div">
    <div id="popup_body">
        <div id="popup_content">
            <a href="#" class="popup_close"><img src="images/ccre.png" alt="" width="50px"></a>
            <div class="popup_title">Диваны</div>
            <div id="popup_text">
                <center><p>Диваны</p></center>
                <form action="lobbe/sofa/vendor/obrsoba.php" method="post">
                    <input type="radio" name="sofa" id="sofa" value="lobbe/sofa/1.png"><label for="sofa"><img title="Доисторический диван 1" src="lobbe/sofa/1.png" alt="" width="100px" height="100px"></label>
                    <input type="radio" name="sofa" id="sofa1" value="lobbe/sofa/2.png"><label for="sofa1"><img title="Простой диван 2" src="lobbe/sofa/2.png" alt="" width="100px" height="100px"></label>
                    <input type="radio" name="sofa" id="sofa2" value="lobbe/sofa/3.png"><label for="sofa2"><img title="Хороший диван 3" src="lobbe/sofa/3.png" alt="" width="100px" height="100px"></label>
                    <input type="radio" name="sofa" id="sofa3" value="lobbe/sofa/4.png"><label for="sofa3"><img  title="Диван богатого 4" src="lobbe/sofa/4.png" alt="" width="100px" height="100px"></label>
                    <input type="radio" name="sofa" id="sofa4" value="lobbe/sofa/5.png"><label for="sofa4"><img  title="Инновационный диван 5" src="lobbe/sofa/5.png" alt="" width="100px" height="100px"></label>
                    <br>
                    <center><button>Обновить</button></center>

                </form>
                <table border="1">
                    <thead>
                    <th>Объект</th>
                    <th>Стоимость</th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Диван 1</td>
                        <td>50CC</td>
                    </tr>
                    <tr>
                        <td>Диван 2</td>
                        <td>2SC</td>
                    </tr>
                    <tr>
                        <td>Диван 3</td>
                        <td>4SC</td>
                    </tr>
                    <tr>
                        <td>Диван 4</td>
                        <td>5SC</td>
                    </tr>
                    <tr>
                        <td>Диван 5</td>
                        <td>7SC</td>
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
<div id="popup_bed">
    <div id="popup_body">
        <div id="popup_content">
            <a href="#" class="popup_close"><img src="images/ccre.png" alt="" width="50px"></a>
            <div class="popup_title">Кровати</div>
            <div id="popup_text">
                <center><p>Кровати</p></center>
                <form action="lobbe/bed/vendor/obrbed.php" method="post">
                    <input type="radio" name="bed" id="bed" value="lobbe/bed/1.png"><label for="bed"><img title="Каменная кровать 1" src="lobbe/bed/1.png" alt="" width="100px" height="100px"></label>
                    <input type="radio" name="bed" id="bed1" value="lobbe/bed/2.png"><label for="bed1"><img title="Простая кровать 2" src="lobbe/bed/2.png" alt="" width="100px" height="100px"></label>
                    <input type="radio" name="bed" id="bed2" value="lobbe/bed/3.png"><label for="bed2"><img title="Хорошая кровать 3" src="lobbe/bed/3.png" alt="" width="100px" height="100px"></label>
                    <input type="radio" name="bed" id="bed3" value="lobbe/bed/4.png"><label for="bed3"><img  title="Кровать богатого 4" src="lobbe/bed/4.png" alt="" width="100px" height="100px"></label>
                    <input type="radio" name="bed" id="bed4" value="lobbe/bed/5.png"><label for="bed4"><img  title="Инновационная кровать 5" src="lobbe/bed/5.png" alt="" width="100px" height="100px"></label>
                    <br>
                    <center><button>Обновить</button></center>
                </form>
                <table border="1">
                    <thead>
                    <th>Объект</th>
                    <th>Стоимость</th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Кровать 1</td>
                        <td>1SC</td>
                    </tr>
                    <tr>
                        <td>Кровать 2</td>
                        <td>3SC</td>
                    </tr>
                    <tr>
                        <td>Кровать 3</td>
                        <td>5SC</td>
                    </tr>
                    <tr>
                        <td>Кровать 4</td>
                        <td>6SC</td>
                    </tr>
                    <tr>
                        <td>Кровать 5</td>
                        <td>7SC</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div id="popup_war">
    <div id="popup_body">
        <div id="popup_content">
            <a href="#" class="popup_close"><img src="images/ccre.png" alt="" width="50px"></a>
            <div class="popup_title">Полки</div>
            <div id="popup_text">
                <center><p>Полки</p></center>
                <form action="lobbe/wardrobes/vendor/obrwar.php" method="post">
                    <input type="radio" name="war" id="war" value="lobbe/wardrobes/1.png"><label for="war"><img title="Каменный шкаф 1 Стоимость: 2SC" src="lobbe/wardrobes/1.png" alt="" width="100px" height="100px"></label>
                    <input type="radio" name="war" id="war1" value="lobbe/wardrobes/2.png"><label for="war1"><img title="Простой шкаф 2 Стоимость: 5SC" src="lobbe/wardrobes/2.png" alt="" width="100px" height="100px"></label>
                    <input type="radio" name="war" id="war2" value="lobbe/wardrobes/3.png"><label for="war2"><img title="Хороший шкаф 3 Стоимость: 7SC" src="lobbe/wardrobes/3.png" alt="" width="100px" height="100px"></label>
                    <input type="radio" name="war" id="war3" value="lobbe/wardrobes/4.png"><label for="war3"><img  title="Шкаф богатого 4 Стоимость: 13SC" src="lobbe/wardrobes/4.png" alt="" width="100px" height="100px"></label>
                    <input type="radio" name="war" id="war4" value="lobbe/wardrobes/5.png"><label for="war4"><img  title="Инновационный шкаф 5 Стоимость: 15SC" src="lobbe/wardrobes/5.png" alt="" width="100px" height="100px"></label>
                    <br>
                    <center><button>Обновить</button></center>
                </form>
                <table border="1">
                    <thead>
                    <th>Объект</th>
                    <th>Стоимость</th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Шкаф 1</td>
                        <td>2SC</td>
                    </tr>
                    <tr>
                        <td>Шкаф 2</td>
                        <td>5SC</td>
                    </tr>
                    <tr>
                        <td>Шкаф 3</td>
                        <td>7SC</td>
                    </tr>
                    <tr>
                        <td>Шкаф 4</td>
                        <td>13SC</td>
                    </tr>
                    <tr>
                        <td>Шкаф 5</td>
                        <td>15SC</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div id="popup_sev">
    <div id="popup_body">
        <div id="popup_content">
            <a href="#" class="popup_close"><img src="images/ccre.png" alt="" width="50px"></a>
            <div class="popup_title">Полки</div>
            <div id="popup_text">
                <center><p>Полки</p></center>
                <form action="lobbe/shelves/vendor/obrselves.php" method="post">
                    <input type="radio" name="sev" id="sev" value="lobbe/shelves/1.png"><label for="sev"><img title="Каменная полка 1 Стоимость: 25CC" src="lobbe/shelves/1.png" alt="" width="100px" height="100px"></label>
                    <input type="radio" name="sev" id="sev1" value="lobbe/shelves/2.png"><label for="sev1"><img title="Простая полка 2 Стоимость: 50CC" src="lobbe/shelves/2.png" alt="" width="100px" height="100px"></label>
                    <input type="radio" name="sev" id="sev2" value="lobbe/shelves/3.png"><label for="sev2"><img title="Хорошая полка 3 Стоимость: 1SC" src="lobbe/shelves/3.png" alt="" width="100px" height="100px"></label>
                    <input type="radio" name="sev" id="sev3" value="lobbe/shelves/4.png"><label for="sev3"><img  title="Полка богатого 4 Стоимость: 1SC 50CC " src="lobbe/shelves/4.png" alt="" width="100px" height="100px"></label>
                    <input type="radio" name="sev" id="sev4" value="lobbe/shelves/5.png"><label for="sev4"><img  title="Инновационная полка 5 Стоимость: 2SC" src="lobbe/shelves/5.png" alt="" width="100px" height="100px"></label>
                    <br>
                    <center><button>Обновить</button></center>
                </form>
                <table border="1">
                    <thead>
                    <th>Объект</th>
                    <th>Стоимость</th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Полка 1</td>
                        <td>25СС</td>
                    </tr>
                    <tr>
                        <td>Полка 2</td>
                        <td>50сс</td>
                    </tr>
                    <tr>
                        <td>Полка 3</td>
                        <td>1SC</td>
                    </tr>
                    <tr>
                        <td>Полка 4</td>
                        <td>1SC 50SD</td>
                    </tr>
                    <tr>
                        <td>Полка 5</td>
                        <td>2SC</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div id="popup_stoim">
    <div id="popup_body">
        <div id="popup_content">
            <a href="#" class="popup_close"><img src="images/ccre.png" alt="" width="50px"></a>
            <div class="popup_title">Стоимость</div>
            <div id="popup_text">
                <center><p>Стоимость</p></center>
                <table border="1">
                    <thead>
                    <th>Объект</th>
                    <th>Стоимость</th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Диван 1</td>
                        <td>50CC</td>
                    </tr>
                    <tr>
                        <td>Диван 2</td>
                        <td>2SC</td>
                    </tr>
                    <tr>
                        <td>Диван 3</td>
                        <td>4SC</td>
                    </tr>
                    <tr>
                        <td>Диван 4</td>
                        <td>5SC</td>
                    </tr>
                    <tr>
                        <td>Диван 5</td>
                        <td>7SC</td>
                    </tr>
                    </tbody>
                </table>
                <br>
                <table border="1">
                    <thead>
                    <th>Объект</th>
                    <th>Стоимость</th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Стол 1</td>
                        <td>50CC</td>
                    </tr>
                    <tr>
                        <td>Стол 2</td>
                        <td>2SC</td>
                    </tr>
                    <tr>
                        <td>Стол 3</td>
                        <td>4SC</td>
                    </tr>
                    <tr>
                        <td>Стол 4</td>
                        <td>5SC</td>
                    </tr>
                    <tr>
                        <td>Стол 5</td>
                        <td>6SC</td>
                    </tr>
                    </tbody>
                </table>
                <br>
                <table border="1">
                    <thead>
                    <th>Объект</th>
                    <th>Стоимость</th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Кровать 1</td>
                        <td>1SC</td>
                    </tr>
                    <tr>
                        <td>Кровать 2</td>
                        <td>3SC</td>
                    </tr>
                    <tr>
                        <td>Кровать 3</td>
                        <td>5SC</td>
                    </tr>
                    <tr>
                        <td>Кровать 4</td>
                        <td>6SC</td>
                    </tr>
                    <tr>
                        <td>Кровать 5</td>
                        <td>7SC</td>
                    </tr>
                    </tbody>
                </table>
                <br>
                <table border="1">
                    <thead>
                    <th>Объект</th>
                    <th>Стоимость</th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Полка 1</td>
                        <td>25СС</td>
                    </tr>
                    <tr>
                        <td>Полка 2</td>
                        <td>50сс</td>
                    </tr>
                    <tr>
                        <td>Полка 3</td>
                        <td>1SC</td>
                    </tr>
                    <tr>
                        <td>Полка 4</td>
                        <td>1SC 50SD</td>
                    </tr>
                    <tr>
                        <td>Полка 5</td>
                        <td>2SC</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div id="popup_book">
    <div id="popup_body">
        <div id="popup_content">
            <a href="#" class="popup_close"><img src="images/ccre.png" alt="" width="50px"></a>
            <div class="popup_title">Блокнот</div>
            <div id="popup_text">
                <center><p>Личные записи</p></center>
                <form action="lobbe/book.php" method="post">
                    <?php
                    $oneres = $mysql->query("SELECT * FROM `lobbe` WHERE `login` = '$login'");
                    $reder = mysqli_fetch_assoc($oneres);
                    $book = $reder['book'];
                    ?>
                    <textarea name="book" type="text" style="width: 450px; height: 450px;"><?=$book?></textarea>
                    <button>Выполнить</button>

                </form>
            </div>
        </div>
    </div>
</div>


<div class="lobbe">
<h1>Лобби</h1>
<?php
$mysql = new mysqli('localhost', 'root', '', '4vclass');
$oneres = $mysql->query("SELECT * FROM `lobbe` WHERE `login` = '$login'");
$reder = mysqli_fetch_assoc($oneres);
$tadel = $reder['tabel'];
?>
<img src="<?=$tadel?>" id="oneimg" width="200px" height="200px">
    <?php
    $sofa = $reder['sofa'];
    ?>
    <img src="<?=$sofa?>" id="oneimg" width="400px" height="200px">
    <?php
    $bed = $reder['bed'];
    ?>
    <img src="<?=$bed?>" id="oneimg" width="400px" height="200px">
    <?php
    $sev = $reder['shelv'];
    ?>
    <img src="<?=$sev?>" id="oneimg" width="400px" height="200px">
    <?php
    $war = $reder['war'];
    ?>
    <img src="<?=$war?>" id="oneimg" width="400px" height="200px">
<a href="#popup_book"><img src="lobbe/block.png" width="300px"></a>
</div>
</body>
</html>