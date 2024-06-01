<?php
session_start();
$mysql = new mysqli('localhost', 'root', '', '4vclass');
$mysql->query("TRUNCATE `massiv`");
  $lo1 = $_POST['loc1'];
  $lo2 = $_POST['loc2'];
  $lo3 = $_POST['loc3'];
  $lo4 = $_POST['loc4'];
  $lo5 = $_POST['loc5'];
  $lo6 = $_POST['loc6'];
  $lo7 = $_POST['loc7'];
  $lo8 = $_POST['loc8'];
  $lo9 = $_POST['loc9'];
  $lo10 = $_POST['loc10'];
  $lo11 = $_POST['lon11'];
  $lo12 = $_POST['loc12'];
  $lo13 = $_POST['loc13'];
  $lo14 = $_POST['loc14'];
  $lo15 = $_POST['loc15'];
  $lo16 = $_POST['loc16'];
  $lo17 = $_POST['loc17'];
  $lo18 = $_POST['loc18'];
  $lo19 = $_POST['loc19'];
  $lo20 = $_POST['loc20'];
  $lo21 = $_POST['loc21'];
  $lo22 = $_POST['loc22'];
  $lo23 = $_POST['loc23'];
  $lo24 = $_POST['loc24'];
  $lo25 = $_POST['loc25'];
  $lo26 = $_POST['loc26'];
  $lo27 = $_POST['loc27'];
  $lo28 = $_POST['loc28'];
  $lo29 = $_POST['loc29'];
  $lo30 = $_POST['loc30'];
  $mysql = new mysqli('localhost', 'root', '', '4vclass');
  $mysql->query("INSERT INTO `massiv` ( `id`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`, `21`, `22`, `23`, `24`, `25`, `26`, `27`, `28`, `29`, `30`) VALUES ('neprav', '$lo1', '$lo2', '$lo3', '$lo4', '$lo5', '$lo6', '$lo7', '$lo8', '$lo9', '$lo10', '$lo11', '$lo12', '$lo13', '$lo14', '$lo15', '$lo16', '$lo17', '$lo18', '$lo19', '$lo20', '$lo21', '$lo22', '$lo23', '$lo24', '$lo25', '$lo26', '$lo27', '$lo28', '$lo29', '$lo30' )");
   $_SESSION['ender'] = 'Система создана';



?>

<?php
     $lo11 = $_POST['loc11'];
     $lo22 = $_POST['loc22'];
     $lo33 = $_POST['loc33'];
     $lo44 = $_POST['loc44'];
     $lo55 = $_POST['loc55'];
     $lo66 = $_POST['loc66'];
     $lo77 = $_POST['loc77'];
     $lo88 = $_POST['loc88'];
     $lo99 = $_POST['loc99'];
     $lo100 = $_POST['loc100'];
     $lo111 = $_POST['loc111'];
     $lo122 = $_POST['loc122'];
     $lo133 = $_POST['loc133'];
     $lo144 = $_POST['loc144'];
     $lo155 = $_POST['loc155'];
     $lo166 = $_POST['loc166'];
     $lo177 = $_POST['loc177'];
     $lo188 = $_POST['loc188'];
     $lo199 = $_POST['loc199'];
     $lo200 = $_POST['loc200'];
     $lo211 = $_POST['loc211'];
     $lo222 = $_POST['loc222'];
     $lo233 = $_POST['loc233'];
     $lo244 = $_POST['loc244'];
     $lo255 = $_POST['loc255'];
     $lo266 = $_POST['loc266'];
     $lo277 = $_POST['loc277'];
     $lo288 = $_POST['loc288'];
     $lo299 = $_POST['loc299'];
     $lo300 = $_POST['loc300'];
     $mysql = new mysqli('localhost', 'root', '', '4vclass');
     $mysql->query("INSERT INTO `massiv` (`id`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`, `21`, `22`, `23`, `24`, `25`, `26`, `27`, `28`, `29`, `30`) VALUES ( 'prav', '$lo11', '$lo22', '$lo33', '$lo44', '$lo55', '$lo66', '$lo77', '$lo88', '$lo99', '$lo100', '$lo111', '$lo122', '$lo133', '$lo144', '$lo155', '$lo166', '$lo177', '$lo188', '$lo199', '$lo200', '$lo211', '$lo222', '$lo233', '$lo244', '$lo255','$lo266','$lo277','$lo288', '$lo299', '$lo300' )");
      $_SESSION['ender'] = 'Система создана';

$_SESSION['start'] = 'start';
header('Location: ../sre.php');





    ?>
