<?php 

// meta tags
$title = "infrastructure"; ///---
$description = "DESCRIPTION";
$manifest = "main.manifest";

require_once('../../header.php');
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

      .toogle-panel {
        position: absolute;
        top:50%;
        right: 30px;
        z-index: 5;
        padding: 5px;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        transform: translateY(-50%);
      }

      .toogle-panel input{
        margin: 5px;
        display: block;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: #ffd139;
        border: 3px solid #fff;
        padding: 3px;
        outline: none;
        cursor: pointer;

      }

    </style>

<body>
<div class="wrapper">
<!-- preloader  -->
<script>
	preloader(true, 'white', 'red');	
</script><!--END preloader  -->
 


<div class="toogle-panel">
              <input onclick="showBars();" type=button value="B">
              <input onclick="showRestaurants();" type=button value="R">
            </div>
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
    <div class="overlay"></div>
<<<<<<< HEAD

    <span  class="close-home"><a href='/omega/'>&times;</a></span>

    <!-- START footer video-popup   -->
      <div id="video-popup" style="display: none;">
        <video id="video-content" width="100%" loop="loop" >
            <source src="/omega/media/tour/vo.webm" type="video/webm"></source>
            <source src="/omega/media/tour/vo.mp4" type="video/mp4"></source>
=======
    <!-- START footer video-popup   -->
      <div id="video-popup" style="display: none;">
        <video id="video-content" width="100%" loop="loop" >
            <source src="/omega/media/tour/vo.mp4" type="video/mp4"></source>
            <source src="/omega/media/tour/vo.webm" type="video/webm"></source>
>>>>>>> origin/gh-pages
        </video>
        <span class="close-video-popup">&times;</span>
      </div>
    <!-- END footer video-popup   -->  
      
        <!-- START map-wrapper  -->           
        <div class="map-wrapper">
          <img src="/omega/images/icons/logo.png" alt="logo" class="secondary-logo" style="opacity: 1;">
            
            

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

  setMarkers(map);

}

// Data for the markers consisting of a name, a LatLng and a zIndex for the
// order in which these markers should display on top of each other.
var places = [
  ['bar','Bondi Beach', 50.461978, 30.505778, 2,'img/1.png'],
  ['bar','Coogee Beach', 50.461281, 30.505778, 5,'img/1.png'],
  ['bar','Cronulla Beach', 50.461281, 30.504278, 3,'img/1.png'],
  ['restaurants','shop 1', 50.460181, 30.504278, 4,'img/2.png'],
  ['restaurants','shop 2', 50.463181, 30.504278, 5,'img/3.png'],

];

var markers = [];



function setMarkers(map) {
  // Adds markers to the map.

  // Marker sizes are expressed as a Size of X,Y where the origin of the image
  // (0,0) is located in the top left of the image.


  markers = places.map(function(place){
    var marker = new google.maps.Marker({
      position: {lat: place[2], lng: place[3]},
      map: map,
      title: place[1],
      zIndex: place[4],
      category: place[0],
      icon: place[5],
    });



    var infowindow = new google.maps.InfoWindow({
      content: place[1]
    });

  

    marker.addListener('mouseover', function() {
      infowindow.open(map,marker);
    });

    marker.addListener('mouseout', function() {
      infowindow.close();
    });


    // marker.addListener('click', function() {
    //   infowindow.open(map,marker);
    // });

    return marker;
  });




// marker.addListener('click', function() {
//   infowindow.open(map, marker);
// });

}

function showBars() {
  markers.forEach(function(marker){

    if (marker.category === 'bar') {
      marker.setMap(map);
    } else {
      marker.setMap(null);
    }
  });
}

function showRestaurants() {
  markers.forEach(function(marker){

    if (marker.category === 'restaurants') {
      marker.setMap(map);
    } else {
      marker.setMap(null);
    }
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
require_once('../../footer.php');
?>