<?php 

// meta tags
$title = "INDEX";
$description = "DESCRIPTION";

require_once('header.php');
?> 
<style type="text/css">
  pre {position: absolute; left: 500px; top: 30px; z-index: 11; color: white;}

</style>


<pre><? print_r ($_COOKIE); ?></pre>




<body>
  <div class="wrapper">
<!-- preloader  -->
<div id="p_prldr"><div class="contpre"><span class="svg_anm"></span></div></div>
<!--END preloader  -->

  <div id = 'pjax-global'> 
      
      <img id='bgimg' class='img-bg' src='' style = ''>
      <img id='bgimg-back' class='img-bg' src='' style = "opacity: 1;">
     
    
      <div id='bgvid-wrapper' style ='position: absolute; display:none;'>
        <video id='bgvid' preload='auto'>
          <source type='video/webm'>
        </video>
      </div>
    
    


    <header>
      <button class="main-menu-btn hvr-pulse">Меню</button>
      <div class="main-icons-kit">
        <div class="main-icon main-logo">
          <img src="/zetta/images/icons/logo.png" alt="logo Velec Place" />
        </div>
        <div class="main-icon icon-bio" data-action="show-actions-menu">
          <figure>
            <img class="hvr-pulse" class="hvr-pulse" src="/zetta/images/icons/bio.png" alt="icon bio energy" />
            <figcaption>Био энергия</figcaption>
          </figure>
        </div>
        <div class="main-icon icon-socio" data-action="show-actions-menu">  
          <figure>
            <img class="hvr-pulse" src="/zetta/images/icons/socio.png" alt="icon socio energy" />
            <figcaption>Социо энергия</figcaption>
          </figure>
        </div>
        <div class="main-icon icon-techno" data-action="show-actions-menu">
          <figure>
            <img class="hvr-pulse" src="/zetta/images/icons/techno.png" alt="icon techno energy" />
            <figcaption>Техно энергия</figcaption>
          </figure>
        </div>
        <div class="main-icon icon-person" data-action="show-actions-menu">
          <figure>
            <img class="hvr-pulse" src="/zetta/images/icons/person.png" alt="icon person energy" />
            <figcaption>Энергия личности</figcaption>
          </figure>
        </div>
        <div class="main-icon icon-phone">
        </div>
      </div><!--END main-icons-kit -->
      <button class="sound-btn"></button>
    </header>

      <!-- overlay -->
  <div class="overlay"></div>

   <!-- main menu -->
  <div class="main-menu">
  <style> .snt-link { cursor: pointer; }</style>
    <ul>
      <li><div class="bgvid-link-01 snt-link">Главная</div></li>
      <li><div class="bgvid-link-02 snt-link">О комплексе</div></li>
      <li><div class="bgvid-link-03 snt-link">Преимущества</div></li>
      <li><div class="bgvid-link-04 snt-link">Расположение</div></li>
      <li><div class="bgvid-link-05 snt-link">Вид из окон</div></li>
      <li><div class="bgvid-link-06 snt-link">Ход строительства</div></li>
      <li><div class="bgvid-link-07 snt-link">Купить</div></li>
      <li><div class="bgvid-link-08 snt-link">Аппартаменты</div></li>
      <li><div class="bgvid-link-09 snt-link">Коммерческая недвижимость</div></li>
      <li><div class="bgvid-link-10 snt-link">Документы</div></li>
      <li><div class="bgvid-link-11 snt-link">События</div></li>
    </ul>
    <span class="close-main-menu">  &times;</span>
  </div>

  <div class='main-icon daynight' style='
        top: 50%;
        left: 10%;
        transform: translateY(-50%);
        width: 70px;
        height: 70px;
        border-radius: 50%;
        -webkit-box-shadow: 0px 0px 39px -10px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 0px 0px 39px -10px rgba(0, 0, 0, 0.75);
        box-shadow: 0px 0px 39px -10px rgba(0, 0, 0, 0.75);
  display: inline-block;
    position: absolute;
    cursor: pointer;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
     user-select: none;'>

      <img id='bgvid-link-day' class='snt-link' src = ''  style = 'position: absolute;' />
      <img id='bgvid-link-night' class='snt-link' src = ''  style = ' position: absolute;' />     
  </div>


  <div class="navigation" style="position: absolute; left: 50%; top: 80%; margin-left: -50px; width: 100px; font-size: 40px; color: white;">
    <div class="prev snt-link" style="display: none;"> < </div>
    <div class="start snt-link" style="display: none;"> ^ </div>
    <div class="next snt-link bgvid-link-02" style="display: inline-block;"> > </div>
  </div>


