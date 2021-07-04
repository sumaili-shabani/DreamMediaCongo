;(function(){
	
	"use strict";
	
	// main slider
	$('.fp-slides').cycle({
		fx: 'scrollHorz',
		timeout: 6500,
		delay: -2000,
		speed: 500,
		next: '.fp-next',
		prev: '.fp-prev',
		pager: '.fbt-slide-pager',
		continuous: 0,
		sync: 1,
		pause: 1,
		pauseOnPagerHover: 1,
		cleartype: true,
		cleartypeNoBg: true
	});
	
	// main slider homepage 5 left
	$('.fp-slides-first').cycle({
		fx: 'scrollUp',
		timeout: 6500,
		delay: -2000,
		speed: 1000,
		next: '.fp-next',
		prev: '.fp-prev',
		pager: '.fbt-slide-pager',
		continuous: 0,
		sync: 1,
		pause: 1,
		pauseOnPagerHover: 1,
		cleartype: true,
		cleartypeNoBg: true
	});
	
	// main slider homepage 5 right
	$('.fp-slides-sec').cycle({
		fx: 'scrollDown',
		timeout: 6500,
		delay: -2000,
		speed: 1000,
		next: '.next',
		prev: '.prev',
		continuous: 0,
		sync: 1,
		pause: 1,
		pauseOnPagerHover: 1,
		cleartype: true,
		cleartypeNoBg: true
	});
	
	// news ticker
	$('.ticker').cycle({
		fx: 'scrollDown',
		timeout: 8000,
		speed: 1000,
		pause: 1
	});
	
	// Back to Top   
    var $ele = $('#BackToTop');
	$(window).on('scroll', function() {
		$(this).scrollTop() >= 200 ? $ele.show(10).animate({
			bottom: '0'
		}, 10) : $ele.animate({
			bottom: '-50px'
		}, 10)
	});
	$ele.on('click', function(e) {
		e.preventDefault();
		$('html,body').animate({
			scrollTop: 0
		}, 400)
	});
	
	// Theia Sticky Sidebar
	$('.sidebar, .left-sidebar, .post-left-sidebar, .post-sidebar').theiaStickySidebar({
		"additionalMarginTop": "25",
	});
	
	$(function(){
		
		// Tooltip
		$('[data-toggle="tooltip"]').tooltip();
		
		// Owl Carousel
		var owlWrap = $('.owl-wrapper');
		if (owlWrap.length > 0) {
			if (jQuery().owlCarousel) {
				owlWrap.each(function() {
					var carousel = $(this).find('.owl-carousel'),
						dataNum = $(this).find('.owl-carousel').attr('data-num'),
						dataNum2,
						dataNum3;
					if (dataNum == 1) {
						dataNum2 = 1;
						dataNum3 = 1;
					} else if (dataNum == 2) {
						dataNum2 = 2;
						dataNum3 = dataNum - 1;
					} else {
						dataNum2 = dataNum - 1;
						dataNum3 = dataNum - 2;
					}
					carousel.owlCarousel({
						autoPlay: false,
						navigation: true,
						items: dataNum,
						itemsDesktop: [1199, dataNum2],
						itemsDesktopSmall: [979, dataNum3]
					});
				});
			}
		};
		
		// Video Owl Carousel
		var owlWrap = $('.owl-wrapper-video');
		if (owlWrap.length > 0) {
			if (jQuery().owlCarousel) {
				owlWrap.each(function() {
					var carousel = $(this).find('.owl-carousel'),
						dataNum = $(this).find('.owl-carousel').attr('data-num'),
						dataNum2,
						dataNum3;
					if (dataNum == 1) {
						dataNum2 = 1;
						dataNum3 = 1;
					} else if (dataNum == 2) {
						dataNum2 = 2;
						dataNum3 = dataNum - 1;
					} else {
						dataNum2 = dataNum - 1;
						dataNum3 = dataNum - 2;
					}
					carousel.owlCarousel({
						autoPlay: false,
						navigation: true,
						items: dataNum,
						itemsDesktop: [1366, dataNum2],
						itemsDesktopSmall: [979, dataNum3]
					});
				});
			}
		};
		
		// Google Map
		var contact = {"lat":"-37.81727410000001", "lon":"144.9557089"}; // Change a map coordinate here: http://www.gps-coordinates.net/
		try {
			var mapContainer = $('.map');
			mapContainer.gmap3({
				action: 'addMarker',
				marker:{
					options:{
						icon : new google.maps.MarkerImage('img/map.png')
					}
				},
				latLng: [contact.lat, contact.lon],
				map:{
					center: [contact.lat, contact.lon],
					zoom: 10
					},
				},
				{action: 'setOptions', args:[{scrollwheel:false}]}
			);
			} catch(err) {
		}
		
	});	
	
}(jQuery));
