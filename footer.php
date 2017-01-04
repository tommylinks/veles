    <footer class="footer-bg" style = "opacity: 0;">
      <div class="footer-info">
        <div class="left-footer-menu">
          <a href="#" class="video-popup footer-text">Видеоролик</a>
          <a href="#" class="video-popup icon-play hvr-grow"></a>
          <a href="#" class="footer-text">Вознесенский спуск 28-30</a>
        </div>
        <div class="social-icons">
          <ul>
            <li><a class="facebook hvr-grow" href="#"></a></li>
            <li><a class="vk hvr-grow" href="#"></a></li>
            <li><a class="instagram hvr-grow" href="#"></a></li>
          </ul>
        </div>
        <div class="right-footer-menu">
          <a href="#" class="footer-text">+38 (777) 777-77-77</a>
          <a href="#" class="icon-eye hvr-grow"></a>
          <a href="#" class="footer-text">Виртуальный тур</a>
        </div>
      </div>
    </footer>

  <audio id="music">
    <source src="/omega/media/sound/1.mp3" autoplay>
    Тег audio не поддерживается вашим браузером. 
  </audio>
    <script type="text/javascript">
      document.getElementById('music').play();
    </script>

 </div><!--END wrapper -->  


  <!-- Scrolling events + Pjax -->
  <script>
    //id`s & classes & links

  var vidId = document.getElementById('bgvid');  
    var wrapperId = document.getElementById('bgvid-wrapper');
    var elemId = document.getElementById('pjax-global');
    var linkId01 = document.getElementsByClassName('bgvid-link-01');
    var linkId02 = document.getElementsByClassName('bgvid-link-02');
    var linkId03 = document.getElementsByClassName('bgvid-link-03');
    var linkId04 = document.getElementsByClassName('bgvid-link-04');
    var linkId05 = document.getElementsByClassName('bgvid-link-05');
    var linkId06 = document.getElementsByClassName('bgvid-link-06');
    var linkId07 = document.getElementsByClassName('bgvid-link-07');
    var linkId08 = document.getElementsByClassName('bgvid-link-08');
    var linkId09 = document.getElementsByClassName('bgvid-link-09');
    var linkId10 = document.getElementsByClassName('bgvid-link-10');
    var linkId11 = document.getElementsByClassName('bgvid-link-11');

    var linkNav01 = '/omega/';
    var linkNav02 = '/omega/about/';
    var linkNav03 = '/omega/advantages/';
    var linkNav04 = '/omega/location/';
    var linkNav05 = '/omega/windowview/';
    var linkNav06 = '/omega/order/';
    var linkNav07 = '/omega/apartments/';
    var linkNav08 = '/omega/commercial/';
    var linkNav09 = '/omega/progress/';
    var linkNav10 = '/omega/documents/';
    var linkNav11 = '/omega/events/';
      

    //main pjax function
  
    function pjaxVideoContent (linkBgvid, linkNav, linkBgimg, linkBgNight) {          
        // returns duration current video 
        if (vidId === null || vidId.duration != vidId.duration ) {
        var durationVideomsLong = 3.5 * 1000 + 1750;
        var durationVideomsShort = 3.5 * 1000 + 150;
        var durationVideoms = 3.5 * 1000 + 350;
        var durationVideomsShortMinus = 3.5 * 1000 - 500;     
        } else {
        var durationVideomsLong = +vidId.duration * 1000 + 1750;
        var durationVideomsShort = +vidId.duration * 1000 + 150;
        var durationVideoms = +vidId.duration * 1000 + 350;
        var durationVideomsShortMinus = +vidId.duration * 1000 - 500;
        }

      console.log( "video not ready" );
      
      
        //preloader
        addProgressBar();
        
        

        $('#bgvid-wrapper').css('z-index', 101);
        $('#bgvid-wrapper').animate({opacity: 1,}, 1000);
        $('#bgvid').attr('src', linkBgvid);
        

        setTimeout (function () { 
            $('#bgimg').attr('src', linkBgimg);
            $('#bgimg-back').attr('src', linkBgNight);
           }, durationVideomsShortMinus); 
           
           
           setTimeout (function () { 
            console.log( "video ready" );              

            //play video
            $('#bgvid')[0].play();
            
            setTimeout (function () { 
              $('#bgvid-wrapper').css('opacity', 0);
            }, durationVideomsLong);
              
              setTimeout (function () { 

              $.pjax({
                type       : 'POST',
                url        : linkNav,
                container  : '#pjax-global',
                fragment   : '#pjax-global',
                data       : {},
                push       : true,
                replace    : true,
                "scrollTo" : false
                 });
              
              $('#bgimg').attr('src', linkBgimg);
              $('#bgimg-back').attr('src', linkBgNight);
              $('#bgvid-wrapper').animate({opacity: 0}, 0); 
              
             } , durationVideoms);
         
         }, durationContentLoads);
         
      
    } 
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


    <!-- Click events + Pjax  --> 
     <script>
