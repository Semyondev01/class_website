<?php
session_start();
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Здравствуйте, <?=$_SESSION['user']['name'];?></h1>
<h1>Чат с одноклассниками</h1>
</body>
<form action="vendor/chat_teacher.php" method="post">
    <label>Сообщение</label>
    <textarea type="text" name="mess" placeholder="Введите сообщение"></textarea>
    <label>Отправка лично</label>
    <input type="text" name="odnoclass" placeholder="Введите имя одноклассника">
    <button id="mess">Отправить</button>
</form>
<form action="vendor/sticker_teach.php" method="post">
    <label>Отправка   лично</label>
    <input type="text" name="odnoclass" placeholder="Введите имя одноклассника">
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
</html>
