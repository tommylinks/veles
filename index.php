<?php 

// meta tags
$title = "INDEX"; ///---
$description = "DESCRIPTION";
$manifest = "main.manifest";

require_once('header.php');
?> 

<body>
<div class="wrapper">

<script>
  preloader(true, 'white', 'red');  
</script><!--END preloader  -->



  <div id = "pjax-global" style = "opacity: 0;"> 
    
    <img id = "bgimg" class="img-bg" src="" style = "">
    <img id = "bgimg-back" class="img-bg" src="" style = "opacity: 1;">

<div id="bgvid-wrapper" style = "position: absolute; ">
      <video id="bgvid" preload="auto">
        <source type="video/webm">
        <source type="video/mp4">
      </video>
    </div>

    <header>
      <button class="main-menu-btn hvr-grow" style="opacity: 0;">Меню</button>

      <div class="veles-widget" style="opacity: 0;">
        <table>
          <caption>Уникален в:</caption>
          <tbody>
            <tr>
              <td>&nbsp;</td>
              <td class="border-b border-r">Киев</td>
              <td class="border-b">Veles Place</td>
            </tr>
            <tr>
              <td class="text-right">температура:</td>
              <td class="border-r">30 С</td>
              <td>25 С</td>
            </tr>
            <tr>
              <td class="text-right"></td>
              <td class="border-r"></td>
              <td></td>
            </tr>
            <tr>
              <td class="text-right">уровень смога:</td>
              <td class="border-r">есть</td>
              <td>нет</td>
            </tr>
            <tr>
              <td class="text-right"></td>
              <td class="border-r"></td>
              <td></td>
            </tr>
            <tr>
              <td class="text-right">туманность:</td>
              <td class="border-r">есть</td>
              <td>нет</td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- START documents-popup 
        <div class="documents-popup" style="opacity: 0;"></div>
    END documents-popup  -->

      <div class="main-icons-kit">
        <div class="main-icon main-logo" style="opacity: 0;">
          <a href="/omega/">
            <img class="hvr-grow" src="/omega/images/icons/logo.png" alt="logo Velec Place" />
          </a>
        </div>
        
        <!-- tooltip for bio -->
        <div class="tooltip_templates">
          <span id="tooltip_content_bio">
            <a href="#">Артезианская вода</a>, <a href="#">Эко расположение</a>
          </span>
        </div>

        <div class="main-icon icon-bio hide-main-icon-left tooltip" data-tooltip-content="#tooltip_content_bio">
          <figure>
            <img class="hvr-bob" class="hvr-pulse" src="/omega/images/icons/bio.png" alt="icon bio energy" />
            <figcaption>Био энергия</figcaption>
          </figure>
        </div>

        <!-- tooltip for socio -->
        <div class="tooltip_templates">
          <span id="tooltip_content_socio">
            <a href="#">Семинары</a>, <a href="#">Тренинги</a>
          </span>
        </div>

        <div class="main-icon icon-socio hide-main-icon-right tooltip" data-tooltip-content="#tooltip_content_socio">  
          <figure>
            <img class="hvr-bob" src="/omega/images/icons/socio.png" alt="icon socio energy" />
            <figcaption>Социо энергия</figcaption>
          </figure>
        </div>

        <!-- tooltip for techno -->
        <div class="tooltip_templates">
          <span id="tooltip_content_techno">
            <a href="#">Лифты</a>, <a href="#">Паркинг</a>
          </span>
        </div>

        <div class="main-icon icon-techno hide-main-icon-left tooltip" data-tooltip-content="#tooltip_content_techno">
          <figure>
            <img class="hvr-bob" src="/omega/images/icons/techno.png" alt="icon techno energy" />
            <figcaption>Техно энергия</figcaption>
          </figure>
        </div>

        <!-- tooltip for person -->
        <div class="tooltip_templates">
          <span id="tooltip_content_person">
            <a href="#">Мастерские</a>, <a href="#">Галерея</a>
          </span>
        </div>

        <div class="main-icon icon-person hide-main-icon-right tooltip" data-tooltip-content="#tooltip_content_person">
          <figure>
            <img class="hvr-bob" src="/omega/images/icons/person.png" alt="icon person energy" />
            <figcaption>Энергия личности</figcaption>
          </figure>
        </div>
        <div class="main-icon icon-phone hide-main-icon-right">
          <div class="icon-phone-animation"></div>
        </div>
      </div><!--END main-icons-kit -->
      <button class="sound-btn hvr-grow hide-main-icon-left" style="opacity: 0"></button>
    </header>

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
  <div class="main-menu">

   <? include 'include/menu.php'; ?>

  </div>

  <div class="main-icon daynight hide-main-icon-left">
    <img id="bgvid-link-day" class="snt-link hvr-grow" src =""  style="position: absolute;" />
    <img id="bgvid-link-night" class="snt-link hvr-grow" src =""  style="position: absolute;" />     
  </div>


  <!-- new navigation -->
    <div class="snt-prev snt-link bgvid-link-01 hvr-grow" style="display: none; opacity: 0;"></div>
    <div class="snt-start snt-link bgvid-link-02 hvr-grow tooltip-nav" title="О Комплексе" style="opacity: 0;"></div>
    <div class="snt-next snt-link bgvid-link-03 hvr-grow" style="display: none; opacity: 0;"></div>


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
      funcAnimation ( pathVidDay01, pathImgDay01, pathImgNight01, 1, 0, 0, 'block', 'none' ); 

      // записываем глобальные переменные для дня
      funcSessionStorageDay ();

     } else { //night
      console.log ("ночь");
      document.cookie = "daynight=";
      document.cookie = "daynight=night; expires=3600";

      // вызываем функцию замены ссылок и анимации для ночи
      funcAnimation ( pathVidNight01, pathImgDay01, pathImgNight01, 0, 1, 0, 'none', 'block' );

      // записываем глобальные переменные для ночи
      funcSessionStorageNight ();
     } 
  } else {
    // получить текущие куки и распарсить 

      var getCookie = document.cookie.split('; ');
      var daynightCookie = getCookie[0].split('=');

      if (daynightCookie[1] == "day") {

        // вызываем функцию замены ссылок и анимации для дня
        funcAnimation ( pathVidDay01, pathImgDay01, pathImgNight01, 1, 0, 0, 'block', 'none' ); 

        // записываем глобальные переменные для дня
        funcSessionStorageDay ();

      } else {

        // вызываем функцию замены ссылок и анимации для дня
        funcAnimation ( pathVidNight01, pathImgDay01, pathImgNight01, 0, 1, 0, 'none', 'block' );

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
  funcAnimation ( pathVidDay01, pathImgDay01, pathImgNight01, 1, 0, 1000, 'block', 'none' );

});


