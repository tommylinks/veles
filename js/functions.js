// функции анимации иконок при нажатии на элементы управления .snt-next, .snt-start, .snt-prev
var funcIconAnimationIn = function () {
    $(".icon-bio, .icon-techno, .daynight, .sound-btn, .snt-prev, .one").removeClass('hide-main-icon-left');
    $(".icon-socio, .icon-person, .icon-phone, .snt-next, .two").removeClass('hide-main-icon-right');
    $(".snt-start").removeClass('hide-main-icon-top');
    $(".main-logo, .sound-btn, .documents-popup, .main-menu-btn, .secondary-logo, .mouse-move, .toggle-controls, .close-windowview, .buy-sections, .veles-widget, .icon-socio, .icon-person, .icon-phone, .snt-prev, .snt-start, .snt-next, .choose-section-wrapper, #containerCanvas, #myCanvasContainer").animate({
      opacity: 1
    }, 300);
	}

var funcIconAnimationOut = function () {
    $(".icon-bio, .icon-techno, .daynight, .sound-btn, .snt-prev, .one").addClass('hide-main-icon-left');
    $(".icon-socio, .icon-person, .icon-phone, .snt-next, .two").addClass('hide-main-icon-right');
    $(".snt-start").addClass('hide-main-icon-top');
    $(".main-logo, .sound-btn, .documents-popup, .main-menu-btn, .secondary-logo, .mouse-move, .toggle-controls, .close-windowview, .buy-sections, .veles-widget, .icon-socio, .icon-person, .icon-phone, .snt-prev, .snt-start, .snt-next, .choose-section-wrapper, #containerCanvas, #myCanvasContainer").animate({
      opacity: 0
    }, 300);
}

// функции анимации иконок при нажатии на элементы управления .main-menu-btn
var funcAnimMenuIn = function () {
        $(".main-menu").animate({
          opacity: 1,
          left:"0%"
        }, 300);
        $(".main-menu, .overlay").fadeIn(500);
        $(".footer-bg ").css('background','rgba(0,0,0,0)');
        $(".icon-bio, .icon-techno, .daynight, .sound-btn, .snt-prev, .one").addClass('hide-main-icon-left');
        $(".icon-socio, .icon-person, .icon-phone, .snt-next, .two").addClass('hide-main-icon-right');
        $(".snt-start").addClass('hide-main-icon-top');
        $(".main-logo, .documents-popup, .main-menu-btn, .secondary-logo, .mouse-move, .toggle-controls, .close-windowview, .buy-sections, .veles-widget, .icon-socio, .icon-person, .icon-phone, .choose-section-wrapper").animate({
          opacity: 0
        }, 300);
}
 	  
var funcAnimMenuOut = function () {
        $(".main-menu").animate({
          opacity: 0,
          left: "-10%"
        }, 300);
        $(".main-menu, .overlay").fadeOut(500);
        $(".footer-bg ").css('background','rgba(0,0,0,0.2)');
        $(".icon-bio, .icon-techno, .daynight, .sound-btn, .snt-prev, .one").removeClass('hide-main-icon-left');
        $(".icon-socio, .icon-person, .icon-phone, .snt-next, .two").removeClass('hide-main-icon-right');
        $(".snt-start").removeClass('hide-main-icon-top');        
        $(".main-logo, .documents-popup, .main-menu-btn, .secondary-logo, .mouse-move, .toggle-controls, .close-windowview, .buy-sections, .veles-widget, .icon-socio, .icon-person, .icon-phone, .choose-section-wrapper").animate({
          opacity: 1
        }, 300);
}





var tooltipLeftSlide = function() {
  $('.tooltip-i').tooltipster({
    theme: 'tooltipster-borderless',
    trigger: 'click',
    interactive: true,
    side: 'bottom'
  });
}


// init music
  // if(localStorage.getItem('music') == 'off') {
  //   document.getElementById('music').pause();
  //   $('.sound-btn').width(8);
  // } else {
  // 	localStorage.setItem('music') == 'on'
  //   $('.sound-btn').width('25');
  //   document.getElementById('music').play();
  // }

var playMusic = function () {

  $('.sound-btn').click(function() {
  if($('.sound-btn').hasClass('pause') && localStorage.getItem('music') == 'off') {
      $('.sound-btn').removeClass('pause');
      $('.sound-btn').width('25');
      localStorage.setItem('music', 'on');
      document.getElementById('music').play();
    } else {
      $('.sound-btn').addClass('pause');
      $('.sound-btn').width(8);
      localStorage.setItem('music', 'off');
      document.getElementById('music').pause();
      
    }


  });




  if(localStorage.getItem('music') == 'off') {
    document.getElementById('music').pause();
    $('.sound-btn').width(8);
    $('.sound-btn').addClass('pause');
  } else {
    localStorage.setItem('music', 'on');
    $('.sound-btn').removeClass('pause');
    $('.sound-btn').width('25');
    document.getElementById('music').play();
  }




};

// callack popup  при нажатии на иконку "callback"
var callBackPopup = function() {
  $('.call-me-btn').click(function(){
  $('.si-modals-wrapper, .si-modal, .overlay').show();
  setTimeout(function(){
    $('.si-modal').addClass('si-visible');
  }, 10);
});

$('.si-close').click(function(){
  if ($('.si-modal').hasClass('si-visible')) {
    $('.si-modal').removeClass('si-visible');
    setTimeout(function(){
      $(".si-modals-wrapper, .si-modal, .overlay").fadeOut();
    }, 200);
  }
});

$(document).click(function(event) {
  if ($(event.target).closest(".si-modal-inner").length) return;
  if ($('.si-modal').hasClass('si-visible')) {
    $('.si-modal').removeClass('si-visible');
    setTimeout(function(){
      $(".si-modals-wrapper, .si-modal, .overlay").fadeOut();
    }, 200);
  }
  event.stopPropagation();
});
};
//END callack popup  при нажатии на иконку "callback"


// var playMusic = function () {
//   $('.sound-btn').click(function() {
//   if($('.sound-btn').hasClass('pause')) {
//       $('.sound-btn').removeClass('pause');
//       $('.sound-btn').width('25');
//       document.getElementById('music').play();
//       localStorage.setItem('music', 'on');
//     } else {
//       $('.sound-btn').addClass('pause');
//       $('.sound-btn').width(8);
//       document.getElementById('music').pause();
//       localStorage.setItem('music', 'off');
//     }
//   });
// }


// if(localStorage.getItem('music') == 'off' ) {
//   document.getElementById('music').pause();
// } else {
//   document.getElementById('music').play();
// }
// END init music
  


