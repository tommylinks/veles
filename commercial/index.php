<?php 

// meta tags
$title = "Commercial"; ///---
$description = "DESCRIPTION";

require_once('../header.php');
?> 

<body>
<div class="wrapper">

  <!-- preloader  -->
  <div id="p_prldr"><div class="contpre"><span class="svg_anm"></span></div></div>

  <!--END preloader  -->
  <div id = "pjax-global"> 
    <img id="bgimg" class="img-bg" src="" style = "">
    <img id="bgimg-back" class="img-bg" src="" style = "opacity: 1;">

    <div id="bgvid-wrapper" style ="position: absolute; display:none;">
      <video id="bgvid" preload="auto">
        <source type="video/webm">
        <source type="video/mp4">
      </video>
    </div>

    <header>
      <button class="main-menu-btn">Меню</button>

    <!-- START documents-popup -->
        <div class="documents-popup" style="display: none;"></div>
    <!-- END documents-popup  -->

      <div class="main-icons-kit">
        <div class="main-icon main-logo">
          <img src="/omega/images/icons/logo.png" alt="logo Velec Place" />
        </div>
        <div class="main-icon icon-bio" data-action="show-actions-menu">
          <figure>
            <img class="hvr-pulse" class="hvr-pulse" src="/omega/images/icons/bio.png" alt="icon bio energy" />
            <figcaption>Био энергия</figcaption>
          </figure>
        </div>
        <div class="main-icon icon-socio" data-action="show-actions-menu">  
          <figure>
            <img class="hvr-pulse" src="/omega/images/icons/socio.png" alt="icon socio energy" />
            <figcaption>Социо энергия</figcaption>
          </figure>
        </div>
        <div class="main-icon icon-techno" data-action="show-actions-menu">
          <figure>
            <img class="hvr-pulse" src="/omega/images/icons/techno.png" alt="icon techno energy" />
            <figcaption>Техно энергия</figcaption>
          </figure>
        </div>
        <div class="main-icon icon-person" data-action="show-actions-menu">
          <figure>
            <img class="hvr-pulse" src="/omega/images/icons/person.png" alt="icon person energy" />
            <figcaption>Энергия личности</figcaption>
          </figure>
        </div>
        <div class="main-icon icon-phone">
          <div class="icon-phone-animation"></div>
        </div>
      </div><!--END main-icons-kit -->
      <button class="sound-btn"></button>
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

  <div class="main-icon daynight">
    <img id="bgvid-link-day" class="snt-link" src =""  style="position: absolute;" />
    <img id="bgvid-link-night" class="snt-link" src =""  style="position: absolute;" />     
  </div>


  <div class="navigation" style="position: absolute; left: 50%; top: 80%; margin-left: -50px; width: 100px; font-size: 40px; color: white;">
    <div class="prev snt-link bgvid-link-04" style="display: none;"> < </div>
    <div class="start snt-link bgvid-link-01" style="display: none;"> ^ </div>
    <div class="next snt-link bgvid-link-06" style="display: none;"> > </div>
  </div>

