
// preloader progress bar + radius loader for php reloads

function preloader(immune, background, color) {
	$("body").prepend('<div class="preloader"><span class="loading-bar"></span><i class="radial-loader"></i></div>');
	
  if (immune == true) {
    $("body > div.preloader").addClass('immune');
  }

  if (background == 'white') {
    $("body > div.preloader").addClass('white');
  }
  
  else if (background == 'black') {
    $("body > div.preloader").addClass('black');
  }

  if (color == 'red') {
    $("body > div.preloader span.loading-bar").addClass('red-colored');
    $("body > div.preloader i.radial-loader").addClass('red-colored');
  } 
  $(window).load(function() {
	$('#pjax-global').animate({opacity: "1"}, 1000);
	$('footer').animate({opacity: "1"}, 1000);
    setTimeout(function() {
      $('.preloader').fadeOut(1000);
    }, 1000);   
	setTimeout(function() {
      $('.preloader').remove();
    }, 2000);
  })
};

// preloader progress bar for pjax reloads
var speedMbpsGlobal = localStorage.getItem('speedMbps');

// how long content loads?
var avrSize = 1200; // 1200Kb

var durationContentLoads = Math.round((avrSize / speedMbpsGlobal * 8.75) + 150);
var durationContentLoadsShort = durationContentLoads - durationContentLoads/2.5
var durationContentLoadsShortExtremly = durationContentLoads - durationContentLoads/2
console.log( 'durationContentLoads', durationContentLoads );


// preloader
	var time = durationContentLoadsShortExtremly;
	function addProgressBar() {
		//$('#pjax-global').animate({opacity: "1"}, 1000);
		$('body').prepend('<div id = "snt-preloader-wrapper" style="width: 100%; position: absolute;"><div id="snt-preloader"></div></div>');
		var preloaderElem = document.getElementById('snt-preloader');
			$('#snt-preloader').animate({ opacity: 1 }, 0);
			procNum = time / (time/1000 * time),
			timeInFunc = time,
			pxAd = 0,
			id = setInterval(frame, 10);
		
		function frame() {
			if (timeInFunc <= 10) {
				clearInterval(id);
			} else {
				timeInFunc -= 10;
				pxAd += procNum;
				preloaderElem.style.width = pxAd + "%";
			}
		}
		
		setTimeout (function () {
			//$('#snt-preloader').animate({ opacity: 0 }, 0);
			$( "#snt-preloader-wrapper" ).remove();
		}, durationContentLoadsShort);
	}
	
	