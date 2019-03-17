(function($) {
	'use strict';

	//Scrollspy aktivieren
	$('body').scrollspy({
		target: '#mainmenu-container'
	});

	//Header verändern beim scrollen
	$(window).scroll(function() {
		if ($(document).scrollTop() > 100) {
			$('.header').addClass('fixed-top');
		} else {
			$('.header').removeClass('fixed-top');
		}
	});

	//Slider aktivieren
	$('.owl-carousel').owlCarousel({
		items: 1,
		loop: true,
		nav: true,
		dots: false,
		autoplay: true,
		autoplayHoverPause: true,
		autoplayTimeout: 3000,
		animateOut: 'slideOutDown',
		animateIn: 'flipInX',
		navText: ['<i class="fas fa-chevron-left fa-2x"></i>','<i class="fas fa-chevron-right fa-2x"></i>']
	});
})(jQuery);