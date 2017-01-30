<?php 

// meta tags
$title = "Online"; ///---
$description = "DESCRIPTION";
$manifest = "main.manifest";

require_once('../header.php');

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

    <div id="bgvid-wrapper" style ="position: absolute;">
      <video id="bgvid" preload="auto">
        <source type="video/webm">
        <source type="video/mp4">
      </video>
    </div>

    <header>
      <span class="bgvid-link-01">
        <img src="/omega/images/icons/logo.png" alt="logo" class="secondary-logo" style="opacity: 0;">
      </span>
      <button class="main-menu-btn secondary-p" style = "opacity: 0;">Меню</button>

      <!-- START documents-popup   -->           
        <div class="documents-popup">
          <div class="doc-popup-header">
            <div class="row">
              <div class="col-md-4 col-sm-4 col-xs-12">
                <span class="bgvid-link-15">Готовность комплексa</span>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-12">
                  <span class="hover">Строительство <b>Online</b></span>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <span class="bgvid-link-16">Дневник строительства</span>
              </div>
            </div>
          </div>
          <div  class="doc-popup-wrap">
              <br><br>
            <iframe width="100%" height="574px" src="https://www.youtube.com/embed/3he1OpsBRRg?rel=0&autoplay=1&loop=1&playlist=3he1OpsBRRg&controls=0&showinfo=0" frameborder="0" allowfullscreen></iframe>

          </div>

          <span class="close-documents-popup bgvid-link-15"><a href='#'>&times;</a></span>
        </div>

        <!-- END documents-popup   -->

      <button class="sound-btn secondary-p hvr-grow hide-main-icon-left" style="opacity: 0"></button>
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
   <!-- main menu -->
  <div class="main-menu">

    <? include '../include/menu.php'; ?>

  </div>

  <div class="main-icon daynight secondary-p">
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
      funcAnimation ( pathVidDay09, pathImgDay09, pathImgNight09, 1, 0, 0, 'block', 'none' ); 

      // записываем глобальные переменные для дня
      funcSessionStorageDay ();

     } else { //night
      console.log ("ночь");
      document.cookie = "daynight=";
      document.cookie = "daynight=night; expires=3600";

      // вызываем функцию замены ссылок и анимации для ночи
      funcAnimation ( pathVidNight09, pathImgDay09, pathImgNight09, 0, 1, 0, 'none', 'block' );

      // записываем глобальные переменные для ночи
      funcSessionStorageNight ();
     } 
  } else {
    // получить текущие куки и распарсить 

      var getCookie = document.cookie.split('; ');
      var daynightCookie = getCookie[0].split('=');

      if (daynightCookie[1] == "day") {

        // вызываем функцию замены ссылок и анимации для дня
        funcAnimation ( pathVidDay09, pathImgDay09, pathImgNight09, 1, 0, 0, 'block', 'none' ); 

        // записываем глобальные переменные для дня
        funcSessionStorageDay ();

      } else {

        // вызываем функцию замены ссылок и анимации для дня
        funcAnimation ( pathVidNight09, pathImgDay09, pathImgNight09, 0, 1, 0, 'none', 'block' );

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
  funcAnimation ( pathVidDay09, pathImgDay09, pathImgNight09, 1, 0, 1000, 'block', 'none' );

});


$('#bgvid-link-night').click(function(){

  // записываем глобальные переменные для ночи
  funcSessionStorageNight ();

  document.cookie = "daynight=";
  document.cookie = "daynight=night; expires=3600"

  // вызываем функцию замены ссылок и анимации для дня
  funcAnimation ( pathVidNight09, pathImgDay09, pathImgNight09, 0, 1, 1000, 'none', 'block' );

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

<script type="text/javascript">

var buildProgress = "<? echo $build_progress; ?>";


(function(){
  var val = parseInt(buildProgress); 
  var $circle = $('#svg #bar');
  
  if (isNaN(val)) {
   val = 100; 
  }
  else{
    var r = $circle.attr('r');
    var c = Math.PI*(r*2);
   
    if (val < 0) { val = 0;}
    if (val > 100) { val = 100;}
    
    var pct = ((100-val)/100)*c;
    
    $circle.css({ strokeDashoffset: pct});
    
    $('#cont').attr('data-pct',val);
  }
})();
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