<script>
  //   pathes
  var pathVidNight01 = '/omega/media/night/01.webm';
  var pathImgNight01 = '/omega/images/night/01.jpg';
  var pathVidNight02 = '/omega/media/night/02.webm';
  var pathImgNight02 = '/omega/images/night/02.jpg';
  var pathVidNight03 = '/omega/media/night/03.webm';
  var pathImgNight03 = '/omega/images/night/03.jpg';
  var pathVidNight04 = '/omega/media/night/04.webm';
  var pathImgNight04 = '/omega/images/night/04.jpg';
  var pathVidNight05 = '/omega/media/night/05.webm';
  var pathImgNight05 = '/omega/images/night/05.jpg';
  var pathVidNight06 = '/omega/media/night/06.webm';
  var pathImgNight06 = '/omega/images/night/06.jpg';
  var pathVidNight07 = '/omega/media/night/07.webm';
  var pathImgNight07 = '/omega/images/night/07.jpg';
  var pathVidNight08 = '/omega/media/night/08.webm';
  var pathImgNight08 = '/omega/images/night/08.jpg';
  var pathVidNight09 = '/omega/media/night/09.webm';
  var pathImgNight09 = '/omega/images/night/09.jpg';
  var pathVidNight10 = '/omega/media/night/10.webm';
  var pathImgNight10 = '/omega/images/night/10.jpg';
  var pathVidNight11 = '/omega/media/night/11.webm';
  var pathImgNight11 = '/omega/images/night/11.jpg';


  var pathVidDay01 = '/omega/media/day/01.webm';
  var pathImgDay01 = '/omega/images/day/01.jpg';
  var pathVidDay02 = '/omega/media/day/02.webm';
  var pathImgDay02 = '/omega/images/day/02.jpg';
  var pathVidDay03 = '/omega/media/day/03.webm';
  var pathImgDay03 = '/omega/images/day/03.jpg';
  var pathVidDay04 = '/omega/media/day/04.webm';
  var pathImgDay04 = '/omega/images/day/04.jpg';
  var pathVidDay05 = '/omega/media/day/05.webm';
  var pathImgDay05 = '/omega/images/day/05.jpg';  
  var pathVidDay06 = '/omega/media/day/06.webm';
  var pathImgDay06 = '/omega/images/day/06.jpg';
  var pathVidDay07 = '/omega/media/day/07.webm';
  var pathImgDay07 = '/omega/images/day/07.jpg';
  var pathVidDay08 = '/omega/media/day/08.webm';
  var pathImgDay08 = '/omega/images/day/08.jpg';
  var pathVidDay09 = '/omega/media/day/09.webm';
  var pathImgDay09 = '/omega/images/day/09.jpg';
  var pathVidDay10 = '/omega/media/day/10.webm';
  var pathImgDay10 = '/omega/images/day/10.jpg';
  var pathVidDay11 = '/omega/media/day/11.webm';
  var pathImgDay11 = '/omega/images/day/11.jpg';

  var pathIconDay = '/omega/images/icons/day.png';
  var pathIconNight = '/omega/images/icons/night.png';

  //записываем глобальные переменные ДЕНЬ
  var funcSessionStorageDay = function() {
    sessionStorage.clear();
    var linkBgvid01 = sessionStorage.setItem('linkBgvid01', pathVidDay01);
    var linkBgimg01 = sessionStorage.setItem('linkBgimg01', pathImgDay01);
    var linkBgvid02 = sessionStorage.setItem('linkBgvid02', pathVidDay02);
    var linkBgimg02 = sessionStorage.setItem('linkBgimg02', pathImgDay02);
    var linkBgvid03 = sessionStorage.setItem('linkBgvid03', pathVidDay03);
    var linkBgimg03 = sessionStorage.setItem('linkBgimg03', pathImgDay03);
    var linkBgvid04 = sessionStorage.setItem('linkBgvid04', pathVidDay04);
    var linkBgimg04 = sessionStorage.setItem('linkBgimg04', pathImgDay04);
    var linkBgvid05 = sessionStorage.setItem('linkBgvid05', pathVidDay05);
    var linkBgimg05 = sessionStorage.setItem('linkBgimg05', pathImgDay05);
    var linkBgvid06 = sessionStorage.setItem('linkBgvid06', pathVidDay06);
    var linkBgimg06 = sessionStorage.setItem('linkBgimg06', pathImgDay06);
    var linkBgvid07 = sessionStorage.setItem('linkBgvid07', pathVidDay07);
    var linkBgimg07 = sessionStorage.setItem('linkBgimg07', pathImgDay07);
    var linkBgvid08 = sessionStorage.setItem('linkBgvid08', pathVidDay08);
    var linkBgimg08 = sessionStorage.setItem('linkBgimg08', pathImgDay08);
    var linkBgvid09 = sessionStorage.setItem('linkBgvid09', pathVidDay09);
    var linkBgimg09 = sessionStorage.setItem('linkBgimg09', pathImgDay09);
    var linkBgvid10 = sessionStorage.setItem('linkBgvid10', pathVidDay10);
    var linkBgimg10 = sessionStorage.setItem('linkBgimg10', pathImgDay10);
    var linkBgvid11 = sessionStorage.setItem('linkBgvid11', pathVidDay11);
    var linkBgimg11 = sessionStorage.setItem('linkBgimg11', pathImgDay11);
  };

  //записываем глобальные переменные НОЧЬ
    var funcSessionStorageNight = function() {
      sessionStorage.clear();
      var linkBgvid01 = sessionStorage.setItem('linkBgvid01', pathVidNight01);
      var linkBgimg01 = sessionStorage.setItem('linkBgimg01', pathImgNight01);
      var linkBgvid02 = sessionStorage.setItem('linkBgvid02', pathVidNight02);
      var linkBgimg02 = sessionStorage.setItem('linkBgimg02', pathImgNight02);
      var linkBgvid03 = sessionStorage.setItem('linkBgvid03', pathVidNight03);
      var linkBgimg03 = sessionStorage.setItem('linkBgimg03', pathImgNight03);
      var linkBgvid04 = sessionStorage.setItem('linkBgvid04', pathVidNight04);
      var linkBgimg04 = sessionStorage.setItem('linkBgimg04', pathImgNight04);
      var linkBgvid05 = sessionStorage.setItem('linkBgvid05', pathVidNight05);
      var linkBgimg05 = sessionStorage.setItem('linkBgimg05', pathImgNight05);
      var linkBgvid06 = sessionStorage.setItem('linkBgvid06', pathVidNight06);
      var linkBgimg06 = sessionStorage.setItem('linkBgimg06', pathImgNight06);
      var linkBgvid07 = sessionStorage.setItem('linkBgvid07', pathVidNight07);
      var linkBgimg07 = sessionStorage.setItem('linkBgimg07', pathImgNight07);
      var linkBgvid08 = sessionStorage.setItem('linkBgvid08', pathVidNight08);
      var linkBgimg08 = sessionStorage.setItem('linkBgimg08', pathImgNight08);
      var linkBgvid09 = sessionStorage.setItem('linkBgvid09', pathVidNight09);
      var linkBgimg09 = sessionStorage.setItem('linkBgimg09', pathImgNight09);
      var linkBgvid10 = sessionStorage.setItem('linkBgvid10', pathVidNight10);
      var linkBgimg10 = sessionStorage.setItem('linkBgimg10', pathImgNight10);
      var linkBgvid11 = sessionStorage.setItem('linkBgvid11', pathVidNight11);
      var linkBgimg11 = sessionStorage.setItem('linkBgimg11', pathImgNight11);

  };

  //текущее время
  var date = new Date();
  var daytime = date.getHours();
  console.log (daytime);
  
  // функция замены ссылок + анимация ДЕНЬ
  var funcAnimationDay = function () {
    $('#bgvid').attr('src', pathVidDay08); ///-----
    $('#bgimg').attr('src', pathImgDay08); ///-----
    $('#bgimg-back').attr('src', pathImgNight08); ///-----
    $('#bgimg').animate({ opacity: 1 }, 0);
    $('#bgimg_back').animate({ opacity: 0 }, 0);
    $('#bgvid-link-night').attr('src', pathIconNight);
    $('#bgvid-link-day').attr('src', pathIconDay);
    $('#bgvid-link-night').css('display','block');
    $('#bgvid-link-day').css('display','none');
  };

  // функция замены ссылок + анимация НОЧЬ
    var funcAnimationNight = function () {

      $('#bgvid').attr('src', pathVidNight08); ///-----
      $('#bgimg').attr('src', pathImgDay08); ///-----
      $('#bgimg-back').attr('src', pathImgNight08); ///-----
      $('#bgimg').animate({ opacity: 0 }, 0);
      $('#bgimg_back').animate({ opacity: 1 }, 0);
      $('#bgvid-link-night').attr('src', pathIconNight);
      $('#bgvid-link-day').attr('src', pathIconDay);
      $('#bgvid-link-night').css('display','none');
      $('#bgvid-link-day').css('display','block');
  };

  if (document.cookie == false) {
    // условия зависимости контента от времени суток
     if (daytime >= 8 && daytime <= 17) { // day
      console.log ("день");
      document.cookie = "daynight=";
      document.cookie = "daynight=day; expires=3600";

      // вызываем функцию замены ссылок и анимации для дня
      funcAnimationDay ();

      // записываем глобальные переменные для дня
      funcSessionStorageDay ();

     } else { //night
      console.log ("ночь");
      document.cookie = "daynight=";
      document.cookie = "daynight=night; expires=3600";

      // вызываем функцию замены ссылок и анимации для ночи
      funcAnimationNight ();

      // записываем глобальные переменные для ночи
      funcSessionStorageNight ();
     } 
  } else {
    // получить текущие куки и распарсить 
      console.log (document.cookie);
      var getCookie = document.cookie.split('; ');
      var daynightCookie = getCookie[0].split('=');

      if (daynightCookie[1] == "day") {

        // вызываем функцию замены ссылок и анимации для дня
        funcAnimationDay ();

        // записываем глобальные переменные для дня
        funcSessionStorageDay ();

      } else {

        // вызываем функцию замены ссылок и анимации для дня
        funcAnimationNight ();

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
    funcAnimationDay ();

});


$('#bgvid-link-night').click(function(){

  // записываем глобальные переменные для ночи
  funcSessionStorageNight ();

  document.cookie = "daynight=";
  document.cookie = "daynight=night; expires=3600"

    // вызываем функцию замены ссылок и анимации для дня
    funcAnimationNight ();

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


</div> <!--END pjax-global -->    

<?
require_once('../footer.php');
?>