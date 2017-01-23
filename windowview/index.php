<?php 

// meta tags
$title = "windowview"; ///---
$description = "DESCRIPTION";
$manifest = "windowview.day.manifest";

require_once('../header.php');
?> 

<body>
<div class="wrapper">
<!-- preloader  -->
<script>
  preloader(true, 'white', 'red');  
</script><!--END preloader  -->
 
  <div id = "pjax-global" style = "opacity: 0;">  
    <div id="bgmask" style = "cursor: move; position: absolute; width: 100%; top: 5%; height: 85%;  margin: 0; z-index: 1; padding: 0;"></div>

    <img id="bgimg" class="img-bg bgimg-default" style = "" />
    <img id="bgimg-back" class="img-bg bgimg-default" style = "opacity: 1;" /> 
    


    <div id="bgvid-wrapper" style ="position: absolute;">
      <video id="bgvid" preload="auto">
        <source type="video/webm">
        <source type="video/mp4">
      </video>
    </div>

    <header>
      <a href="/omega/">
        <img src="/omega/images/icons/logo.png" alt="logo" class="secondary-logo" style = "opacity: 0;">
      </a>  
      <button class="main-menu-btn secondary-p" style = "opacity: 0;">Меню</button>
      
        <!-- START CONTENT   -->   

        <span  class="close-home"><a href='/omega/location/'>&times;</a></span>

        <div class="toggle-controls">
          <button id ="top" class="toggle-controls-top"></button>
          <div class="floor-number">
            Этаж
            <span id="floor">0</span>
          </div>
          <button id="bottom" class="toggle-controls-bottom"></button>
        </div>

        <div class="icon-phone secondary-p">
            <div class="icon-phone-animation"></div>
        </div>

        <!-- END CONTENT   -->

      <button class="sound-btn secondary-p hvr-grow hide-main-icon-left" style="opacity: 0"></button>
    </header>


      <svg class="mouse-move" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="30px" height="100%" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
        viewBox="0 0 2627 5993"
         xmlns:xlink="http://www.w3.org/1999/xlink">
         <defs>
          <style type="text/css">
           <![CDATA[
            .str0 {stroke:#fff;stroke-width:4.52304}
            .fil0 {fill:#fff}
            .fil2 {fill:#fff}
            .fil1 {fill:#fff}


        @keyframes arrow-top {
            0%   {transform: translateY(0px)}
            50%  {transform: translateY(600px)}
            100% {transform: translateY(0px);}
        }

        @keyframes arrow-bottom {
            0%   {transform: translateY(0px)}
            50%  {transform: translateY(-600px)}
            100% {transform: translateY(0px);}
        }


        #arrow-top-move{
          animation: arrow-top 1.5s infinite;
        }


        #arrow-bottom-move{
          animation: arrow-bottom 1.5s infinite;
        }

           ]]>
          </style>
         </defs>
         <g id="Слой_x0020_1">
          <path class="fil0 str0" d="M188 1995l355 -285 605 -120 -8 509 -188 182 -26 274c10,84 0,136 42,227 21,34 36,55 68,76 70,55 112,78 106,76l3 500 -1069 -13 -19 -691 24 -342 107 -393 0 0z"/>
         <path class="fil1" d="M2066 1890c-201,-237 -509,-357 -916,-357 -404,0 -712,120 -915,357 -204,238 -235,517 -235,663l0 1685c0,146 31,425 235,665 201,237 508,357 915,357 405,0 712,-120 916,-357 203,-238 234,-519 234,-663l0 -1685c0,-146 -31,-425 -234,-665zm-916 942c-83,0 -151,-68 -151,-154l0 -326c0,-84 68,-151 151,-151 84,0 154,67 154,151l-2 326c0,86 -68,154 -152,154l0 0zm1028 1408c0,149 -50,900 -1028,900 -980,0 -1030,-751 -1030,-902l0 -1685c0,-146 50,-869 970,-900l0 433c-120,29 -211,135 -211,266l0 326c0,130 89,240 211,266l0 485 0 11c0,2 0,5 0,5 8,73 120,70 120,-5l0 -496c123,-26 214,-136 214,-266l0 -326c0,-128 -91,-237 -214,-266l0 -433c924,31 971,754 971,902l-3 1685 0 0z"/>
         <path id="arrow-top-move" class="fil1" d="M1124 10l-540 537c-13,13 -13,34 0,47 13,13 34,13 45,0l516 -516 516 516c14,13 34,13 47,0 6,-8 8,-16 8,-23 0,-8 -2,-16 -8,-24l-539 -537c-14,-13 -34,-13 -45,0l0 0z"/>
         <path id="arrow-bottom-move" class="fil1" d="M1119 6781l-540 -540c-13,-13 -13,-34 0,-45 13,-13 34,-13 44,0l517 514 516 -514c13,-13 34,-13 47,0 5,6 8,14 8,21 0,8 -3,19 -8,24l-540 540c-13,13 -34,13 -44,0l0 0z"/>
         <rect class="fil2" x="1094" y="3396" width="1203" height="108" rx="601" ry="16"/>
         <rect class="fil2" x="5" y="3396" width="1203" height="108" rx="601" ry="16"/>
         </g>
        </svg>
 <!--  dermo END -->


    

      <!-- overlay -->
  <div class="overlay"></div>

    <!-- START footer video-popup   -->
      <div id="video-popup" style="display: none;">
        <video id="video-content" width="100%" loop="loop" >
            <source src="/omega/media/tour/vo.webm" type="video/webm"></source>
            <source src="/omega/media/tour/vo.mp4" type="video/mp4"></source>
        </video>
        <span class="close-video-popup">&times;</span>
      </div>
<!-- END footer video-popup   --> 

   <!-- main menu -->
   <!-- main menu -->
  <div class="main-menu">

    <? include '../include/menu.php'; ?>

  </div>

  <div class="main-icon daynight secondary-p">
    <a href = '/omega/windowview/night/'><img id="" class="snt-link" src ="/omega/images/icons/night.png" style="position: absolute;" /></a>
  </div>


<script>

  //   pathes
var user = detect.parse(navigator.userAgent);
if (user.browser.family === 'Safari' || user.browser.family === 'IE') {
  
  // video night mp4
  funcPathVidNightMp4();

  // video day mp4
  funcPathVidDayMp4();

} else {

  // video night webm
  funcPathVidNightWebm();

  // video day webm
  funcPathVidDayWebm ();
}

  //текущее время
  var date = new Date();
  var daytime = date.getHours();

  // функция замены ссылок + анимация ДЕНЬ и НОЧЬ
  var funcAnimation = function (pathVid, pathImgDay, pathImgNight, opacityBgimg, opacityBgimgBack, opacityDelay, displayStyleNight, displayStyleDay) {
    $('#bgvid').attr('src', pathVid);
    $('#bgimg').attr('src', pathImgDay);
    $('#bgimg-back').attr('src', pathImgNight);
    $('#bgimg').animate({ opacity: opacityBgimg }, opacityDelay);
    $('#bgimg_back').animate({ opacity: opacityBgimgBack }, opacityDelay);
    $('#bgvid-link-night').attr('src', pathIconNight);
    $('#bgvid-link-day').attr('src', pathIconDay);
    $('#bgvid-link-night').css('display', displayStyleNight);
    $('#bgvid-link-day').css('display', displayStyleDay);
  };

  if (document.cookie == false) {
    // условия зависимости контента от времени суток
     if (daytime >= 8 && daytime <= 17) { // day
      console.log ("день");
      document.cookie = "daynight=";
      document.cookie = "daynight=day; expires=3600";

      // вызываем функцию замены ссылок и анимации для дня
      funcAnimation ( pathVidDay05, pathImgDay05, pathImgNight05, 1, 0, 0, 'block', 'none' ); 

      // записываем глобальные переменные для дня
      funcSessionStorageDay ();

     } else { //night
      console.log ("ночь");
      document.cookie = "daynight=";
      document.cookie = "daynight=night; expires=3600";

      // вызываем функцию замены ссылок и анимации для ночи
      funcAnimation ( pathVidNight05, pathImgDay05, pathImgNight05, 0, 1, 0, 'none', 'block' );

      // записываем глобальные переменные для ночи
      funcSessionStorageNight ();
     } 
  } else {
    // получить текущие куки и распарсить 

      var getCookie = document.cookie.split('; ');
      var daynightCookie = getCookie[0].split('=');

      if (daynightCookie[1] == "day") {

        // вызываем функцию замены ссылок и анимации для дня
        funcAnimation ( pathVidDay05, pathImgDay05, pathImgNight05, 1, 0, 0, 'block', 'none' ); 

        // записываем глобальные переменные для дня
        funcSessionStorageDay ();

      } else {

        // вызываем функцию замены ссылок и анимации для дня
        funcAnimation ( pathVidNight05, pathImgDay05, pathImgNight05, 0, 1, 0, 'none', 'block' );

        // записываем глобальные переменные для ночи
        funcSessionStorageNight ();
      }
     
  }

$('#bgvid-link-day').click(function(){

  // записываем глобальные переменные для дня
  funcSessionStorageDay ();

  document.cookie = "daynight=";
  document.cookie = "daynight=day; expires=3600";

  // вызываем функцию замены ссылок и анимации для дня
  funcAnimation ( pathVidDay05, pathImgDay05, pathImgNight05, 1, 0, 1000, 'block', 'none' );

});


$('#bgvid-link-night').click(function(){

  // записываем глобальные переменные для ночи
  funcSessionStorageNight ();

  document.cookie = "daynight=";
  document.cookie = "daynight=night; expires=3600"

  // вызываем функцию замены ссылок и анимации для дня
  funcAnimation ( pathVidNight05, pathImgDay05, pathImgNight05, 0, 1, 1000, 'none', 'block' );

});

// забираем переменные из sessionStorage
  var linkBgvid01 = sessionStorage.getItem('linkBgvid01');
  var linkBgimg01 = sessionStorage.getItem('linkBgimg01');
  var linkBgvid02 = sessionStorage.getItem('linkBgvid02');
  var linkBgimg02 = sessionStorage.getItem('linkBgimg02');
  var linkBgvid03 = sessionStorage.getItem('linkBgvid03');
  var linkBgimg03 = sessionStorage.getItem('linkBgimg03');
  var linkBgvid04 = sessionStorage.getItem('linkBgvid04');
  var linkBgimg04 = sessionStorage.getItem('linkBgimg04');
  var linkBgvid05 = sessionStorage.getItem('linkBgvid05');
  var linkBgimg05 = sessionStorage.getItem('linkBgimg05');
  var linkBgvid06 = sessionStorage.getItem('linkBgvid06');
  var linkBgimg06 = sessionStorage.getItem('linkBgimg06');
  var linkBgvid07 = sessionStorage.getItem('linkBgvid07');
  var linkBgimg07 = sessionStorage.getItem('linkBgimg07');
  var linkBgvid08 = sessionStorage.getItem('linkBgvid08');
  var linkBgimg08 = sessionStorage.getItem('linkBgimg08');
  var linkBgvid09 = sessionStorage.getItem('linkBgvid09');
  var linkBgimg09 = sessionStorage.getItem('linkBgimg09');
  var linkBgvid10 = sessionStorage.getItem('linkBgvid10');
  var linkBgimg10 = sessionStorage.getItem('linkBgimg10');
  var linkBgvid11 = sessionStorage.getItem('linkBgvid11');
  var linkBgimg11 = sessionStorage.getItem('linkBgimg11');
</script>




<!-- Чтобы при переходе на следующую страницу не появлялся контент из предыдущей, необходимо в функцию funcIconAnimationOut, funcIconAnimationIn добавить эффекты появления и исчезания данного контента -->
<script>
  $('.snt-next, .snt-start, .snt-prev').on("click", funcIconAnimationOut );
  $('.main-menu-btn').on("click", funcAnimMenuIn );
  $('.close-main-menu, .overlay').on("click", funcAnimMenuOut );
</script>
<!-- Animation icons when the page have been loaded -->
<script>
    setTimeout ( funcIconAnimationIn, 700 );
</script>




 <script>
    var urls = '00.jpg, 01.jpg, 02.jpg, 03.jpg, 04.jpg, 05.jpg, 06.jpg, 07.jpg, 08.jpg, 09.jpg, 10.jpg, 11.jpg, 12.jpg, 13.jpg, 14.jpg, 15.jpg, 16.jpg, 17.jpg, 18.jpg, 19.jpg, 20.jpg, 21.jpg, 22.jpg, 23.jpg, 24.jpg, 25.jpg, 26.jpg, 27.jpg, 28.jpg, 29.jpg';
    
    var arr = urls.split(', ');

    /*var arrayImg = sessionStorage.getItem('arrayImg');
    var numFloor = sessionStorage.getItem('numFloor');
    var numIndex = sessionStorage.getItem('numIndex');*/

    var arrayImg = '00.jpg';
    var numFloor = 1;
    var numIndex = 0;

  // check
  if (sessionStorage.getItem('arrayImg') === 'null' || !sessionStorage.getItem('arrayImg')) {
    sessionStorage.setItem('arrayImg', '00.jpg');
    arrayImg = sessionStorage.getItem('arrayImg');
    }
  if (sessionStorage.getItem('numFloor') === 'null' || !sessionStorage.getItem('numFloor')) {
    sessionStorage.setItem('numFloor', 1);
    numFloor = +sessionStorage.getItem('numFloor');
    }
  if (sessionStorage.getItem('numIndex') === 'null' || !sessionStorage.getItem('numIndex')) {
    sessionStorage.setItem('numIndex', 0);
    numIndex = +sessionStorage.getItem('numIndex');
    }
    
    //$('.bgimg-default').attr('src', arrayImg);
    floor.innerHTML = numFloor;

        var screenHeight = screen.height;
        var stepFloor = screen.height / arr.length * 0.9;
        var a = Math.round(0 + stepFloor);
        var b = Math.round(a + stepFloor);
        var c = Math.round(b + stepFloor);
        var d = Math.round(c + stepFloor);
        var e = Math.round(d + stepFloor);
        var f = Math.round(e + stepFloor);
        var g = Math.round(f + stepFloor);
        var h = Math.round(g + stepFloor);
        var i = Math.round(h + stepFloor);
        var j = Math.round(i + stepFloor);
        var k = Math.round(j + stepFloor);
        var l = Math.round(k + stepFloor);
        var m = Math.round(l + stepFloor);
        var n = Math.round(m + stepFloor);
        var o = Math.round(n + stepFloor);
        var p = Math.round(o + stepFloor);
        var q = Math.round(p + stepFloor);
        var r = Math.round(q + stepFloor);
        var s = Math.round(r + stepFloor);
        var t = Math.round(s + stepFloor);
        var v = Math.round(t + stepFloor);
        var w = Math.round(v + stepFloor);
        var x = Math.round(w + stepFloor);
        var y = Math.round(x + stepFloor);
        var z = Math.round(y + stepFloor);
        var za = Math.round(z + stepFloor);
        var zb = Math.round(za + stepFloor);
        var zc = Math.round(zb + stepFloor);
        var zd = Math.round(zc + stepFloor);
        var ze = Math.round(zd + stepFloor);
  
    
    // mouse
function position () {
    document.onmousemove = handleMouseMove;
    function handleMouseMove(event) {

        var dot, eventDoc, doc, body, pageX, pageY;

        event = event || window.event; // IE-ism

        // If pageX/Y aren't available and clientX/Y are,
        // calculate pageX/Y - logic taken from jQuery.
        // (This is to support old IE)
        if (event.pageX == null && event.clientX != null) {
            eventDoc = (event.target && event.target.ownerDocument) || document;
            doc = eventDoc.documentElement;
            body = eventDoc.body;
            event.pageY = event.clientY +
              (doc && doc.scrollTop  || body && body.scrollTop  || 0) -
              (doc && doc.clientTop  || body && body.clientTop  || 0 );
        }

        

        // Use event.pageX / event.pageY here
         
        var time = 1000;
        if (event.pageY == 0 || event.pageY == a || event.pageY < a && event.pageY > 0 || event.pageY < 0) {
          
          setTimeout(function(){
            arrayImg = arr[0];
            numIndex = 0;
            numFloor = floor.innerHTML = '1';
            $('.bgimg-default').attr('src', arrayImg)
          }, 5);

        } else if (event.pageY == b || event.pageY < b && event.pageY > a ) { 
          
          setTimeout(function(){
            arrayImg = arr[1];
            numIndex = 1;
            numFloor = floor.innerHTML = '1';
            $('.bgimg-default').attr('src', arrayImg)
          }, 10);

        } else if (event.pageY == c || event.pageY < c && event.pageY > b ) { 
         
          setTimeout(function(){
            arrayImg = arr[2];
            numIndex = 2;
            numFloor = floor.innerHTML = '1';
            $('.bgimg-default').attr('src', arrayImg)
          }, 15);

        } else if (event.pageY == d || event.pageY < d && event.pageY > c ) { 
          
          setTimeout(function(){
            arrayImg = arr[3];
            numIndex = 3;
            numFloor = floor.innerHTML = '2';
            $('.bgimg-default').attr('src', arrayImg)
          }, 20);

    } else if (event.pageY == e || event.pageY < e && event.pageY > d ) { 
          
          setTimeout(function(){
            arrayImg = arr[4];
            numIndex = 4;
            numFloor = floor.innerHTML = '2';
            $('.bgimg-default').attr('src', arrayImg)
          }, 25);

        } else if (event.pageY == f || event.pageY < f && event.pageY > e) { 
          
          setTimeout(function(){
            arrayImg = arr[5];
            numIndex = 5;
            numFloor = floor.innerHTML = '2';
            $('.bgimg-default').attr('src', arrayImg)
          }, 30);

        } else if (event.pageY == g || event.pageY < g && event.pageY > f) { 
          
          setTimeout(function(){
            arrayImg = arr[6];
            numIndex = 6;
            numFloor = floor.innerHTML = '3';
            $('.bgimg-default').attr('src', arrayImg)
          }, 35);

        } else if (event.pageY == h || event.pageY < h && event.pageY > g) { 
          
          setTimeout(function(){
            arrayImg = arr[7];
            numIndex = 7;
            numFloor = floor.innerHTML = '3';
            $('.bgimg-default').attr('src', arrayImg)
          }, 40);

        } else if (event.pageY == i || event.pageY < i && event.pageY > h) { 
          
          setTimeout(function(){
            arrayImg = arr[8];
            numIndex = 8;
            numFloor = floor.innerHTML = '3';
            $('.bgimg-default').attr('src', arrayImg)
          }, 45);

        } else if (event.pageY == j || event.pageY < j && event.pageY > i) { 
         
          setTimeout(function(){
            arrayImg = arr[9];
            numIndex = 9;
            numFloor = floor.innerHTML = '4';
            $('.bgimg-default').attr('src', arrayImg)
          }, 50);

        } else if (event.pageY == k || event.pageY < k && event.pageY > j) { 
          
          setTimeout(function(){
            arrayImg = arr[10];
            numIndex = 10;
            numFloor = floor.innerHTML = '4';
            $('.bgimg-default').attr('src', arrayImg)
          }, 55);

        } else if (event.pageY == l || event.pageY < l && event.pageY > k) { 
          
          setTimeout(function(){
            arrayImg = arr[11];
            numIndex = 11;
            numFloor = floor.innerHTML = '4';
            $('.bgimg-default').attr('src', arrayImg)
          }, 60);

        } else if (event.pageY == j || event.pageY < j && event.pageY > l) { 
          
          setTimeout(function(){
            arrayImg = arr[12];
            numIndex = 12;
            numFloor = floor.innerHTML = '5';
            $('.bgimg-default').attr('src', arrayImg)
          }, 65);

        } else if (event.pageY == n || event.pageY < n && event.pageY > m) { 
          
          setTimeout(function(){
            arrayImg = arr[13];
            numIndex = 13;
            numFloor = floor.innerHTML = '5';
            $('.bgimg-default').attr('src', arrayImg)
          }, 70);

        } else if (event.pageY == o || event.pageY < o && event.pageY > n) { 
          
          setTimeout(function(){
            arrayImg = arr[14];
            numIndex = 14;
            numFloor = floor.innerHTML = '5';
            $('.bgimg-default').attr('src', arrayImg)
          }, 75);   

        } else if (event.pageY == p || event.pageY < p && event.pageY > o) { 
          
          setTimeout(function(){
            arrayImg = arr[15];
            numIndex = 15;
            numFloor = floor.innerHTML = '6';
            $('.bgimg-default').attr('src', arrayImg)
          }, 80);

        } else if (event.pageY == q || event.pageY < q && event.pageY > p) { 
          
          setTimeout(function(){
            arrayImg = arr[16];
            numIndex = 16;
            numFloor = floor.innerHTML = '6';
            $('.bgimg-default').attr('src', arrayImg)
          }, 85);

        } else if (event.pageY == r || event.pageY < r && event.pageY > q) { 
          
          setTimeout(function(){
            arrayImg = arr[17];
            numIndex = 17;
            numFloor = floor.innerHTML = '6';
            $('.bgimg-default').attr('src', arrayImg)
          }, 90);

        } else if (event.pageY == s || event.pageY < s && event.pageY > r) { 
          
          setTimeout(function(){
            arrayImg = arr[18];
            numIndex = 18;
            numFloor = floor.innerHTML = '7';
            $('.bgimg-default').attr('src', arrayImg)
          }, 95);

        } else if (event.pageY == t || event.pageY < t && event.pageY > s) { 
          
          setTimeout(function(){
            arrayImg = arr[19];
            numIndex = 19;
            numFloor = floor.innerHTML = '7';
            $('.bgimg-default').attr('src', arrayImg)
          }, 100);
    
        } else if (event.pageY == v || event.pageY < v && event.pageY > t) { 
          
          setTimeout(function(){
            arrayImg = arr[20];
            numIndex = 20;
            numFloor = floor.innerHTML = '7';
            $('.bgimg-default').attr('src', arrayImg)
          }, 105);
    
        } else if (event.pageY == w || event.pageY < w && event.pageY > v) { 
          
          setTimeout(function(){
            arrayImg = arr[21];
            numIndex = 21;
            numFloor = floor.innerHTML = '8';
            $('.bgimg-default').attr('src', arrayImg)
          }, 110);
    
        } else if (event.pageY == x || event.pageY < x && event.pageY > w) { 
          
          setTimeout(function(){
            arrayImg = arr[22];
            numIndex = 22;
            numFloor = floor.innerHTML = '8';
            $('.bgimg-default').attr('src', arrayImg)
          }, 115);
    
        } else if (event.pageY == y || event.pageY < y && event.pageY > x) { 
          
          setTimeout(function(){
            arrayImg = arr[23];
            numIndex = 23;
            numFloor = floor.innerHTML = '8';
            $('.bgimg-default').attr('src', arrayImg)
          }, 120);
     
        } else if (event.pageY == z || event.pageY < z && event.pageY > y) { 
          
          setTimeout(function(){
            arrayImg = arr[24];
            numIndex = 24;
            numFloor = floor.innerHTML = '9';
            $('.bgimg-default').attr('src', arrayImg)
          }, 125);
      
        } else if (event.pageY == za || event.pageY < za && event.pageY > z) { 
          
          setTimeout(function(){
            arrayImg = arr[25];
            numIndex = 25;
            numFloor = floor.innerHTML = '9';
            $('.bgimg-default').attr('src', arrayImg)
          }, 130);
      
        } else if (event.pageY == zb || event.pageY < zb && event.pageY > za) { 
          
          setTimeout(function(){
            arrayImg = arr[26];
            numIndex = 26;
            numFloor = floor.innerHTML = '9';
            $('.bgimg-default').attr('src', arrayImg)
          }, 135);
      
        } else if (event.pageY == zc || event.pageY < zc && event.pageY > zb) { 
          
          setTimeout(function(){
            arrayImg = arr[27];
            numIndex = 27;
            numFloor = floor.innerHTML = '10';
            $('.bgimg-default').attr('src', arrayImg)
          }, 140);
      
        } else if (event.pageY == zd || event.pageY < zd && event.pageY > zc) { 
          
          setTimeout(function(){
            arrayImg = arr[28];
            numIndex = 28;
            numFloor = floor.innerHTML = '10';
            $('.bgimg-default').attr('src', arrayImg)
          }, 145);
           
        } else if (event.pageY == ze || event.pageY < ze && event.pageY > zd || event.pageY > screenHeight) { 
          
          setTimeout(function(){
            arrayImg = arr[29];
            numIndex = 29;
            numFloor = floor.innerHTML = '10';
            $('.bgimg-default').attr('src', arrayImg)
          }, 150);
           
        } 
    
  sessionStorage.clear();
  sessionStorage.setItem('numFloor', numFloor);     
  sessionStorage.setItem('numIndex', numIndex);
  sessionStorage.setItem('arrayImg', arrayImg);


    }

$('.mouse-move').hide();
    
};




//buttons

$('#top').on('click', function(){

numFloor = +sessionStorage.getItem('numFloor');     
numIndex = +sessionStorage.getItem('numIndex');
arrayImg = sessionStorage.getItem('arrayImg');
console.log(numIndex, numFloor, arrayImg);

if (numIndex == 0) { 
 setTimeout(function(){$('.bgimg-default').attr('src', arr[0])}, 15);
 setTimeout(function(){$('.bgimg-default').attr('src', arr[1])}, 25);
 setTimeout(function(){$('.bgimg-default').attr('src', arr[2])}, 35);
 setTimeout(function(){$('.bgimg-default').attr('src', arr[3])}, 45);
 floor.innerHTML = 2;
 sessionStorage.setItem('numFloor', 2);     
 sessionStorage.setItem('numIndex', 3);
 sessionStorage.setItem('arrayImg', arr[3]);
} else if (numIndex == 1) {
         setTimeout(function(){$('.bgimg-default').attr('src', arr[1])}, 15);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[2])}, 25);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[3])}, 35);
         floor.innerHTML = 2;
         sessionStorage.setItem('numFloor', 2);     
         sessionStorage.setItem('numIndex', 3);
         sessionStorage.setItem('arrayImg', arr[3]);
} else if (numIndex == 2) {
         setTimeout(function(){$('.bgimg-default').attr('src', arr[2])}, 15);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[3])}, 25);
         floor.innerHTML = 2;
         sessionStorage.setItem('numFloor', 2);     
         sessionStorage.setItem('numIndex', 3);
         sessionStorage.setItem('arrayImg', arr[3]);
} else if (numIndex == 3) {
 setTimeout(function(){$('.bgimg-default').attr('src', arr[3])}, 15);
 setTimeout(function(){$('.bgimg-default').attr('src', arr[4])}, 25);
 setTimeout(function(){$('.bgimg-default').attr('src', arr[5])}, 35);
 setTimeout(function(){$('.bgimg-default').attr('src', arr[6])}, 45);
 floor.innerHTML = 3;
 sessionStorage.setItem('numFloor', 3);     
 sessionStorage.setItem('numIndex', 6);
 sessionStorage.setItem('arrayImg', arr[6]);
} else if (numIndex == 4) {
         setTimeout(function(){$('.bgimg-default').attr('src', arr[4])}, 15);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[5])}, 25);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[6])}, 35);
         floor.innerHTML = 3;
         sessionStorage.setItem('numFloor', 3);     
         sessionStorage.setItem('numIndex', 6);
         sessionStorage.setItem('arrayImg', arr[6]);
} else if (numIndex == 5) {
         setTimeout(function(){$('.bgimg-default').attr('src', arr[5])}, 15);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[6])}, 25);
         floor.innerHTML = 3;
         sessionStorage.setItem('numFloor', 3);     
         sessionStorage.setItem('numIndex', 6);
         sessionStorage.setItem('arrayImg', arr[6]);
} else if (numIndex == 6) {
 setTimeout(function(){$('.bgimg-default').attr('src', arr[6])}, 15);
 setTimeout(function(){$('.bgimg-default').attr('src', arr[7])}, 25);
 setTimeout(function(){$('.bgimg-default').attr('src', arr[8])}, 35);
 setTimeout(function(){$('.bgimg-default').attr('src', arr[9])}, 45);
 floor.innerHTML = 4;
 sessionStorage.setItem('numFloor', 4);     
 sessionStorage.setItem('numIndex', 9);
 sessionStorage.setItem('arrayImg', arr[9]);
} else if (numIndex == 7) {
         setTimeout(function(){$('.bgimg-default').attr('src', arr[7])}, 15);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[8])}, 25);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[9])}, 35);
         floor.innerHTML = 4;
         sessionStorage.setItem('numFloor', 4);     
         sessionStorage.setItem('numIndex', 9);
         sessionStorage.setItem('arrayImg', arr[9]);
}  else if (numIndex == 8) {
         setTimeout(function(){$('.bgimg-default').attr('src', arr[8])}, 15);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[9])}, 25);
         floor.innerHTML = 4;
         sessionStorage.setItem('numFloor', 4);     
         sessionStorage.setItem('numIndex', 9);
         sessionStorage.setItem('arrayImg', arr[9]);
} else if (numIndex == 9) {
 setTimeout(function(){$('.bgimg-default').attr('src', arr[9])}, 15);
 setTimeout(function(){$('.bgimg-default').attr('src', arr[10])}, 25);
 setTimeout(function(){$('.bgimg-default').attr('src', arr[11])}, 35);
 setTimeout(function(){$('.bgimg-default').attr('src', arr[12])}, 45);
 floor.innerHTML = 5;
 sessionStorage.setItem('numFloor', 5);     
 sessionStorage.setItem('numIndex', 12);
 sessionStorage.setItem('arrayImg', arr[12]);
} else if (numIndex == 10) {
         setTimeout(function(){$('.bgimg-default').attr('src', arr[10])}, 15);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[11])}, 25);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[12])}, 35);
         floor.innerHTML = 5;
         sessionStorage.setItem('numFloor', 5);     
         sessionStorage.setItem('numIndex', 12);
         sessionStorage.setItem('arrayImg', arr[12]);
}  else if (numIndex == 11) {
         setTimeout(function(){$('.bgimg-default').attr('src', arr[11])}, 15);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[12])}, 25);
         floor.innerHTML = 5;
         sessionStorage.setItem('numFloor', 5);     
         sessionStorage.setItem('numIndex', 12);
         sessionStorage.setItem('arrayImg', arr[12]);
} else if (numIndex == 12) {
 setTimeout(function(){$('.bgimg-default').attr('src', arr[12])}, 15);
 setTimeout(function(){$('.bgimg-default').attr('src', arr[13])}, 25);
 setTimeout(function(){$('.bgimg-default').attr('src', arr[14])}, 35);
 setTimeout(function(){$('.bgimg-default').attr('src', arr[15])}, 45);
 floor.innerHTML = 6;
 sessionStorage.setItem('numFloor', 6);     
 sessionStorage.setItem('numIndex', 15);
 sessionStorage.setItem('arrayImg', arr[15]);
} else if (numIndex == 13) {
         setTimeout(function(){$('.bgimg-default').attr('src', arr[13])}, 15);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[14])}, 25);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[15])}, 35);
         floor.innerHTML = 6;
         sessionStorage.setItem('numFloor', 6);     
         sessionStorage.setItem('numIndex', 15);
         sessionStorage.setItem('arrayImg', arr[15]);
} else if (numIndex == 14) {
         setTimeout(function(){$('.bgimg-default').attr('src', arr[14])}, 15);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[15])}, 25);
         floor.innerHTML = 6;
         sessionStorage.setItem('numFloor', 6);     
         sessionStorage.setItem('numIndex', 15);
         sessionStorage.setItem('arrayImg', arr[15]);
} else if (numIndex == 15) {
 setTimeout(function(){$('.bgimg-default').attr('src', arr[15])}, 15);
 setTimeout(function(){$('.bgimg-default').attr('src', arr[16])}, 25);
 setTimeout(function(){$('.bgimg-default').attr('src', arr[17])}, 35);
 setTimeout(function(){$('.bgimg-default').attr('src', arr[18])}, 45);
 floor.innerHTML = 7;
 sessionStorage.setItem('numFloor', 7);     
 sessionStorage.setItem('numIndex', 18);
 sessionStorage.setItem('arrayImg', arr[18]);
} else if (numIndex == 16) {
         setTimeout(function(){$('.bgimg-default').attr('src', arr[16])}, 15);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[17])}, 25);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[18])}, 35);
         floor.innerHTML = 7;
         sessionStorage.setItem('numFloor', 7);     
         sessionStorage.setItem('numIndex', 18);
         sessionStorage.setItem('arrayImg', arr[18]);
}  else if (numIndex == 17) {
         setTimeout(function(){$('.bgimg-default').attr('src', arr[17])}, 15);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[18])}, 25);
         floor.innerHTML = 7;
         sessionStorage.setItem('numFloor', 7);     
         sessionStorage.setItem('numIndex', 18);
         sessionStorage.setItem('arrayImg', arr[18]);
} else if (numIndex == 18) {
 setTimeout(function(){$('.bgimg-default').attr('src', arr[18])}, 15);
 setTimeout(function(){$('.bgimg-default').attr('src', arr[19])}, 25);
 setTimeout(function(){$('.bgimg-default').attr('src', arr[20])}, 35);
 setTimeout(function(){$('.bgimg-default').attr('src', arr[21])}, 45);
 floor.innerHTML = 8;
 sessionStorage.setItem('numFloor', 8);     
 sessionStorage.setItem('numIndex', 21);
 sessionStorage.setItem('arrayImg', arr[21]);
} else if (numIndex == 19) {
         setTimeout(function(){$('.bgimg-default').attr('src', arr[19])}, 15);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[20])}, 25);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[21])}, 35);
         floor.innerHTML = 8;
         sessionStorage.setItem('numFloor', 8);     
         sessionStorage.setItem('numIndex', 21);
         sessionStorage.setItem('arrayImg', arr[21]);
} else if (numIndex == 20) {
         setTimeout(function(){$('.bgimg-default').attr('src', arr[20])}, 15);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[21])}, 25);
         floor.innerHTML = 8;
         sessionStorage.setItem('numFloor', 8);     
         sessionStorage.setItem('numIndex', 21);
         sessionStorage.setItem('arrayImg', arr[21]);
} else if (numIndex == 21) {
 setTimeout(function(){$('.bgimg-default').attr('src', arr[21])}, 15);
 setTimeout(function(){$('.bgimg-default').attr('src', arr[22])}, 25);
 setTimeout(function(){$('.bgimg-default').attr('src', arr[23])}, 35);
 setTimeout(function(){$('.bgimg-default').attr('src', arr[24])}, 45);
 floor.innerHTML = 9;
 sessionStorage.setItem('numFloor', 9);     
 sessionStorage.setItem('numIndex', 24);
 sessionStorage.setItem('arrayImg', arr[24]);
} else if (numIndex == 22) {
         setTimeout(function(){$('.bgimg-default').attr('src', arr[22])}, 15);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[23])}, 25);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[24])}, 35);
         floor.innerHTML = 9;
         sessionStorage.setItem('numFloor', 9);     
         sessionStorage.setItem('numIndex', 24);
         sessionStorage.setItem('arrayImg', arr[24]);
} else if (numIndex == 23) {
         setTimeout(function(){$('.bgimg-default').attr('src', arr[23])}, 15);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[24])}, 25);
         floor.innerHTML = 9;
         sessionStorage.setItem('numFloor', 9);     
         sessionStorage.setItem('numIndex', 24);
         sessionStorage.setItem('arrayImg', arr[24]);
} else if (numIndex == 24) {
 setTimeout(function(){$('.bgimg-default').attr('src', arr[24])}, 15);
 setTimeout(function(){$('.bgimg-default').attr('src', arr[25])}, 25);
 setTimeout(function(){$('.bgimg-default').attr('src', arr[26])}, 35);
 setTimeout(function(){$('.bgimg-default').attr('src', arr[27])}, 45);
 setTimeout(function(){$('.bgimg-default').attr('src', arr[28])}, 55);
 setTimeout(function(){$('.bgimg-default').attr('src', arr[29])}, 65);
 floor.innerHTML = 10;
 sessionStorage.setItem('numFloor', 10);     
 sessionStorage.setItem('numIndex', 29);
 sessionStorage.setItem('arrayImg', arr[29]);
} else if (numIndex == 25) {
         setTimeout(function(){$('.bgimg-default').attr('src', arr[25])}, 15);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[26])}, 25);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[27])}, 35);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[28])}, 45);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[29])}, 55);
         floor.innerHTML = 10;
         sessionStorage.setItem('numFloor', 10);     
         sessionStorage.setItem('numIndex', 29);
         sessionStorage.setItem('arrayImg', arr[29]);
} else if (numIndex == 26) {
         setTimeout(function(){$('.bgimg-default').attr('src', arr[26])}, 15);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[27])}, 25);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[28])}, 35);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[29])}, 45);
         floor.innerHTML = 10;
         sessionStorage.setItem('numFloor', 10);     
         sessionStorage.setItem('numIndex', 29);
         sessionStorage.setItem('arrayImg', arr[29]);
} else if (numIndex == 27) {
         setTimeout(function(){$('.bgimg-default').attr('src', arr[27])}, 15);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[28])}, 25);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[29])}, 35);
         floor.innerHTML = 10;
         sessionStorage.setItem('numFloor', 10);     
         sessionStorage.setItem('numIndex', 29);
         sessionStorage.setItem('arrayImg', arr[29]);
} else if (numIndex == 28) {
         setTimeout(function(){$('.bgimg-default').attr('src', arr[28])}, 15);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[29])}, 25);
         floor.innerHTML = 10;
         sessionStorage.setItem('numFloor', 10);     
         sessionStorage.setItem('numIndex', 29);
         sessionStorage.setItem('arrayImg', arr[29]);
}  else if (numIndex == 29) {
         setTimeout(function(){$('.bgimg-default').attr('src', arr[29])}, 15);
         floor.innerHTML = 10;
         sessionStorage.setItem('numFloor', 10);     
         sessionStorage.setItem('numIndex', 29);
         sessionStorage.setItem('arrayImg', arr[29]);
}  

});



