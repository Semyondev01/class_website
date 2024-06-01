<!doctype html>
 <html>
 <head>
   <meta name="viewport" content="width=device-width, inital-scale=1">
 </head>
 <body>
   <p>Новость опубликована</p>
   <a href="../adminPanel&&&d82d869823ca9eb2bfec2f8239eb625f.php">В adminPanel</a>
 </body>
 </html>












<?php
session_start();
$novost = $_POST['novost'];
$date = $_POST['date'];
$zag = $_POST['zag'];
$rtr = $_POST['buy'];
$time = $_POST['time'];
$crat = $_POST['crat'];

$path = 'uploads/' . time() . $_FILES['avatar']['name'];

move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path);

    $path1 = 'uploads/' . time() . $_FILES['avatar1']['name'];
    move_uploaded_file($_FILES['avatar1']['tmp_name'], '../' . $path1);

    $path3 = 'uploads/' . time() . $_FILES['avatar2']['name'];
    move_uploaded_file($_FILES['avatar2']['tmp_name'], '../' . $path3);

$path2 = "novost/" . $time . ".php";
$mysql = new mysqli('localhost', 'root', '', '4vclass');
$mysql->query("INSERT INTO `novost`(`date`, `name`, `novost`, `avatar`, `system`, `crat`, `uid`, `avatar1`, `avatar2`) VALUES ('$date','$zag','$novost','$path', '$rtr', '$crat', '$path2', '$path1', '$path3')");
$file_name = $time . ".php";
$mysql = new mysqli('localhost', 'root', '', '4vclass');
file_put_contents("../" . "$path2", "
<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title></title>
    <!-- Yandex.Metrika counter -->
<script type=\"text/javascript\" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, \"script\", \"https://mc.yandex.ru/metrika/tag.js\", \"ym\");

   ym(91118282, \"init\", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src=\"https://mc.yandex.ru/watch/91118282\" style=\"position:absolute; left:-9999px;\" alt=\"\" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</head>
<body>
<center><h1>$zag</h1></center>
<li>$date</li>
<p>$novost</p>

<img src='../$path' alt=''>
<img src='../$path1' alt=''>

<img src='../$path3' alt=''>



</body>
</html>
");

 ?>
