<?php 

// meta tags
$title = "Section two"; ///---
$description = "DESCRIPTION";
$manifest = "main.manifest";

require_once('../../header.php');
?> 


<body>
<div class="wrapper">
<!-- preloader  -->
<script>
	preloader(true, 'white', 'red');	
</script><!--END preloader  -->

  <div id = "pjax-global" style = "opacity: 0;"> 
 
    <img id="bgimg" class="img-bg" src="" style = "">
    <img id="bgimg-back" class="img-bg" src="" style = "opacity: 1;">

	<div id="bgvid-wrapper" style ="position: absolute; ">
      <video id="bgvid" preload="auto">
        <source type="video/webm">
        <source type="video/mp4">
      </video>
    </div>

    <header>
      <img src="/omega/images/icons/logo.png" alt="logo" class="secondary-logo" style="opacity: 0;">
      <button class="main-menu-btn secondary-p menu-buy-p hvr-grow" style="opacity: 0;">Меню</button>


    
    <!-- START documents-popup   -->  
    <div class="buy-sections section-two" style="opacity: 0;">

    <h1 class="section-title">
      Секция 2
    </h1>

      <table class="buy-table">
        <tbody>
        <tr>
          <td></td>
          <td class="buy-table-title">Этаж</td>
          <td></td>
        </tr>
        <tr class="buy-table-divider">
          <td></td>
          <td><span class="floor-num floor-active">04</span></td>
          <td class="buy-table-title text-right">Жилая недвижимость</td>
        </tr>
        <tr>
          <td></td>
          <td><span class="floor-num">04</span></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td><span class="floor-num">03</span></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td><span class="floor-num">03</span></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td><span class="floor-num">02</span></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td><span class="floor-num">02</span></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td><span class="floor-num">01</span></td>
          <td></td>
        </tr>
        <tr class="buy-table-divider">
          <td class="text-right">антрисоль</td>
          <td><span class="floor-num">01</span></td>
          <td class="buy-table-title text-right">Коммерческая недвижимость</td>
        </tr>
        <tr class="buy-table-divider">
          <td class="text-right">бытовые<br> помещения</td>          
          <td><span class="floor-num">P-1</span></td>
          <td class="buy-table-title text-right">Паркинг</td>
        </tr>
        </tbody>
        </table>
    </div>
    <!-- END documents-popup   -->  

      <button class="sound-btn secondary-p"></button>
      <div class="icon-phone secondary-p">
        <div class="icon-phone-animation"></div>
      </div>
    </header>

      <!-- overlay -->
  <div class="overlay"></div>

   <!-- main menu -->
  <div class="main-menu">
    <ul>
      <li><div class="bgvid-link-01 snt-link">Главная</div></li>
      <li><div class="bgvid-link-02 snt-link">О комплексе</div></li>
      <li><div class="bgvid-link-03 snt-link">Преимущества</div></li>
      <li><div class="bgvid-link-04 snt-link">Расположение</div></li>
      <li><div class="bgvid-link-05 snt-link">Вид из окон</div></li>     
      <li><div class="bgvid-link-06 snt-link">Купить</div></li>
      <li><div class="bgvid-link-07 snt-link">Аппартаменты</div></li>
      <li><div class="bgvid-link-08 snt-link">Коммерческая недвижимость</div></li>
      <li><div class="bgvid-link-09 snt-link">Ход строительства</div></li>
      <li><div class="bgvid-link-10 snt-link">Документы</div></li>
      <li><div class="bgvid-link-11 snt-link">События</div></li>
    </ul>
    <span class="close-main-menu">  &times;</span>
  </div>

  <div class="main-icon daynight secondary-p">
    <img id="bgvid-link-day" class="snt-link" src =""  style="position: absolute;" />
    <img id="bgvid-link-night" class="snt-link" src =""  style="position: absolute;" />     
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
      console.log (pathVidDay01);

      // вызываем функцию замены ссылок и анимации для дня
      funcAnimation ( pathVidDay02, pathImgDay02, pathImgNight02, 1, 0, 0, 'block', 'none' ); 

      // записываем глобальные переменные для дня
      funcSessionStorageDay ();

     } else { //night
      console.log ("ночь");
      document.cookie = "daynight=";
      document.cookie = "daynight=night; expires=3600";

      // вызываем функцию замены ссылок и анимации для ночи
      funcAnimation ( pathVidNight02, pathImgDay02, pathImgNight02, 0, 1, 0, 'none', 'block' );

      // записываем глобальные переменные для ночи
      funcSessionStorageNight ();
     } 
  } else {
    // получить текущие куки и распарсить 

      var getCookie = document.cookie.split('; ');
      var daynightCookie = getCookie[0].split('=');

      if (daynightCookie[1] == "day") {

        // вызываем функцию замены ссылок и анимации для дня
        funcAnimation ( pathVidDay02, pathImgDay02, pathImgNight02, 1, 0, 0, 'block', 'none' ); 

        // записываем глобальные переменные для дня
        funcSessionStorageDay ();

      } else {

        // вызываем функцию замены ссылок и анимации для дня
        funcAnimation ( pathVidNight02, pathImgDay02, pathImgNight02, 0, 1, 0, 'none', 'block' );

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
  funcAnimation ( pathVidDay02, pathImgDay02, pathImgNight02, 1, 0, 1000, 'block', 'none' );

});


$('#bgvid-link-night').click(function(){

  // записываем глобальные переменные для ночи
  funcSessionStorageNight ();

  document.cookie = "daynight=";
  document.cookie = "daynight=night; expires=3600"

  // вызываем функцию замены ссылок и анимации для дня
  funcAnimation ( pathVidNight02, pathImgDay02, pathImgNight02, 0, 1, 1000, 'none', 'block' );

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
  $('.snt-next, .snt-start, .snt-prev, .main-menu-btn').on("click", funcIconAnimationOut );
</script>

<!-- Animation icons when the page have been loaded -->
<script>
    setTimeout ( funcIconAnimationIn, 700 );
</script>


	
</div> <!--END pjax-global -->    
  


<?
require_once('../../footer.php');
?>