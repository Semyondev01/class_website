<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <style>
        a {
            color: #6a88ff;
            border: none;
            cursor: pointer;
            padding: 0;
            margin-left: 30px;
        }
        button {
            background-color: white;
            border: 2px solid #1595ff;
            transition: 1s;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
        }
        button:hover {
            background-color: #1595ff;
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        }
        #hell {
            transition: 1s;
        }
        #hell:hover {
            background-color: #1595ff;
        }


        a:hover {
            color: #ff1213;
        }
        p {
            transition: 1s;
        }
        p:hover {
            color: #1595ff;
        }
        label {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            transition: 1s;
        }
        label:hover {
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
            color: #7d7674;
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
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<h1>Загрузка файлов</h1>
<p>Сдесь вы сможете загрузить файлы в облако.</p>
<form action="vendor/cloudobr.php" method="post" enctype="multipart/form-data">
  <label>Выберете файл</label>
  <input type="file" name="avatar" id="hell">
    <label>Введите имя файла</label>
    <input type="text" name="name" autocomplete="off">
    <button>Перейти</button>
</form>
    <?php
    if (isset($_SESSION['otpr'])) {
        echo $_SESSION['otpr'];
    }
    unset($_SESSION['otpr'])
    ?>
<?php
$ff = new mysqli('localhost', 'root', '', '4vclass');
$login  =  $_SESSION['user']['login'];
$system = $ff->query("SELECT * FROM `cloud` WHERE `Login` = '$login'");
if (mysqli_num_rows($system) >= 1) {


?>
<h1>Файлы</h1>
    <?php
    while ($path = mysqli_fetch_assoc($system)) {
        $per = $path['Path'];
        $name = $path['Name'];
        echo "<br>" . "<a href=$per download title='Нажмите, чтобы скачать файл'>$name</a>";
    }
}
    ?>


<h1>Удалить файлы</h1>
<form action="vendor/delete-file.php" method="post">
    <label>Введите название файла</label>
    <input type="text" name="file-delete" autocomplete="off">
    <button>Удалить</button>
</form>
<a href="vendor/logout.php">Выйти из профиля</a>
</body>
</html>