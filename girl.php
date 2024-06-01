<!doctype html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    <style>
button {
    border-radius: 30px;
    width: 200px;
    height: 50px;
    cursor: pointer;

}
    </style>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>С 8 марта!</title>
</head>
<body>
<img id="img" src="images/konn.jpg" alt=""  style=" transition: 1s">
<h1 id="h1" style="position: absolute; top: 0; align-items: center; opacity: 0;">Дорогие девочки!</h1>
<div class="text" id="text" style="opacity: 0; font-family: 'Pacifico', cursive; position: absolute; transition: 1s; top: 50px; font-size: 40px;">Девочки! От всего мужского коллектива нашего класса мы хотим поздравить вас с Восьмым марта! Желаем вам счастья, радости и благополучия в жизни. Очень хотим, чтобы в этот день у вас всегда на душе было радостно и  пусть каждый ваш день будет счастливым!
    <br><br>
    <span style="position: absolute; right: 0; font-family: 'Noto Sans', sans-serif;">С уважением и наилучшими пожеланиями, Мужской коллектив 4В класса</span>
    <br><br><br><br>
    <a href="index.php"><button>Спасибо, мальчики</button></a>
    <a href="index.php"><button>Мне было не интересно</button></a></div>


<script>
    function Magic() {
        document.getElementById('text').style.opacity = 1;
        document.getElementById('h1').style.opacity = 1;
        document.getElementById('img').style.opacity = 0;
    }
    setTimeout(Magic, 2000);
</script>
</body>
</html>