$('#bgvid-link-night').click(function(){

  // записываем глобальные переменные для ночи
  funcSessionStorageNight ();

  document.cookie = "daynight=";
  document.cookie = "daynight=night; expires=3600"

  // вызываем функцию замены ссылок и анимации для дня
  funcAnimation ( pathVidNight01, pathImgDay01, pathImgNight01, 0, 1, 1000, 'none', 'block' );

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


  <!--  tooltips -->
  <script>
    // for main icons
    $('.tooltip').tooltipster({
      theme: 'tooltipster-borderless',
      trigger: 'click',
      interactive: true,
    });

    // for navigation icons
    $('.tooltip-nav').tooltipster({
      theme: 'tooltipster-borderless',
    });
  </script>
   <!--END floating tooltips -->


<!-- появление и отключение попапа видеоролик (этот скрипт должен быть на каждой странице и в футере) -->
<script>
  $('.video-popup').click(function () {
      $("#video-popup, .overlay").fadeIn();

      setTimeout(function(){$("#video-content")[0].play()}, 0);
    });
  
  $('.overlay, .close-video-popup').click(function () {
    $("#video-popup, .overlay").fadeOut();
  });
</script>


<!-- init music -->
<script type="text/javascript">
  playMusic();
</script>
<!--END init music -->


</div> <!--END pjax-global -->   
 


<?
require_once('footer.php');
?>