$('#bottom').on('click', function(){

numFloor = +sessionStorage.getItem('numFloor');     
numIndex = +sessionStorage.getItem('numIndex');
arrayImg = sessionStorage.getItem('arrayImg');

if (numIndex == 0) { 
 setTimeout(function(){$('.bgimg-default').attr('src', arr[0])}, 15);
 floor.innerHTML = 1;
 sessionStorage.setItem('numFloor', 1);     
 sessionStorage.setItem('numIndex', 0);
 sessionStorage.setItem('arrayImg', arr[0]);
} else if (numIndex == 1) {
         setTimeout(function(){$('.bgimg-default').attr('src', arr[1])}, 15);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[0])}, 25);
         floor.innerHTML = 1;
         sessionStorage.setItem('numFloor', 1);     
         sessionStorage.setItem('numIndex', 0);
         sessionStorage.setItem('arrayImg', arr[0]);
} else if (numIndex == 2) {
         setTimeout(function(){$('.bgimg-default').attr('src', arr[2])}, 15);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[1])}, 25);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[0])}, 35);
         floor.innerHTML = 1;
         sessionStorage.setItem('numFloor', 1);     
         sessionStorage.setItem('numIndex', 0);
         sessionStorage.setItem('arrayImg', arr[0]);
} else if (numIndex == 3) {
         setTimeout(function(){$('.bgimg-default').attr('src', arr[3])}, 15);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[2])}, 25);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[1])}, 35);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[0])}, 45);
         floor.innerHTML = 1;
         sessionStorage.setItem('numFloor', 1);     
         sessionStorage.setItem('numIndex', 0);
         sessionStorage.setItem('arrayImg', arr[0]);
} else if (numIndex == 4) {
 setTimeout(function(){$('.bgimg-default').attr('src', arr[4])}, 15);
 setTimeout(function(){$('.bgimg-default').attr('src', arr[3])}, 25);
 floor.innerHTML = 2;
 sessionStorage.setItem('numFloor', 2);     
 sessionStorage.setItem('numIndex', 3);
 sessionStorage.setItem('arrayImg', arr[3]);
} else if (numIndex == 5) {
         setTimeout(function(){$('.bgimg-default').attr('src', arr[5])}, 15);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[4])}, 25);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[3])}, 35);
         floor.innerHTML = 2;
         sessionStorage.setItem('numFloor', 2);     
         sessionStorage.setItem('numIndex', 3);
         sessionStorage.setItem('arrayImg', arr[3]);
} else if (numIndex == 6) {
         setTimeout(function(){$('.bgimg-default').attr('src', arr[6])}, 15);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[5])}, 25);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[4])}, 35);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[3])}, 45);
         floor.innerHTML = 2;
         sessionStorage.setItem('numFloor', 2);     
         sessionStorage.setItem('numIndex', 3);
         sessionStorage.setItem('arrayImg', arr[3]);
} else if (numIndex == 7) {
 setTimeout(function(){$('.bgimg-default').attr('src', arr[7])}, 15);
 setTimeout(function(){$('.bgimg-default').attr('src', arr[6])}, 25);
 floor.innerHTML = 3;
 sessionStorage.setItem('numFloor', 3);
 sessionStorage.setItem('numIndex', 6);
 sessionStorage.setItem('arrayImg', arr[6]);
}  else if (numIndex == 8) {
         setTimeout(function(){$('.bgimg-default').attr('src', arr[8])}, 15);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[7])}, 25);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[6])}, 35);
         floor.innerHTML = 3;
         sessionStorage.setItem('numFloor', 3);     
         sessionStorage.setItem('numIndex', 6);
         sessionStorage.setItem('arrayImg', arr[6]);       
} else if (numIndex == 9) {
         setTimeout(function(){$('.bgimg-default').attr('src', arr[9])}, 15);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[8])}, 25);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[7])}, 35);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[6])}, 45);
         floor.innerHTML = 3;
         sessionStorage.setItem('numFloor', 3);     
         sessionStorage.setItem('numIndex', 6);
         sessionStorage.setItem('arrayImg', arr[6]);
} else if (numIndex == 10) {
 setTimeout(function(){$('.bgimg-default').attr('src', arr[10])}, 15);
 setTimeout(function(){$('.bgimg-default').attr('src', arr[9])}, 25);
 floor.innerHTML = 4;
 sessionStorage.setItem('numFloor', 4);     
 sessionStorage.setItem('numIndex', 9);
 sessionStorage.setItem('arrayImg', arr[9]);
}  else if (numIndex == 11) {
         setTimeout(function(){$('.bgimg-default').attr('src', arr[11])}, 15);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[10])}, 25);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[9])}, 35);
         floor.innerHTML = 4;
         sessionStorage.setItem('numFloor', 4);     
         sessionStorage.setItem('numIndex', 9);
         sessionStorage.setItem('arrayImg', arr[9]);
} else if (numIndex == 12) {
         setTimeout(function(){$('.bgimg-default').attr('src', arr[12])}, 15);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[11])}, 25);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[10])}, 35);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[9])}, 45);
         floor.innerHTML = 4;
         sessionStorage.setItem('numFloor', 4);     
         sessionStorage.setItem('numIndex', 9);
         sessionStorage.setItem('arrayImg', arr[9]);
} else if (numIndex == 13) {
 setTimeout(function(){$('.bgimg-default').attr('src', arr[13])}, 15);
 setTimeout(function(){$('.bgimg-default').attr('src', arr[12])}, 25);
 floor.innerHTML = 5;
 sessionStorage.setItem('numFloor', 6);     
 sessionStorage.setItem('numIndex', 12);
 sessionStorage.setItem('arrayImg', arr[12]);
} else if (numIndex == 14) {
         setTimeout(function(){$('.bgimg-default').attr('src', arr[14])}, 15);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[13])}, 25);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[12])}, 35);
         floor.innerHTML = 5;
         sessionStorage.setItem('numFloor', 6);     
         sessionStorage.setItem('numIndex', 12);
         sessionStorage.setItem('arrayImg', arr[12]);
} else if (numIndex == 15) {
         setTimeout(function(){$('.bgimg-default').attr('src', arr[15])}, 15);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[14])}, 25);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[13])}, 35);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[12])}, 45);
         floor.innerHTML = 5;
         sessionStorage.setItem('numFloor', 5);     
         sessionStorage.setItem('numIndex', 12);
         sessionStorage.setItem('arrayImg', arr[12]);
} else if (numIndex == 16) {
 setTimeout(function(){$('.bgimg-default').attr('src', arr[16])}, 15);
 setTimeout(function(){$('.bgimg-default').attr('src', arr[15])}, 25);
 floor.innerHTML = 6;
 sessionStorage.setItem('numFloor', 6);     
 sessionStorage.setItem('numIndex', 15);
 sessionStorage.setItem('arrayImg', arr[15]);
}  else if (numIndex == 17) {
         setTimeout(function(){$('.bgimg-default').attr('src', arr[17])}, 15);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[16])}, 25);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[15])}, 35);
         floor.innerHTML = 6;
         sessionStorage.setItem('numFloor', 6);     
         sessionStorage.setItem('numIndex', 15);
         sessionStorage.setItem('arrayImg', arr[15]);
} else if (numIndex == 18) {
         setTimeout(function(){$('.bgimg-default').attr('src', arr[18])}, 15);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[17])}, 25);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[16])}, 35);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[15])}, 45);
         floor.innerHTML = 6;
         sessionStorage.setItem('numFloor', 6);     
         sessionStorage.setItem('numIndex', 15);
         sessionStorage.setItem('arrayImg', arr[15]);
} else if (numIndex == 19) {
 setTimeout(function(){$('.bgimg-default').attr('src', arr[19])}, 15);
 setTimeout(function(){$('.bgimg-default').attr('src', arr[18])}, 25);
 floor.innerHTML = 7;
 sessionStorage.setItem('numFloor', 7);     
 sessionStorage.setItem('numIndex', 18);
 sessionStorage.setItem('arrayImg', arr[18]);
} else if (numIndex == 20) {
         setTimeout(function(){$('.bgimg-default').attr('src', arr[20])}, 15);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[19])}, 25);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[18])}, 35);
         floor.innerHTML = 7;
         sessionStorage.setItem('numFloor', 7);     
         sessionStorage.setItem('numIndex', 18);
         sessionStorage.setItem('arrayImg', arr[18]);
} else if (numIndex == 21) {
         setTimeout(function(){$('.bgimg-default').attr('src', arr[21])}, 15);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[20])}, 25);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[19])}, 35);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[18])}, 45);
         floor.innerHTML = 7;
         sessionStorage.setItem('numFloor', 7);     
         sessionStorage.setItem('numIndex', 18);
         sessionStorage.setItem('arrayImg', arr[18]);
} else if (numIndex == 22) {
 setTimeout(function(){$('.bgimg-default').attr('src', arr[22])}, 15);
 setTimeout(function(){$('.bgimg-default').attr('src', arr[21])}, 25);
 floor.innerHTML = 8;
 sessionStorage.setItem('numFloor', 8);     
 sessionStorage.setItem('numIndex', 21);
 sessionStorage.setItem('arrayImg', arr[21]);
} else if (numIndex == 23) {
         setTimeout(function(){$('.bgimg-default').attr('src', arr[23])}, 15);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[22])}, 25);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[21])}, 35);
         floor.innerHTML = 8;
         sessionStorage.setItem('numFloor', 8);     
         sessionStorage.setItem('numIndex', 21);
         sessionStorage.setItem('arrayImg', arr[21]);
} else if (numIndex == 24) {
         setTimeout(function(){$('.bgimg-default').attr('src', arr[24])}, 15);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[23])}, 25);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[22])}, 35);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[21])}, 45);
         floor.innerHTML = 8;
         sessionStorage.setItem('numFloor', 8);     
         sessionStorage.setItem('numIndex', 21);
         sessionStorage.setItem('arrayImg', arr[21]);
} else if (numIndex == 25) {
 setTimeout(function(){$('.bgimg-default').attr('src', arr[25])}, 15);
 setTimeout(function(){$('.bgimg-default').attr('src', arr[24])}, 25);
 floor.innerHTML = 9;
 sessionStorage.setItem('numFloor', 9);
 sessionStorage.setItem('numIndex', 24);
 sessionStorage.setItem('arrayImg', arr[24]);
} else if (numIndex == 26) {
         setTimeout(function(){$('.bgimg-default').attr('src', arr[26])}, 15);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[25])}, 25);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[24])}, 35);
         floor.innerHTML = 9;
         sessionStorage.setItem('numFloor', 9);     
         sessionStorage.setItem('numIndex', 24);
         sessionStorage.setItem('arrayImg', arr[24]);
} else if (numIndex == 27) {
         setTimeout(function(){$('.bgimg-default').attr('src', arr[27])}, 15);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[26])}, 25);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[25])}, 35);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[24])}, 45);
         floor.innerHTML = 9;
         sessionStorage.setItem('numFloor', 9);     
         sessionStorage.setItem('numIndex', 24);
         sessionStorage.setItem('arrayImg', arr[24]);
} else if (numIndex == 28) {
 setTimeout(function(){$('.bgimg-default').attr('src', arr[28])}, 15);
 setTimeout(function(){$('.bgimg-default').attr('src', arr[27])}, 25);
 floor.innerHTML = 9;
 sessionStorage.setItem('numFloor', 9);
 sessionStorage.setItem('numIndex', 27);
 sessionStorage.setItem('arrayImg', arr[27]);
}  else if (numIndex == 29) {
         setTimeout(function(){$('.bgimg-default').attr('src', arr[29])}, 15);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[28])}, 25);
         setTimeout(function(){$('.bgimg-default').attr('src', arr[27])}, 35);
         floor.innerHTML = 9;
         sessionStorage.setItem('numFloor', 10);     
         sessionStorage.setItem('numIndex', 27);
         sessionStorage.setItem('arrayImg', arr[27]);
}  

});



// init
bgmask.addEventListener("mousedown", function(){position ()});
document.addEventListener("mouseup", function(){document.onmousemove = null});


//cache update
function onUpdateReady() {
  console.log('found new version!');
}
window.applicationCache.addEventListener('updateready', onUpdateReady);
if(window.applicationCache.status === window.applicationCache.UPDATEREADY) {
  onUpdateReady();
} 

</script> 

    <!-- init music -->
<script type="text/javascript">
  playMusic();
</script>
<!--END init music -->



</div> <!--END pjax-global -->    

<?
require_once('../footer.php');
?>