    <footer class="footer-bg">
      <div class="footer-info">
        <div class="left-footer-menu">
          <a href="#" class="footer-text">Видеоролик</a>
          <a href="#" class="icon-play"></a>
          <a href="#" class="footer-text">Вознесенский спуск 28-30</a>
        </div>
        <div class="social-icons">
          <ul>
            <li><a class="facebook" href="#"></a></li>
            <li><a class="vk" href="#"></a></li>
            <li><a class="instagram" href="#"></a></li>
          </ul>
        </div>
        <div class="right-footer-menu">
          <a href="#" class="footer-text">+38 (777) 777-77-77</a>
          <a href="#" class="icon-eye"></a>
          <a href="#" class="footer-text">Виртуальный тур</a>
        </div>
      </div>
    </footer>
 </div><!--END wrapper -->  

  <!-- floating-menu tooltips-->
  <script type="text/javascript" src="<?php echo $template_path; ?>js/floating-menu.js"></script>
  <script type="text/javascript" src="<?php echo $template_path; ?>js/howler.js"></script>

  <!-- init music -->
  <script>
  	var sound = new Howl({
	  src: ['/beta/1.mp3']
	});

	sound.play();

	$('.sound-btn').click(function() {
		if($('.sound-btn').hasClass('pause')) {
			$('.sound-btn').removeClass('pause');
      $('.sound-btn').width('60');
      sound.play();
		} else {
      $('.sound-btn').addClass('pause');
      $('.sound-btn').width(30);
      sound.pause();
    }

	});
	
  </script>
  <!--END init music -->

  <!-- floating tooltips -->
  <script type="text/javascript">
    $.floatingMenu({
      selector: '.main-icon[data-action="show-actions-menu"]',
      items: [
        {
            icon : 'ion-social-youtube',
            title : 'Youtube',
            action : 'https://youtube.com/',
            blank : true, // open url in new tab (optional, defaults to false)
            close : false, // dont close the menu after and action has happened (optional, defaults to true)
        },
        {
            icon : 'ion-social-skype',
            title : 'google',
            action : 'https://google.com/',
            close : false, // no effect since there is a redirect (optional)
        },
        {
            icon : 'ion-social-tumblr',
            title : 'Insert',
            action : function(event) {
                alert('insert');
            },
            blank : true, // no effect since action is not a url (optional, defaults to false)
            close : false, // dont close the menu after and action has happened (optional, defaults to true)
        },
        {
            icon : 'ion-social-javascript',
            title : 'Edit',
            action : function(event) 
            {
                alert('edit');
            },
        },
        {
            icon : 'ion-social-chrome',
            title : 'Remove',
            action : function(event) {
                alert('remove');
            },
        },
        {
            icon : '',
            title : 'Подробнее...',
            action : function(event) {
                alert('remove');
            },
        },
      ]
    });

  </script>
   <!--END floating tooltips -->



<!-- DENIS_NEW -->
<!-- Scrolling events + Pjax -->

