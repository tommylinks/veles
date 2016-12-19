

var funcIconAnimationIn = function () {
	console.log('funcIconAnimationIn');
	//main icons show animation
        $(".main-logo, .documents-popup, .snt-prev, .snt-start, .snt-next, .secondary-logo, .main-menu-btn, .mouse-move, .toggle-controls, .close-windowview, .choose-section-wrapper, .buy-sections").animate({
          opacity: 1
        }, 500);

        //left
        $(".icon-bio, .icon-techno, .daynight, .sound-btn").removeClass('hide-main-icon-left');

        //right
        $(".icon-socio, .icon-person, .icon-phone").removeClass('hide-main-icon-right');

	};

var funcIconAnimationOut = function () {
	console.log('funcIconAnimationOut');
		//main icons hide animation
		$(".main-logo, .documents-popup, .snt-prev, .snt-start, .snt-next, .secondary-logo, .main-menu-btn, .mouse-move, .toggle-controls, .close-windowview, .choose-section-wrapper, .buy-sections").animate({
		  opacity: 0
		}, 300);

		// left
		$(".icon-bio, .icon-techno, .daynight, .sound-btn").addClass('hide-main-icon-left');

		//right
		$(".icon-socio, .icon-person, .icon-phone").addClass('hide-main-icon-right');

};

