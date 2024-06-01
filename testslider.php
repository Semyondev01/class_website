<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="wrapper">
<div class="slider">
    <div class="slider_item">
        <img src="images/myschool.jpg" alt="">
    </div>
    <div class="slider_item">
        <img src="images/profile.png" alt="">
    </div>
    <div class="slider_item">
        <img src="images/profile.png" alt="">
    </div>
    <div class="slider_item">
        <img src="images/profile.png" alt="">
    </div>
    <div class="slider_item">
        <img src="images/profile.png" alt="">
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="/js/slick.min.js"></script>
    <script>$(document).ready(function(){
            $('.slider').slick();
        });
    </script>
</div>
</body>
</html>