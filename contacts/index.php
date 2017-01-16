<?php 

// meta tags
$title = "infrastructure"; ///---
$description = "DESCRIPTION";
$manifest = "main.manifest";

require_once('../header.php');
?> 

<style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 103%;
      }


      .contacts-circle {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        left: 0;
        right: 0;
        margin: 0 auto;
        width: 500px;
        height: 500px;
        z-index: 10;
        background: #fff;
        border-radius: 50%;
        -webkit-box-shadow: 0px 0px 25px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 0px 25px 0px rgba(0,0,0,0.75);
        box-shadow: 0px 0px 25px 0px rgba(0,0,0,0.75);
      }

      .contacts-circle .contacts-wrap {
        width: 75%;
        margin: 0 auto;
      }

      .contacts-circle .contacts-title {
        padding: 10px 0;
        border-bottom: 6px solid #000;
        margin: 100px 0 10px 0;
        text-transform: uppercase;
        width: 100%;
      }

      .contacts-circle .left-title {
        float: left;
        margin: 0;
        font-size: 27px;
      }

      .contacts-circle .right-title {
        float: right;
        text-align: right;
        padding-right: 50px;
        background: url(../images/icons/photo.png) no-repeat right;
        font-weight: bold;
      }

      .contacts-circle .address {
        font-size: 18px;
        font-weight: bold;
      }

      .contacts-phones ul li, .contacts-mail ul li {
        text-align: center;
        font-size: 20px;
        list-style-type: none;
        font-weight: bold;
        padding: 3px;
      }

      .close-contacts {
        position: absolute;
        top: 0;
        right: 0;
        font-size: 68px;
        color: #fff;
        text-shadow: 0px 0px 8px rgba(48, 48, 48, 1);
      }

    </style>

<body>
<div class="wrapper">
<!-- preloader  -->
<script>
	preloader(true, 'white', 'red');	
</script><!--END preloader  -->
 



  <div id="map"></div>
  <div id = "pjax-global" style = "opacity: 0;">  
<!--     <img id="bgimg" class="img-bg" src="" style = "">
    <img id="bgimg-back" class="img-bg" src="" style = "opacity: 1;">

    <div id="bgvid-wrapper" style ="position: absolute;">
      <video id="bgvid" preload="auto">
        <source type="video/webm">
        <source type="video/mp4">
      </video>
    </div> -->

    <header>
    <!-- overlay -->
    <div class="overlay-open"></div>
    <!-- START footer video-popup   -->
      <div id="video-popup" style="display: none;">
        <video id="video-content" width="100%" loop="loop" >
            <source src="/omega/media/tour/vo.webm" type="video/webm"></source>
            <source src="/omega/media/tour/vo.mp4" type="video/mp4"></source>
        </video>
        <span class="close-video-popup">&times;</span>
      </div>
    <!-- END footer video-popup   -->  
      
    <!-- START map-wrapper  -->           
    <div class="map-wrapper">
      <img src="/omega/images/icons/logo.png" alt="logo" class="secondary-logo" style="opacity: 1;">

      <div class="contacts-circle">
        <div class="contacts-wrap">
          <div class="contacts-title clearfix">
            <h1 class="left-title">Офис продаж</h1>
            <div class="right-title">
              Смотреть<br> фото
            </div>
          </div>
          <div class="address">
            Ул. Вознесенский спуск 28-30 <br>
            г. Киев
          </div>
          <div class="contacts-phones">
            <ul>
              <li><a href="tel:+380443334747">+38 (044) 333-47-47</a></li>
              <li><a href="tel:+380975054747">+38 (097) 505-47-47</a></li>
              <li><a href="tel:+380955054747">+38 (095) 505-47-47</a></li>
              <li><a href="tel:+380735054747">+38 (073) 505-47-47</a></li>
            </ul>
          </div>

          <div class="contacts-mail">
            <ul>
              <li><a href="mailto:sales@veles.place">sales@veles.place</a></li>
              <li><a href="mailto:info@veles.place">info@veles.place</a></li>
              
            </ul>
          </div>
        </div>
        
        <span class="close-contacts"><a href="/omega/">&times;</a></span>
      </div>
    </div>
    <!-- END map-wrapper   -->

    </header>


    <script>

// The following example creates complex markers to indicate beaches near
// Sydney, NSW, Australia. Note that the anchor is set to (0,32) to correspond
// to the base of the flagpole.

var map;

function initMap() {
   map = new google.maps.Map(document.getElementById('map'), {
    zoom:17,
    minZoom: 16,
    maxZoom: 17,
    center: {lat: 50.461977, lng: 30.505771},
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    // draggable: false,
   disableDefaultUI: true
  });

}



    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDaOl3h2KvfOakBeR7hhgvmbe8mijujIyM&callback=initMap"
        async defer></script>

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
      funcAnimation ( pathVidDay04, pathImgDay04, pathImgNight04, 1, 0, 0, 'block', 'none' ); 

      // записываем глобальные переменные для дня
      funcSessionStorageDay ();

     } else { //night
      console.log ("ночь");
      document.cookie = "daynight=";
      document.cookie = "daynight=night; expires=3600";

      // вызываем функцию замены ссылок и анимации для ночи
      funcAnimation ( pathVidNight04, pathImgDay04, pathImgNight04, 0, 1, 0, 'none', 'block' );

      // записываем глобальные переменные для ночи
      funcSessionStorageNight ();
     } 
  } else {
    // получить текущие куки и распарсить 

      var getCookie = document.cookie.split('; ');
      var daynightCookie = getCookie[0].split('=');

      if (daynightCookie[1] == "day") {

        // вызываем функцию замены ссылок и анимации для дня
        funcAnimation ( pathVidDay04, pathImgDay04, pathImgNight04, 1, 0, 0, 'block', 'none' ); 

        // записываем глобальные переменные для дня
        funcSessionStorageDay ();

      } else {

        // вызываем функцию замены ссылок и анимации для дня
        funcAnimation ( pathVidNight04, pathImgDay04, pathImgNight04, 0, 1, 0, 'none', 'block' );

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
  funcAnimation ( pathVidDay04, pathImgDay04, pathImgNight04, 1, 0, 1000, 'block', 'none' );

});


$('#bgvid-link-night').click(function(){

  // записываем глобальные переменные для ночи
  funcSessionStorageNight ();

  document.cookie = "daynight=";
  document.cookie = "daynight=night; expires=3600"

  // вызываем функцию замены ссылок и анимации для дня
  funcAnimation ( pathVidNight04, pathImgDay04, pathImgNight04, 0, 1, 1000, 'none', 'block' );

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


</div> <!--END pjax-global -->    



<?
require_once('../footer.php');
?>