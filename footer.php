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


  <!-- init music -->
  <script>
/*  	var sound = new Howl({
	  src: ['/zetta/1.mp3']
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
	*/
  </script>
  <!--END init music -->

  <!-- preloader -->

  <script type="text/javascript">$(window).on('load', function () {
    var $preloader = $('#p_prldr'),
          $svg_anm   = $preloader.find('.svg_anm');
      $svg_anm.fadeOut();
      $preloader.delay(500).fadeOut('slow');
    });
  </script>

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

   
   
   
<!-- Scrolling events + Pjax -->

<script>
console.log('linkBgvid01aaa2', linkBgvid01);
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

  var linkNav01 = '/zetta/';
  var linkNav02 = '/zetta/about/';
  var linkNav03 = '/zetta/advantages/';
  var linkNav04 = '/zetta/location/';
  var linkNav05 = '/zetta/windowview/';
  var linkNav06 = '/zetta/progress/';
  var linkNav07 = '/zetta/order/';
  var linkNav08 = '/zetta/apartments/';
  var linkNav09 = '/zetta/commercial/';
  var linkNav10 = '/zetta/documents/';
  var linkNav11 = '/zetta/events/';




  //function

  function pjaxVideoContent (linkBgvid, linkNav, linkBgimg, linkBgNight) {

    // returns duration current video 
    var durationVideoms = +vidId.duration * 1000 + 200;

    $('#bgvid-wrapper').css('display', 'block');
    $('#bgvid-wrapper').animate({opacity: 1,}, 700);
    console.log (linkBgvid);
    $('#bgvid').attr('src', linkBgvid);
    
    
    setTimeout (function () { 
    $('#bgimg').attr('src', linkBgimg);
    $('#bgimg-back').attr('src', linkBgNight);
   }, 500);

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

         $('#bgimg').attr('src', linkBgimg);
         $('#bgimg-back').attr('src', linkBgNight);
         $('#bgvid-wrapper').animate({opacity: 0,}, 700); 

    } , durationVideoms);

  } 
 </script>
  

  






<!-- Click events + Pjax  --> 
 <script>
console.log('linkBgvid01aaa3', linkBgvid01);
  var menuAnimation = function () {
      $(".main-menu").animate({
        opacity: 0,
        left: "-100",
      }, 500);
      $(".main-menu, .overlay").fadeOut(500);
      $(".footer-bg ").css('background','rgba(0,0,0,0.6)');
      $(".main-icons-kit").fadeIn(500);
  };

  $('#pjax-global').on('click', '.bgvid-link-01', function () {
    menuAnimation ();
	funcGetSessionStorage ();
    setTimeout(function() { pjaxVideoContent(linkBgvid11, linkNav01, linkBgimg01, pathImgNight01) }, 500); 
  });

  $('#pjax-global').on('click', '.bgvid-link-02', function () {
    menuAnimation ();
	funcGetSessionStorage ();
    setTimeout(function() { pjaxVideoContent(linkBgvid01, linkNav02, linkBgimg02, pathImgNight02) }, 500); 
  });

  $('#pjax-global').on('click', '.bgvid-link-03', function () {
    menuAnimation ();
    setTimeout(function() { pjaxVideoContent(linkBgvid02, linkNav03, linkBgimg03, pathImgNight03) }, 500); 
  });

  $('#pjax-global').on('click', '.bgvid-link-04', function () {
    menuAnimation ();
    setTimeout(function() { pjaxVideoContent(linkBgvid03, linkNav04, linkBgimg04, pathImgNight04) }, 500); 
  });

  $('#pjax-global').on('click', '.bgvid-link-05', function () {
    menuAnimation ();
    setTimeout(function() { pjaxVideoContent(linkBgvid04, linkNav05, linkBgimg05, pathImgNight05) }, 500); 
  });

  $('#pjax-global').on('click', '.bgvid-link-06', function () {
    menuAnimation ();
    setTimeout(function() { pjaxVideoContent(linkBgvid05, linkNav06, linkBgimg06, pathImgNight06) }, 500); 
  });

  $('#pjax-global').on('click', '.bgvid-link-07', function () {
    menuAnimation ();
    setTimeout(function() { pjaxVideoContent(linkBgvid06, linkNav07, linkBgimg07, pathImgNight07) }, 500); 
  });

  $('#pjax-global').on('click', '.bgvid-link-08', function () {
    menuAnimation ();
    setTimeout(function() { pjaxVideoContent(linkBgvid07, linkNav08, linkBgimg08, pathImgNight08) }, 500); 
  });

  $('#pjax-global').on('click', '.bgvid-link-09', function () {
    menuAnimation ();
    setTimeout(function() { pjaxVideoContent(linkBgvid08, linkNav09, linkBgimg09, pathImgNight09) }, 500); 
  });

  $('#pjax-global').on('click', '.bgvid-link-10', function () {
    menuAnimation ();
    setTimeout(function() { pjaxVideoContent(linkBgvid09, linkNav10, linkBgimg10, pathImgNight10) }, 500); 
  });

  $('#pjax-global').on('click', '.bgvid-link-11', function () {
    menuAnimation ();
    setTimeout(function() { pjaxVideoContent(linkBgvid10, linkNav11, linkBgimg11, pathImgNight11) }, 500); 
  });

  </script>




   <!-- show main-menu DENIS-->
  <script>
    $('#pjax-global').on('click', '.main-menu-btn', function () {
      $(".footer-bg ").css('background','rgba(0,0,0,0)');
      $(".main-icon").addClass('hide-main-icon');
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
      $(".footer-bg ").css('background','rgba(0,0,0,0.6)');
      $(".main-icon").removeClass('hide-main-icon');
    });
  </script>
   

</body>
</html>