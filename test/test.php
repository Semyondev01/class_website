<?php
session_start();
?>
<!doctype html>
<html lang="ru">
<head>
    <style>
        body {
            background-color: black;
            color: white;
        }
    </style>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="opr.png" type="image/x-icon">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Опрос</title>
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
<p>Пройдите опрос:</p>
<form action="testobr.php" method="post">
    <label for="">Имя</label>
    <input type="text" placeholder="Введите ваше имя" name="name">
    <br>
    <label for="">Фамилия</label>
    <input type="text" placeholder="Введите вашу фамилию" name="sname2">
    <br>
    <label for="color">Любимый цвет...</label>
    <select name="color" id="color" required="required">
        <option value="no">Выберите значение</option>
        <option value="Синий">Синий</option>
        <option value="Зелёный">Зеленый</option>
        <option value="Жёлтый">Желтый</option>
        <option value="Красный">Красный</option>
        <option value="Оранжевый">Оранжевый</option>
        <option value="Черный">Черный</option>
        <option value="ncolor">Нет моего цвета</option>
    </select>
    <br>
    <label for="nocolor" id="nocolor2" style="display: none;">Вашего цвета нет в списке?</label>
    <input type="text" id="nocolor" name="nocolor" placeholder="Введите цвет" style="display: none;">
<br>
    <p>Оформление</p>
    <br>
    <label for="of">Выбор темы:</label>
    <br>
    <select name="tem" id="of">
        <option value="no">Выберите тему</option>
        <option value="Тёмная тема">Тёмная тема</option>
        <option value="Светлая тема">Светлая тема</option>
    </select>
    <br>
    <br>
    <p>Цветовая гамма</p>
    <label for="user_color"></label>
    <input type="radio" name="user_color" id="user_color" value="color_1"><label for="user_color" style=""><svg width="30" height="20">
            <rect width="300" height="100" style="fill:#2F7A6F;stroke-width:3;" />
        </svg><svg width="30" height="20">
            <rect width="300" height="100" style="fill:#ABFBEF;stroke-width:3;" />
        </svg><svg width="30" height="20">
            <rect width="300" height="100" style="fill:#5FFAE3;stroke-width:3;" />
        </svg></label>
    <br>
    <input type="radio" name="user_color" id="user_color1" value="color_2"><label for="user_color1"><svg width="30" height="20">
            <rect width="300" height="100" style="fill:#FAB944;stroke-width:3;" />
        </svg><svg width="30" height="20">
            <rect width="300" height="100" style="fill:#C79436;stroke-width:3;" />
        </svg><svg width="30" height="20">
            <rect width="300" height="100" style="fill:#FBD58F;stroke-width:3;" />
        </svg></label>
    <br>
    <input type="radio" name="user_color" id="user_color2" value="color_3"><label for="user_color2"><svg width="30" height="20">
            <rect width="300" height="100" style="fill:#3CD2E6;stroke-width:3;" />
        </svg><svg width="30" height="20">
            <rect width="300" height="100" style="fill:#2EA3B3;stroke-width:3;" />
        </svg><svg width="30" height="20">
            <rect width="300" height="100" style="fill:#83DEEA;stroke-width:3;" />
        </svg>
        </label>
    <br>
    <input type="radio" name="user_color" id="user_color3" value="color_4"><label for="user_color3"><svg width="30" height="20">
            <rect width="300" height="100" style="fill:#00990D;stroke-width:3;" />
        </svg><svg width="30" height="20">
            <rect width="300" height="100" style="fill:#0CB31A;stroke-width:3;" />
        </svg><svg width="30" height="20">
            <rect width="300" height="100" style="fill:#10E622;stroke-width:3;" />
        </svg>
    </label>
    <br>
    <input type="radio" name="user_color" id="user_color4" value="color_5"><label for="user_color4"><svg width="30" height="20">
            <rect width="300" height="100" style="fill:#F72A23;stroke-width:3;" />
        </svg><svg width="30" height="20">
            <rect width="300" height="100" style="fill:#C4211B;stroke-width:3;" />
        </svg><svg width="30" height="20">
            <rect width="300" height="100" style="fill:#F9726D;stroke-width:3;" />
        </svg>
    </label>
    <br>
    <input type="radio" name="user_color" id="user_color5" value="color_6"><label for="user_color5"><svg width="30" height="20">
            <rect width="300" height="100" style="fill:#F7833B;stroke-width:3;" />
        </svg><svg width="30" height="20">
            <rect width="300" height="100" style="fill:#FFB78A;stroke-width:3;" />
        </svg><svg width="30" height="20">
            <rect width="300" height="100" style="fill:#C76B30;stroke-width:3;" />
        </svg>
    </label>
    <br>
    <input type="radio" name="user_color" id="user_color6" value="color_7"><label for="user_color6"><svg width="30" height="20">
            <rect width="300" height="100" style="fill:#4856F7;stroke-width:3;" />
        </svg><svg width="30" height="20">
            <rect width="300" height="100" style="fill:#969FFF;stroke-width:3;" />
        </svg><svg width="30" height="20">
            <rect width="300" height="100" style="fill:#3945C7;stroke-width:3;" />
        </svg>
    </label>
    <br>
    <button id="button">Отправить</button>
</form>
<div id="error" style="color: #ff1213">
    <?php if (isset($_SESSION['error'])){
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
    ?>
</div>
<script src="script.js"></script>
</body>
</html>
