(function($) {
	'use strict';

	//Scrollspy aktivieren
	$('body').scrollspy({
		target: '.mainmenu-scroll',
		offset: 80
	});

	//Header verändern beim scrollen
	$(window).scroll(function() {
		if ($(document).scrollTop() > 100) {
			$('.header').addClass('fixed-top');
			$('[data-spy="scroll"]').each(function () {
				var $spy = $(this).scrollspy('refresh')
			})
		} else {
			$('.header').removeClass('fixed-top');
			$('[data-spy="scroll"]').each(function () {
				var $spy = $(this).scrollspy('refresh')
			})
		}
	});

	//Beim Klick auf Link im Menü mit jquery animiert scrollen
	$('a[href^="#"]').on('click', function(e) {
		stopDefault(e);
		if (this.hash !== "") {
			//Falls im mobilen Menü gecklickt wurde, muss das Menü wieder geschlossen werden
			if($(this).hasClass('closemenu')) {
				$('.hamburger').removeClass('is-active');
				$('#mobilemenu').slideUp();
			}
			var hash = this.hash;
			$('html, body').animate({
				scrollTop: $(hash).offset().top - 100
			}, 900, 'swing', function() {
				window.location.hash = hash;
				return false;
			});
		}
	});

	//Slider in der Home Sektion aktivieren
	$('.homecarousel').owlCarousel({
		items : 1,
		loop : true,
		nav : true,
		dots : false,
		autoplay : true,
		autoplayHoverPause : true,
		autoplayTimeout : 3000,
		animateOut : 'slideOutDown',
		animateIn : 'flipInX',
		navText : ['<i class="fas fa-chevron-left fa-2x"></i>','<i class="fas fa-chevron-right fa-2x"></i>']
	});

	//Team Slider aktivieren
	$('.teamcarousel').owlCarousel({
		loop : true,
		nav : true,
		dots : false,
		autoplay : true,
		autoplayHoverPause : true,
		autoplayTimeout : 5000,
		margin : 30,
		navText : ['<i class="fas fa-chevron-left fa-2x"></i>','<i class="fas fa-chevron-right fa-2x"></i>'],
		responsive : {
			0 : {
				items : 1
			},
			769 : {
				items : 2
			},
			993 : {
				items : 3
			}
		}
	});

	//Google Map initialisieren und Markers laden
	function new_map(el) {
		var markers = el.find('.marker');
		var args = {
			zoom : 16,
			center : new google.maps.LatLng(0, 0),
			mapTypeId : google.maps.MapTypeId.ROADMAP
		};
		var map = new google.maps.Map( el[0], args);
		map.markers = [];
		markers.each(function(){
			add_marker( $(this), map );
		});
		center_map( map );
		return map;
	}

	//Marker in der Karte hinzufügen und HTML Informationen rendern (falls vorhanden)
	function add_marker($marker, map) {
		var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );
		var marker = new google.maps.Marker({
			position : latlng,
			map : map
		});
		map.markers.push( marker );
		if($marker.html()) {
			var infowindow = new google.maps.InfoWindow({
				content		: $marker.html()
			});
			google.maps.event.addListener(marker, 'click', function() {
				infowindow.open( map, marker );
			});
		}
	}

	//Google Maps zentrieren. Diese Funktion zentriert die Google Maps Karte, so das alle Marker sichtbar sind
	function center_map(map) {
		var bounds = new google.maps.LatLngBounds();
		$.each( map.markers, function( i, marker ){
			var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );
			bounds.extend( latlng );
		});
		if( map.markers.length == 1 ) {
			map.setCenter( bounds.getCenter() );
			map.setZoom( 16 );
		} else {
			map.fitBounds( bounds );
		}
	}

	//Google Maps Karten ausgeben
	$('.map').each(function(){
		new_map( $(this) );
	});

	//Browser Aktionen stoppen
	function stopDefault(evt) {
		if (evt && evt.preventDefault) {
			evt.preventDefault();
		} else if (window.event && window.event.returnValue) {
			window.event.returnValue = false;
		}
	}

	//Elemente beim herunterscrollen animiert einblenden
	$('.animatein').AniView();

	//Hamburger Menü Button Animation aktivieren und Menü einblenden
	$('.hamburger').on('click', function() {
		$(this).toggleClass('is-active');
		$('#mobilemenu').slideToggle();
	});

	//Partner Boxen gleich hoch machen
	$.when( AniView() ).done(function() {
		$('.offer-item').matchHeight({
			property : 'min-height'
		});
	});

})(jQuery);