// функция анимации при нажатии на ссылки .bgvid-link-01 и т.д.
var menuAnimation = function () {
    $(".main-menu").animate({
      opacity: 0,
      left: "-100",
    }, 500);
    $(".main-menu, .overlay").fadeOut(500);
    $(".footer-bg ").css('background','rgba(0,0,0,0.2)');
    $(".main-icons-kit").fadeIn(500);
/*    $(".icon-bio, .icon-techno, .daynight, .sound-btn, .snt-prev, .one").addClass('hide-main-icon-left');
    $(".icon-socio, .icon-person, .icon-phone, .snt-next, .two").addClass('hide-main-icon-right');
    $(".snt-start").addClass('hide-main-icon-top');        
    $(".main-logo, .documents-popup, .main-menu-btn, .secondary-logo, .mouse-move, .toggle-controls, .close-windowview, .buy-sections, .veles-widget, .icon-socio, .icon-person, .icon-phone, .choose-section-wrapper").animate({
      opacity: 0
    }, 300);*/
};

      $('#pjax-global').on('click', '.bgvid-link-01', function () {
    var linkBgvid11 = sessionStorage.getItem('linkBgvid11');
    var linkBgimg01 = sessionStorage.getItem('linkBgimg01'); 
        menuAnimation ();
        setTimeout(function() { pjaxVideoContent(linkBgvid11, linkNav01, linkBgimg01, pathImgNight01); }, 500); 
      });

      $('#pjax-global').on('click', '.bgvid-link-02', function () {
    var linkBgvid01 = sessionStorage.getItem('linkBgvid01');
    var linkBgimg02 = sessionStorage.getItem('linkBgimg02');
        menuAnimation ();
        setTimeout(function() { pjaxVideoContent(linkBgvid01, linkNav02, linkBgimg02, pathImgNight02); }, 500); 
      });

      $('#pjax-global').on('click', '.bgvid-link-03', function () {
    var linkBgvid02 = sessionStorage.getItem('linkBgvid02');
    var linkBgimg03 = sessionStorage.getItem('linkBgimg03');
        menuAnimation ();
        setTimeout(function() { pjaxVideoContent(linkBgvid02, linkNav03, linkBgimg03, pathImgNight03); }, 500); 
      });

      $('#pjax-global').on('click', '.bgvid-link-04', function () {
    var linkBgvid03 = sessionStorage.getItem('linkBgvid03');
    var linkBgimg04 = sessionStorage.getItem('linkBgimg04');
        menuAnimation ();
        setTimeout(function() { pjaxVideoContent(linkBgvid03, linkNav04, linkBgimg04, pathImgNight04); }, 500); 
      });

      $('#pjax-global').on('click', '.bgvid-link-05', function () {
    var linkBgvid04 = sessionStorage.getItem('linkBgvid04');
    var linkBgimg05 = sessionStorage.getItem('linkBgimg05');
        menuAnimation ();
        setTimeout(function() { pjaxVideoContent(linkBgvid04, linkNav05, linkBgimg05, pathImgNight05); }, 500); 
      });

      $('#pjax-global').on('click', '.bgvid-link-06', function () {
    var linkBgvid05 = sessionStorage.getItem('linkBgvid05');
    var linkBgimg06 = sessionStorage.getItem('linkBgimg06');
        menuAnimation ();
        setTimeout(function() { pjaxVideoContent(linkBgvid05, linkNav06, linkBgimg06, pathImgNight06); }, 500); 
      });

      $('#pjax-global').on('click', '.bgvid-link-07', function () {
    var linkBgvid06 = sessionStorage.getItem('linkBgvid06');
    var linkBgimg07 = sessionStorage.getItem('linkBgimg07');
        menuAnimation ();
        setTimeout(function() { pjaxVideoContent(linkBgvid06, linkNav07, linkBgimg07, pathImgNight07); }, 500); 
      });

      $('#pjax-global').on('click', '.bgvid-link-08', function () {
    var linkBgvid07 = sessionStorage.getItem('linkBgvid07');
    var linkBgimg08 = sessionStorage.getItem('linkBgimg08');
        menuAnimation ();
        setTimeout(function() { pjaxVideoContent(linkBgvid07, linkNav08, linkBgimg08, pathImgNight08); }, 500); 
      });

      $('#pjax-global').on('click', '.bgvid-link-09', function () {
    var linkBgvid08 = sessionStorage.getItem('linkBgvid08');
    var linkBgimg09 = sessionStorage.getItem('linkBgimg09');
        menuAnimation ();
        setTimeout(function() { pjaxVideoContent(linkBgvid08, linkNav09, linkBgimg09, pathImgNight09); }, 500); 
      });

      $('#pjax-global').on('click', '.bgvid-link-10', function () {
    var linkBgvid09 = sessionStorage.getItem('linkBgvid09');
    var linkBgimg10 = sessionStorage.getItem('linkBgimg10');
        menuAnimation ();
        setTimeout(function() { pjaxVideoContent(linkBgvid09, linkNav10, linkBgimg10, pathImgNight10); }, 500); 
      });

      $('#pjax-global').on('click', '.bgvid-link-11', function () {
    var linkBgvid10 = sessionStorage.getItem('linkBgvid10');
    var linkBgimg11 = sessionStorage.getItem('linkBgimg11');
        menuAnimation ();
        setTimeout(function() { pjaxVideoContent(linkBgvid10, linkNav11, linkBgimg11, pathImgNight11); }, 500); 
      });

    </script>




<!-- popup videoperehod -->


</body>
</html>