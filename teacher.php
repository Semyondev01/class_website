<!doctype html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>С 8 марта!</title>
</head>
<body>
<div class="img" style="display: flex; flex-direction: column; width: 500px; position: absolute; left: 35%; top: 30%;">
<img id="img1" src="images/Конверт.jpeg" alt=""  style=" transition: 1s">
</div>
<div class="text" id="text" style=" font-family: 'Pacifico', cursive; position: absolute; transition: 1s;  font-size: 40px; top: -300px;opacity: 0;">  От души  поздравляю вас с 8 марта! Желаю вам счастья, радости и благополучия! Очень хочу, чтобы вы оставались такой же красивой, и чтобы каждый ваш день был радостьный и счастливый!<br><br>


<span id="span" style="position: absolute; right: 0;  font-family: 'Noto Sans', sans-serif; font-size: 40px; opacity: 0;">С уважением и наилучшими пожеланиями, Семён Ковалёв</span>
    <br>
    <br>
    <br>
    <br>
    <img id="scr" src="images/cvv.png" alt="" width="300px" height="300px" style="opacity: 0; transform: rotate(22deg); transition: 1s; ">
</div>
<script>
    function Magic() {
   document.getElementById('img1').style.opacity = 0;
   document.getElementById('span').style.opacity = 1;
   document.getElementById('scr').style.opacity = 1;
   document.getElementById('text').style.opacity = 1;
   document.getElementById('text').style.transform = "translateY(300px)";

    }
    setTimeout(Magic, 2000);
</script>
</body>
</html>