<script>
  //   pathes
  var pathVidNight01 = '/zetta/media/night/01.webm';
  var pathImgNight01 = '/zetta/images/night/01.jpg';
  var pathVidNight02 = '/zetta/media/night/02.webm';
  var pathImgNight02 = '/zetta/images/night/02.jpg';
  var pathVidNight03 = '/zetta/media/night/03.webm';
  var pathImgNight03 = '/zetta/images/night/03.jpg';
  var pathVidNight04 = '/zetta/media/night/04.webm';
  var pathImgNight04 = '/zetta/images/night/04.jpg';
  var pathVidNight05 = '/zetta/media/night/05.webm';
  var pathImgNight05 = '/zetta/images/night/05.jpg';
  var pathVidNight06 = '/zetta/media/night/06.webm';
  var pathImgNight06 = '/zetta/images/night/06.jpg';
  var pathVidNight07 = '/zetta/media/night/07.webm';
  var pathImgNight07 = '/zetta/images/night/07.jpg';
  var pathVidNight08 = '/zetta/media/night/08.webm';
  var pathImgNight08 = '/zetta/images/night/08.jpg';
  var pathVidNight09 = '/zetta/media/night/09.webm';
  var pathImgNight09 = '/zetta/images/night/09.jpg';
  var pathVidNight10 = '/zetta/media/night/10.webm';
  var pathImgNight10 = '/zetta/images/night/10.jpg';
  var pathVidNight11 = '/zetta/media/night/11.webm';
  var pathImgNight11 = '/zetta/images/night/11.jpg';


  var pathVidDay01 = '/zetta/media/day/01.webm';
  var pathImgDay01 = '/zetta/images/day/01.jpg';
  var pathVidDay02 = '/zetta/media/day/02.webm';
  var pathImgDay02 = '/zetta/images/day/02.jpg';
  var pathVidDay03 = '/zetta/media/day/03.webm';
  var pathImgDay03 = '/zetta/images/day/03.jpg';
  var pathVidDay04 = '/zetta/media/day/04.webm';
  var pathImgDay04 = '/zetta/images/day/04.jpg';
  var pathVidDay05 = '/zetta/media/day/05.webm';
  var pathImgDay05 = '/zetta/images/day/05.jpg';  
  var pathVidDay06 = '/zetta/media/day/06.webm';
  var pathImgDay06 = '/zetta/images/day/06.jpg';
  var pathVidDay07 = '/zetta/media/day/07.webm';
  var pathImgDay07 = '/zetta/images/day/07.jpg';
  var pathVidDay08 = '/zetta/media/day/08.webm';
  var pathImgDay08 = '/zetta/images/day/08.jpg';
  var pathVidDay09 = '/zetta/media/day/09.webm';
  var pathImgDay09 = '/zetta/images/day/09.jpg';
  var pathVidDay10 = '/zetta/media/day/10.webm';
  var pathImgDay10 = '/zetta/images/day/10.jpg';
  var pathVidDay11 = '/zetta/media/day/11.webm';
  var pathImgDay11 = '/zetta/images/day/11.jpg';

  var pathIconDay = '/zetta/images/icons/day.png';
  var pathIconNight = '/zetta/images/icons/night.png';

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
  }

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

  }


  // забираем глобальные переменные из хранилища

  var funcGetSessionStorage = function() {

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

  }


  //текущее время
  var date = new Date();
  var daytime = date.getHours();
  console.log (daytime);
  

  // функция замены ссылок + анимация ДЕНЬ

  var funcAnimationDay = function () {

      $('#bgvid').attr('src', pathVidDay01); ///-----
      $('#bgimg').attr('src', pathImgDay01); ///-----
      $('#bgimg-back').attr('src', pathImgNight01); ///-----
      $('#bgimg').animate({ opacity: 1 }, 1000);
      $('#bgimg_back').animate({ opacity: 0 }, 1000);
      $('#bgvid-link-night').attr('src', pathIconNight);
      $('#bgvid-link-day').attr('src', pathIconDay);
      $('#bgvid-link-night').css('display','block');
      $('#bgvid-link-day').css('display','none');
  }

  // функция замены ссылок + анимация НОЧЬ

    var funcAnimationNight = function () {

      $('#bgvid').attr('src', pathVidNight01); ///-----
      $('#bgimg').attr('src', pathImgDay01); ///-----
      $('#bgimg-back').attr('src', pathImgNight01); ///-----
      $('#bgimg').animate({ opacity: 0 }, 1000);
      $('#bgimg_back').animate({ opacity: 1 }, 1000);
      $('#bgvid-link-night').attr('src', pathIconNight);
      $('#bgvid-link-day').attr('src', pathIconDay);
      $('#bgvid-link-night').css('display','none');
      $('#bgvid-link-day').css('display','block');
  }


  ////////

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

            //забираем глобальные переменные
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

      console.log('linkBgvid02aa', linkBgvid02);

     } else { //night
      console.log ("ночь");
      document.cookie = "daynight=";
      document.cookie = "daynight=night; expires=3600";

      // вызываем функцию замены ссылок и анимации для ночи
      funcAnimationNight ();

      // записываем глобальные переменные для ночи
      funcSessionStorageNight ();

      //забираем глобальные переменные
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

      console.log('linkBgvid02a', linkBgvid02);
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

              //забираем глобальные переменные
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

        console.log('linkBgvid02b', linkBgvid02);

      } else {

        // вызываем функцию замены ссылок и анимации для дня
        funcAnimationNight ();

        // записываем глобальные переменные для ночи
        funcSessionStorageNight ();

              //забираем глобальные переменные
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

        console.log('linkBgvid02c', linkBgvid02);
      }
     
  }


$('#bgvid-link-day').click(function(){



  document.cookie = "daynight=";
  document.cookie = "daynight=day; expires=3600";

    // вызываем функцию замены ссылок и анимации для дня
    funcAnimationDay ();

	// записываем глобальные переменные для дня
    funcSessionStorageDay ();

          //забираем глобальные переменные
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


	console.log('linkBgvid02n', linkBgvid02);
});


$('#bgvid-link-night').click(function(){



  document.cookie = "daynight=";
  document.cookie = "daynight=night; expires=3600"

    // вызываем функцию замены ссылок и анимации для дня
    funcAnimationNight ();
    // записываем глобальные переменные для ночи
    funcSessionStorageNight ();

          //забираем глобальные переменные
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
    console.log('linkBgvid02m', linkBgvid02);

});


            //забираем глобальные переменные
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







<!-- polyfill for ie -object-fit- -->
<script type="text/javascript" src="/zetta/js/fitie.js"></script>

</div> <!--END pjax-global -->    




<?
require_once('footer.php');
?>