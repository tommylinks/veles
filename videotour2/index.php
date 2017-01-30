<?php 

// meta tags
$title = "videotour"; ///---
$description = "DESCRIPTION";
$manifest = "videotour.day.manifest";

require_once('../header.php');
?> 
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
<script src="3deye.min.js"></script>
<body>
<div class="wrapper">
<!-- preloader  -->
<script>
  preloader(true, 'white', 'red');  
</script><!--END preloader  -->
 
  <div id = "pjax-global" style = "opacity: 0;">  
    
	<div id="videotour" style="opacity: 0;"></div>
	    <img id="bgimg" class="img-bg bgimg-default" style = "" src="1.jpg"/>
	    <img id="bgimg-back" class="img-bg bgimg-default" style = "opacity: 1;" src="1.jpg" />
    


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

        <span  class="close-home"><a href='/omega/'></a></span>

        <div class="toggle-controls" style="display: none;">
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



           @keyframes arrow-left {
               0%   {transform: translateX(0px)}
               50%  {transform: translateX(600px)}
               100% {transform: translateX(0px);}
           }

           @keyframes arrow-right {
               0%   {transform: translateX(0px)}
               50%  {transform: translateX(-600px)}
               100% {transform: translateX(0px);}
           }




           #arrow-left-move{
               animation: arrow-left 1.5s infinite;
           }


           #arrow-right-move{
               animation: arrow-right 1.5s infinite;
           }

           ]]>
          </style>
         </defs>
         <g id="Слой_x0020_1">
             <path class="fil0 str0" d="M3612 3120l405 -325 690 -137 -9 580 -214 208 -30 312c11,96 0,155 48,259 24,39 41,63 78,87 80,63 128,89 121,87l3 570 -1219 -15 -22 -788 27 -390 122 -448 0 0 0 0z"/>
             <path class="fil0" d="M5754 3000c-229,-270 -580,-407 -1044,-407 -461,0 -812,137 -1043,407 -233,271 -268,589 -268,756l0 1921c0,166 35,485 268,758 229,270 579,407 1043,407 462,0 812,-137 1044,-407 231,-271 267,-592 267,-756l0 -1921c0,-166 -35,-485 -267,-758zm-1044 1074c-95,0 -172,-78 -172,-176l0 -372c0,-96 78,-172 172,-172 96,0 176,76 176,172l-2 372c0,98 -78,176 -173,176l0 0zm1172 1605c0,170 -57,1026 -1172,1026 -1117,0 -1174,-856 -1174,-1028l0 -1921c0,-166 57,-991 1106,-1026l0 494c-137,33 -241,154 -241,303l0 372c0,148 101,274 241,303l0 553 0 13c0,2 0,6 0,6 9,83 137,80 137,-6l0 -566c140,-30 244,-155 244,-303l0 -372c0,-146 -104,-270 -244,-303l0 -494c1054,35 1107,860 1107,1028l-3 1921 0 0 0 0z"/>

             <path class="fil0" d="M5331 4717l1 0c378,0 685,8 685,18l0 87c0,10 -307,18 -685,18l-1 0c-378,0 -685,-8 -685,-18l0 -87c0,-10 307,-18 685,-18z"/>
             <path class="fil0" d="M4089 4717l1 0c378,0 685,8 685,18l0 87c0,10 -307,18 -685,18l-1 0c-378,0 -685,-8 -685,-18l0 -87c0,-10 307,-18 685,-18z"/>
             <path id="arrow-left-move" class="fil0 str1" d="M26 4722l612 616c15,15 39,15 54,0 15,-15 15,-39 0,-51l-588 -588 588 -588c15,-16 15,-39 0,-54 -9,-7 -18,-9 -26,-9 -9,0 -18,2 -27,9l-612 615c-15,16 -15,39 0,51l0 0z"/>
             <path id="arrow-right-move" class="fil1 str1" d="M9375 4728l-616 616c-15,15 -39,15 -51,0 -15,-15 -15,-39 0,-50l586 -589 -586 -588c-15,-15 -15,-39 0,-54 7,-6 16,-9 24,-9 9,0 22,3 27,9l616 616c15,15 15,39 0,50l0 0z"/>
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
  <div class="main-menu">

    <? include '../include/menu.php'; ?>

  </div>

  <div class="main-icon daynight secondary-p" style="display: none;">
    <a href = '/omega/windowview/night/'><img id="" class="snt-link" src ="/omega/images/icons/night.png" style="position: absolute;" /></a>
  </div>



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

<!--3d spinning -->
<script>
	
$(document).ready(function(){

	$("#videotour").vc3dEye({
	imagePath:"/omega/videotour2/", // the location where you’ve put the images.
	totalImages:299, // the number of images you have.
	imageExtension:"jpg" // the extension of the images. Make sure all the images have same extension.
	});

	document.addEventListener("mousedown", function(){$('.mouse-move').hide();});
});



</script>
</div> <!--END pjax-global -->    

<?
require_once('../footer.php');
?>