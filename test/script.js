document.getElementById('color').addEventListener('input', function() {
   var hel  =  document.getElementById('color').value;
    if (hel == 'ncolor') {
        document.getElementById('nocolor').style.display = "block";
        document.getElementById('nocolor2').style.display = "block";
    }
    if (hel != 'ncolor') {
        document.getElementById('nocolor').style.display = "none";
        document.getElementById('nocolor2').style.display = "none";
    }
    if (hel == 'no') {
        document.getElementById('error').innerHTML = 'Вы не выбрали цвет!';
    }
    });
document.getElementById('of').addEventListener('input', function() {
    var hel1 = document.getElementById('of').value;
    if (hel1 == 'no') {
        document.getElementById('error').innerHTML = 'Вы не выбрали тему!';
    }
});
// document.getElementById('button').addEventListener('click', function () {
//     var hel2 = document.getElementById('color').value;
//     if (hel2 == 'no') {
//         document.getElementById('error').innerHTML = 'Вы не заполнили какие-то поля!';
//     }
// });