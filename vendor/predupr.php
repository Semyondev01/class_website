<!doctype html>
<html>
<head>
  <meta name="viewport" content="width=device-width, inital-scale=1">
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
  <a href="../adminPanel&&&d82d869823ca9eb2bfec2f8239eb625f.php">Переадресация</a>
</body>
</html>
<?php
$predupr = $_POST['predupr'];
$mysql = new mysqli('localhost', 'root', '', '4vclass');
$mysql->query("TRUNCATE TABLE `predupr`");
$mysql->query("INSERT INTO `predupr` (`predupr`) VALUES ('$predupr')");
echo "Действие выполнено!";

 ?>