<script>

  //id`s & classes & links
  var vidId = document.getElementById('bgvid');
  var wrapperId = document.getElementById('bgvid-wrapper');
  var elemId = document.getElementById('pjax-global');
  var linkId01 = document.getElementById('bgvid-link-01');
  var linkId02 = document.getElementById('bgvid-link-02');
  var linkNav01 = '/beta/';
  var linkNav02 = '/beta/about/';


  // condition for path & info
  var info = 0;
  var path = '<? echo $_SERVER[REQUEST_URI] ?>';
  if (path === linkNav01) {info = 0}  
  if (path === linkNav02) {info = 40000}  

  //function

  function pjaxVideoContent (linkBgvid, linkNav, infoEnd) {


    // returns duration current video 
    var durationVideoms = +vidId.duration * 1000;

    $('#bgvid-wrapper').css('display', 'block');
    $('#bgvid-wrapper').animate({opacity: 1,}, 200);
    
    
    //play video
  
    $('#bgvid').get(0).play();    

    setTimeout (function () { 

      $.pjax({
        type       : 'POST',
        url        : linkNav,
        container  : '#pjax-global',
        fragment   : '#pjax-global',
        data       : {},
        push       : true,
        replace    : false,
        "scrollTo" : false
         });

         //$('#bgimg').attr('src', linkBgimg);
         $('#bgvid-wrapper').animate({opacity: 0,}, 200); 
         info = +infoEnd;

    } , durationVideoms);

  } 

  // scrolling events
    if (elemId.addEventListener) {
      if ('onwheel' in document) {
        // IE9+, FF17+
        elemId.addEventListener("wheel", onWheel);
      } else if ('onmousewheel' in document) {
        // устаревший вариант события
        elemId.addEventListener("mousewheel", onWheel);
      } else {
        // Firefox < 17
        elemId.addEventListener("MozMousePixelScroll", onWheel);
      }
    } else { // IE8-
      elemId.attachEvent("onmousewheel", onWheel);
    }

    // Это решение предусматривает поддержку IE8-
    function onWheel(e) {
      e = e || window.event;

      // deltaY, detail содержат пиксели
      // wheelDelta не дает возможность узнать количество пикселей
      // onwheel || MozMousePixelScroll || onmousewheel
      var delta = e.deltaY || e.detail || e.wheelDelta;

    //debugger for delta different scroll speed
      if (delta < 0) {
        delta = -100;
      } else if (delta > 0) {
        delta = 100;
      } else {
        delta = 100;
      }



      info = +info + delta;

      e.preventDefault ? e.preventDefault() : (e.returnValue = false);
      
      // conditions for scrolling

      if (info < 0) {

        info = 0;

      }
     
      if (info === 500 || info === 600 || info === 700 || info === 800 || info === 900) {

        info = 20000;
        
        pjaxVideoContent(linkBgvid02, linkNav02, 40000);    
          
      }

      if (info === 39500 || info === 39400 || info === 39300 || info === 39200 || info === 39100) {

        info = 20000;

        pjaxVideoContent(linkBgvid01, linkNav01, 0);
          
      }
    
      if (info > 40000) {

        info = 40000;

      }

      console.log (info);
    }

 </script>
  

  
   <!-- show main-menu DENIS-->
  <script>
    $('#pjax-global').on('click', '.main-menu-btn', function () {
      $(".footer-bg ").css('background','rgba(0,0,0,0)');

      //main icons hide animation
      $(".main-logo").animate({
        opacity: 0
      }, 100, function() {
        //
      });

      // left
      $(".icon-bio, .icon-techno, .daynight, .sound-btn").toggleClass('hide-main-icon-left');

      //right
      $(".icon-socio, .icon-person, .icon-phone").toggleClass('hide-main-icon-right');

      $(".main-menu, .overlay").fadeIn(500);
      $(".main-menu").animate({
        opacity: 1,
        left: "0",
      }, 500, function() {
        //
      });
    });


    $('#pjax-global').on('click', '.close-main-menu, .overlay', function () {
      $(".main-menu").animate({
        opacity: 0,
        left: "-100",
      }, 500, function() {
        //
      });
      $(".main-menu, .overlay").fadeOut(500);
      $(".footer-bg ").css('background','rgba(0,0,0,0.5)');
      
      //main icons show animation

      $(".main-logo").animate({
        opacity: 1
      }, 700, function() {
        //
      });

      //left
      $(".icon-bio, .icon-techno, .daynight, .sound-btn").toggleClass('hide-main-icon-left');

      //right
      $(".icon-socio, .icon-person, .icon-phone").toggleClass('hide-main-icon-right');

    });
  </script>
   





<!-- Click events + Pjax  --> 
 <script>

  $('#pjax-global').on('click', '#bgvid-link-01', function () {

    info = 20000;


    $(".main-menu").animate({
        opacity: 0,
        left: "-100",
      }, 500);
      $(".main-menu, .overlay").fadeOut(500);
      $(".footer-bg ").css('background','rgba(0,0,0,0.6)');
      $(".main-icons-kit").fadeIn(500);

    setTimeout(function() { pjaxVideoContent(linkBgvid01, linkNav01, 0) }, 500); 

  });

  $('#pjax-global').on('click', '#bgvid-link-02', function () {

    info = 20000;

    $(".main-menu").animate({
        opacity: 0,
        left: "-100",
      }, 500);
      $(".main-menu, .overlay").fadeOut(500);
      $(".footer-bg ").css('background','rgba(0,0,0,0.6)');
      $(".main-icons-kit").fadeIn(500);

    setTimeout(function() { pjaxVideoContent(linkBgvid02, linkNav02, 40000) }, 500); 

  });

  </script>

<!-- //DENIS_NEW -->
  
  
  
  
  
  
    <!-- show main-menu DIMA-->
  <script>
   /* $(".main-menu-btn").click( function () {
      $(".footer-bg").css('background','transparent');
      $(".main-icons-kit").fadeOut(500);
      $(".main-menu, .overlay").fadeIn(500);
      $(".main-menu").animate({
        opacity: 1,
        left: "0",
      }, 500, function() {
        // Animation complete.
      });
    });

    $(".close-main-menu, .overlay").click( function () {
      $(".main-menu").animate({
        opacity: 0,
        left: "-100",
      }, 500, function() {
        // Animation complete.
      });
      $(".main-menu, .overlay").fadeOut(500);
      $(".footer-bg ").css('background','rgba(0,0,0,0.6)');
      $(".main-icons-kit").fadeIn(1000);
    });*/
  </script>
  

  
  



</body>
</html>