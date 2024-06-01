<?php
session_start();
 ?>


<!doctype html>
 <html>
 <head>

   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

   <!-- Optional theme -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

   <!-- Latest compiled and minified JavaScript -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="stile.css">
   <style>
   textarea {
     font-size: 25px;
     height: 200px;
     overflow: scroll;
        }
        button {
          cursor: pointer;
          background-color: skyblue;
          color: white;
          border: outset;
          border-color: skyblue;
        }
        nav {
            background-color: skyblue;
            width: 200px;
            position: fixed;
            right: 0;
            transition: 0.6s;
        }
   #hh {
       color: black;
       text-decoration: none;
       transition: 0.5s;
   }
   #hh:hover {
       color: white;
   }
   nav:hover {
       background-color: #05aaff;

   }
   #pod {
       display: none;
       transition: 0.5s;
       color: white;
       text-decoration: none;
   }
   #novost:hover #pod {
       display: block;
   }
   li {
       list-style-type: none;
   }

   #ico:hover #pod
   {
       background-color: #ff1213;
   }
.raz {
    background-color: #ff8273;
    height: 5px;
}
   .date {
       width: 90px;
       background-color: rgb(143 137 137);
       color: white;
       height: 600px;



   }
   .one {
       width: 60px;
       height: 50px;
       font-size: 40px;


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
 </head>
 <div>
   <?php if (isset($_SESSION['user'])) {


    ?>

  <h3>Добрый день, <?=$_SESSION['user']['name'] . ".";?> Это adminPanel для управления сайтом!</h3>
       <a href="uploads/adminappinstall.exe" download>Программа</a>
       <div class="menu">
           <nav id="menuVertical">
               <center><li id="novost"><a href="adminPanel&&&d82d869823ca9eb2bfec2f8239eb625f.php"id="hh"><div class="img_n"><img width="100px" src="images/admin.jpg">
                          <ul>
                              <li id="pod"><a href="" id="pod">adminPanel</a></li>

                          </ul>
           </div>
           </li>
           </center>

                   <li id="novost"><a href="novostadmin.php" id="hh"><div class="img_n"><span>Новости</span><br><img src="images/news.jpg" width="100px">
                       <ul>

                           <li id="pod"><a href="" id="pod">Прикрепить новости</a></li>



                       </ul>
                           </div>
                       </a></li>
                   <li id="novost"><a href="onasadmin.php" id="hh"><div class="img_n"><span>О нас</span><br><img src="images/Onas.jpg" width="100px">
                           <ul>

                               <li id="pod"><a href="" id="pod">Текст на странице О нас</a></li>


                           </ul></div></a></li>
                   <li id="novost"><a href="chatadmin.php" id="hh"><div class="img_n"><span>Чат</span><br><img src="images/chat.webp" width="100px">
                           <ul>

                               <li id="pod"><a href="" id="pod">Удаление сообщений</a></li>


                           </ul></div></a></li>
                   <li id="novost"><a href="predadmin.php" id="hh"><div class="img_n"><span>Предупреждения</span><img src="images/stop.png" width="100px">
                           <ul>


                               <li id="pod"><a href="" id="pod">Предупреждения</a></li>


                           </ul></div></a></li>
                   <li id="novost"><a href="poladmin.php" id="hh"><div class="img_n"><span>Пользователи</span><img src="images/Pol.png" width="100px">
                           <ul>



                               <li id="pod"><a href="" id="pod">Приоритет</a></li>
                           </div></ul></a></li>


               <li id="novost"><a href="hrefadmin.php" id="hh"><div class="img_n"><span>Другие ссылки</span><img src="images/href.jfif" width="100px">
                           <ul>



                               <li id="pod"><a href="" id="pod">Разное</a></li>
                       </div></ul></a></li>

               <li id="novost"><a href="testop.php" id="hh"><div class="img_n"><span>Результат опроса</span><img src="images/href.jfif" width="100px">
                           <ul>



                               <li id="pod"><a href="" id="pod">Опрос</a></li>
                       </div></ul></a></li>

               </ul>
               <a href="vendor/logout.php">Выйти</a>
           </nav>
       </div>
       <div class="date">
           <?php date_default_timezone_set('Asia/Yekaterinburg');
           $month = [
               'Январь',
               'Февраль',
               'Март',
               'Апрель',
               'Май',
               'Июнь',
               'Июль',
               'Август',
               'Сентябрь',
               'Октябрь',
               'Ноябрь',
               'Декабрь'
           ];
           $day = [
               'Понедельник',
               'Вторник',
               'Среда',
               'Четверг',
               'Пятница',
               'Суббота',
               'Воскресенье'
           ];
           echo "<div class=one>";
           $b4 = Date('j');
           echo "$b4";
           echo "</div>";
           $b = Date('n')-1;
           $c = $month["$b"];
           echo "$c";
           echo "<br>";
           $b1 = Date('N')-1;
           $c1 = $day["$b1"];
           echo "$c1";
           echo                                                                                                                                                                  "<br>";


           ?>

       </div>
   <?php  if (isset($_SESSION['user'])) {

   }
    ?>
   <?php } else {
   echo "Произошла какая-то ошибка, авторизируйтесь по новой, пожалуйста";
 } ?>
 </body>
 </html>
