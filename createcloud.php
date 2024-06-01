<?php
    session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
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
    <title></title>
</head>
<body>
<h1>Привет, <?=$_SESSION['user']['name']?></h1>
<?php
$path = "Cloud/" . $_SESSION['user']['login'];
if (is_dir($path)) {
   echo "Вы уже создали облако!" . "<br>";
   echo "Перейти: "  . "<a href=cloudl.php>Перейти в облако</a>";
} else {
    echo "<a href=vendor/cloudcreate.php>Создать облако</a>";

}



?>
</body>
</html>