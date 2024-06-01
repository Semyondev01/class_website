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
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Опрос</title>
</head>
<body>
<h1>Опрос</h1>
<div class="opr">
    <?php
    echo "Красный";
    $mysql = new mysqli('localhost', 'root', '', '4vclass');
    $gom1 = $mysql->query("SELECT * FROM `test` WHERE `color` = 'Красный'");
    echo mysqli_num_rows($gom1);
    echo "<br>";
    echo "Синий";
    $gom2 = $mysql->query("SELECT * FROM `test` WHERE `color` = 'Синий'");
    echo mysqli_num_rows($gom2);
    echo "<br>";
    echo "Зелёный";
    $gom3 = $mysql->query("SELECT * FROM `test` WHERE `color` = 'Зелёный'");
    echo mysqli_num_rows($gom3);
    echo "<br>";
    echo "Оранжевый";
    $gom4 = $mysql->query("SELECT * FROM `test` WHERE `color` = 'Оранжевый'");
    echo mysqli_num_rows($gom4);
    echo "<br>";
    echo "Жёлтый";
    $gom5 = $mysql->query("SELECT * FROM `test` WHERE `color` = 'Жёлтый'");
    echo mysqli_num_rows($gom5);
    echo "<br>";
    echo "Черный";
    $gom6 = $mysql->query("SELECT * FROM `test` WHERE `color` = 'Чёрный'");
    echo mysqli_num_rows($gom6);
    echo "<br>";
    ?>

    <h1>Темы</h1>
    <?php
    echo "Тёмная тема";
    $mysql = new mysqli('localhost', 'root', '', '4vclass');
    $gom0 = $mysql->query("SELECT * FROM `test` WHERE `tem` = 'Тёмная тема'");
    echo mysqli_num_rows($gom0);
    echo "<br>";
    echo "Светлая тема";
    $mysql = new mysqli('localhost', 'root', '', '4vclass');
    $gom10 = $mysql->query("SELECT * FROM `test` WHERE `tem` = 'Светлая тема'");
    echo mysqli_num_rows($gom10);
    ?>
    <h1>Гамма</h1>
    <?php
    echo "1" . "<br>";
    echo "<br>";
    $mysql = new mysqli('localhost', 'root', '', '4vclass');
    $gom0 = $mysql->query("SELECT * FROM `test` WHERE `gamm` = 'color_1'");
    echo mysqli_num_rows($gom0);
    echo "<br>";
    echo "<br>";
    echo "2". "<br>";
    $mysql = new mysqli('localhost', 'root', '', '4vclass');
    $gom10 = $mysql->query("SELECT * FROM `test` WHERE `gamm` = 'color_2'");
    echo mysqli_num_rows($gom10);
    echo "<br>";
    echo "<br>";
    echo "3" . "<br>";
    $mysql = new mysqli('localhost', 'root', '', '4vclass');
    $gom10 = $mysql->query("SELECT * FROM `test` WHERE `gamm` = 'color_3'");
    echo mysqli_num_rows($gom10);
    echo "<br>";
    echo "<br>";
    echo "4" . "<br>";
    $mysql = new mysqli('localhost', 'root', '', '4vclass');
    $gom10 = $mysql->query("SELECT * FROM `test` WHERE `gamm` = 'color_4'");
    echo mysqli_num_rows($gom10);
    echo "<br>";
    echo "<br>";
    echo "5" . "<br>";
    $mysql = new mysqli('localhost', 'root', '', '4vclass');
    $gom0 = $mysql->query("SELECT * FROM `test` WHERE `gamm` = 'color_5'");
    echo mysqli_num_rows($gom0);
    echo "<br>";
    echo "<br>";
    echo "6" . "<br>";
    $mysql = new mysqli('localhost', 'root', '', '4vclass');
    $gom0 = $mysql->query("SELECT * FROM `test` WHERE `gamm` = 'color_6'");
    echo mysqli_num_rows($gom0);
    echo "<br>";
    echo "<br>";
    echo "7" . "<br>";
    $mysql = new mysqli('localhost', 'root', '', '4vclass');
    $gom0 = $mysql->query("SELECT * FROM `test` WHERE `gamm` = 'color_7'");
    echo mysqli_num_rows($gom0);
    echo "<br>";
    echo "<br>";
    ?>
    <h1>Другие цвета</h1>
    <?php
    $mysql = new mysqli('localhost', 'root', '', '4vclass');
    $gom101 = $mysql->query("SELECT * FROM `test` WHERE `color` = 'ncolor'");
    echo mysqli_num_rows($gom101);
    echo "<br>";
    ?>
    <h1>Всего проголосовало:</h1>
    <?php
    $mysql = new mysqli('localhost', 'root', '', '4vclass');
    $gom0 = $mysql->query("SELECT * FROM `test`");
    echo mysqli_num_rows($gom0);
    ?>
    <h1>Сброс</h1>
    <a href="vendor/testsbr.php">
        <button>Сбросить</button>
    </a>



</div>
</body>
</html>
