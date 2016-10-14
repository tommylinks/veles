<?php 
// ДЕНЬ / НОЧЬ
$daytime = (int) date('H');
 if ($daytime <= 17 and $daytime >= 8) { 
 	//echo "Наступает день. Город просыпается.";
 } else { 
 	//echo "Наступает ночь. Просыпается мафия.";
 }

// meta tags
$title = "INDEX";
$description = "DESCRIPTION";

require_once('header.php');
?> 



<body>
  <div class="wrapper">
    <!-- DENIS_NEW -->
    <div id = 'pjax-global'>
      <img id='bgimg-back' class='main-bg' src='<? echo $daynight_back;?>'>
      <img id='bgimg' class='main-bg' src='<? echo $daynight;?>'>

        <div id='bgvid-wrapper' style ='display:none;'>
          <video id='bgvid' preload='auto'>
            <source type='video/webm'>
          </video>
        </div>
  <!-- //DENIS_NEW -->    
    <header>
      <button class="main-menu-btn hvr-pulse">Меню</button>
      <div class="main-icons-kit">
        <div class="main-icon main-logo">
          <img src="images/icons/logo.png" alt="logo Velec Place" />
        </div>
        <div class="main-icon icon-bio" data-action="show-actions-menu">
          <figure>
            <img class="hvr-pulse" class="hvr-pulse" src="images/icons/bio.png" alt="icon bio energy" />
            <figcaption>Био энергия</figcaption>
          </figure>
        </div>
        <div class="main-icon icon-socio" data-action="show-actions-menu">	
          <figure>
            <img class="hvr-pulse" src="images/icons/socio.png" alt="icon socio energy" />
            <figcaption>Социо энергия</figcaption>
          </figure>
        </div>
        <div class="main-icon icon-techno" data-action="show-actions-menu">
          <figure>
            <img class="hvr-pulse" src="images/icons/techno.png" alt="icon techno energy" />
            <figcaption>Техно энергия</figcaption>
          </figure>
        </div>
        <div class="main-icon icon-person" data-action="show-actions-menu">
          <figure>
            <img class="hvr-pulse" src="images/icons/person.png" alt="icon person energy" />
            <figcaption>Энергия личности</figcaption>
          </figure>
        </div>
        <!-- DENIS_NEW -->
            <div class='main-icon daynight' style='
                  top: 50%;
                  left: 10%;
                  transform: translateY(-50%);
                  width: 70px;
                  height: 70px;
                  border-radius: 50%;
                  -webkit-box-shadow: 0px 0px 39px -10px rgba(0, 0, 0, 0.75);
                  -moz-box-shadow: 0px 0px 39px -10px rgba(0, 0, 0, 0.75);
                  box-shadow: 0px 0px 39px -10px rgba(0, 0, 0, 0.75);'>

                <img id='bgvid-link-day' class='snt-link' src = '<? echo $day_icon; ?>'  style = '<? echo $day_icon_style;?>position: absolute;' />
                <img id='bgvid-link-night' class='snt-link' src = '<? echo $night_icon; ?>'  style = '<? echo $night_icon_style;?> position: absolute;' />     
            </div>
            <!-- //DENIS_NEW -->
        <div class="main-icon icon-phone">
        </div>
      </div><!--END main-icons-kit -->
      <button class="sound-btn"></button>
    </header>
 <!-- DENIS_NEW -->
    <script>

  //   pathes
  var pathVidNight01 = '/beta/media/night/01.webm';
  var pathImgNight01 = '/beta/images/night/01.jpg';
  var pathVidNight02 = '/beta/media/night/01rev.webm';
  var pathImgNight02 = '/beta/images/night/02.jpg';
  
  var pathVidDay01 = '/beta/media/day/01.webm';
  var pathImgDay01 = '/beta/images/day/01.jpg';
  var pathVidDay02 = '/beta/media/day/01rev.webm';
  var pathImgDay02 = '/beta/images/day/02.jpg';
  
  var pathIconDay = '/beta/images/icons/day.png';
  var pathIconNight = '/beta/images/icons/night.png';
  
  
  // протестировать данные условия
if (linkBgvid01 === undefined){linkBgvid01 = sessionStorage.setItem('linkBgvid01', pathVidNight01)}
if (linkBgimg01 === undefined){linkBgimg01 = sessionStorage.setItem('linkBgimg01', pathImgNight01)} 
if (linkBgvid02 === undefined){linkBgvid02 = sessionStorage.setItem('linkBgvid02', pathVidNight02)} 
if (linkBgimg02 === undefined){linkBgimg02 = sessionStorage.setItem('linkBgimg02', pathImgNight02)}   
  // протестировать данные условия


$('#bgvid-link-day').click(function(){

  sessionStorage.clear();
  var linkBgvid01 = sessionStorage.setItem('linkBgvid01', pathVidDay01);
  var linkBgimg01 = sessionStorage.setItem('linkBgimg01', pathImgDay01);
  var linkBgvid02 = sessionStorage.setItem('linkBgvid02', pathVidDay02);
  var linkBgimg02 = sessionStorage.setItem('linkBgimg02', pathImgDay02);

  
    $('#bgvid').attr('src', pathVidDay01);
    $('#bgimg').attr('src', pathImgNight01);
    $('#bgimg-back').attr('src', pathImgDay01);
    $('#bgimg').animate({ opacity: 0 }, 1000);
    $('#bgimg_back').animate({ opacity: 0 }, 1000);
    $('#bgvid-link-night').attr('src', pathIconNight);
    $('#bgvid-link-day').attr('src', pathIconDay);
    $('#bgvid-link-night').css('display','block');
    $('#bgvid-link-day').css('display','none');

});


$('#bgvid-link-night').click(function(){

  sessionStorage.clear();
  var linkBgvid01 = sessionStorage.setItem('linkBgvid01', pathVidNight01);
  var linkBgimg01 = sessionStorage.setItem('linkBgimg01', pathImgNight01);
  var linkBgvid02 = sessionStorage.setItem('linkBgvid02', pathVidNight02);
  var linkBgimg02 = sessionStorage.setItem('linkBgimg02', pathImgNight02);

    $('#bgvid').attr('src', pathVidNight01);
    $('#bgimg').attr('src', pathImgNight01);
    $('#bgimg-back').attr('src', pathImgDay01);
    $('#bgimg').animate({ opacity: 1 }, 1000);
    $('#bgvid-link-night').attr('src', pathIconNight);
    $('#bgvid-link-day').attr('src', pathIconDay);
    $('#bgvid-link-night').css('display','none');
    $('#bgvid-link-day').css('display','block');

});

  var linkBgvid01 = sessionStorage.getItem('linkBgvid01');
  var linkBgimg01 = sessionStorage.getItem('linkBgimg01');
  var linkBgvid02 = sessionStorage.getItem('linkBgvid02');
  var linkBgimg02 = sessionStorage.getItem('linkBgimg02');





/*
  if (linkBgvid01 === undefined) {
    $('#bgvid').attr('src', pathVidNight01)  
  } else {
    $('#bgvid').attr('src', linkBgvid01)
  }


  if (linkBgimg01 === undefined) {
    $('#bgimg').attr('src', pathImgNight01)
  }
  else {
    $('#bgimg').attr('src', linkBgimg01)
  }
*/

  $('#bgvid-link-01').css('display','none');
  $('#bgvid-link-02').css('display','block');
  var info = 0;
</script>

</div> <!--END pjax-global -->
  <!-- //DENIS_NEW -->

<?
require_once('footer.php');
?>