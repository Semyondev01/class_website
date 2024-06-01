<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Новости</title>
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
<body>
<div class="menu">
    <nav id="menuVertical">
        <center><li id="novost"><a href="adminPanel&&&d82d869823ca9eb2bfec2f8239eb625f.php"id="hh"><div class="img_n"><img src="images/admin.png" width="100px">
                        <ul>
                            <li id="pod"><a href="" id="pod">adminPanel</a></li>

                        </ul>
                    </div>
            </li>
        </center>

        <li id="novost"><a href="novostadmin.php" id="hh"><div class="img_n"><span>Новости</span><br><img src="images/news.png" width="100px">
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


        </ul>
        <a href="vendor/logout.php">Выйти</a>
    </nav>
</div>
<div class="novost1" id="novost1">
    <form action="vendor/novostobr.php" enctype="multipart/form-data" method="post">
        <label>Дата новости</label>
        <input type="date" name="date">
        <label>Краткое содержание</label>
        <textarea type="text" name="crat" placeholder="Краткое содержание" style="width: 100px; height: 100px;"></textarea>
        <label>Заголовок</label>
        <input type="text" name="zag">
        <label>Новость</label>
        <textarea  name="novost" placeholder="Введите новость"></textarea>
        <label>Фото</label>
        <input type="file" name="avatar">
        <input type="file" name="avatar1">
        <input type="file" name="avatar2">
        <input type="radio" name="buy" id="start22" value="" checked><label for="start22">Просто новость</label>
        <br>
        <input type="radio" name="buy" value="doc" id="start55"><label for="start55">Прикрепить документацию</label>
        <input type="text" name="time" value="<?= time()?>" hidden>
        <button>Отправить</button>
    </form><br>
    <form action="vendor/nnnsst.php" method="post">
        <label>Удалить новость</label>
        <input type="text" name="hdelete" placeholder="Введите заголовок">
        <button name="button11">Удалить</button>
    </form><br>
    <form action="vendor/novost_delete.php" method="post">
        <button>Удалить все новости</button>
    </form><br>
</div>
</body>
</html>