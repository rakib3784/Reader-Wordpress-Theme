


$(document).ready(function() {
	"use strict";


	/* Sidbar Toggle on 992px */

	var tid = setInterval( function () {
		if ( document.readyState !== 'complete' ) return;
		clearInterval( tid );


		var querySelector = document.querySelector.bind(document);

		var nav = document.querySelector('.vertical_nav');
		var wrapper = document.querySelector('.wrapper'); 

		/* Toggle menu click */
		querySelector('.toggle_menu').onclick = function () {

			nav.classList.toggle('vertical_nav_opened');

			wrapper.classList.toggle('toggle-content');

		};

	}, 100 );


	/* Background Img */

	$(".background-bg").css('background-image', function () {
		var bg = ('url(' + $(this).data("image-src") + ')');
		return bg;
	});


	/* Magnific PopUp */

	$('.iframe').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,

		fixedContentPos: false
	});




});




jQuery(window).on('scroll', function () {
	'use strict';

	if (jQuery(this).scrollTop() > 100) {
		jQuery('#scroll-to-top').fadeIn('slow');
	} else {
		jQuery('#scroll-to-top').fadeOut('slow');
	}

});


jQuery('#scroll-to-top').on("click", function() {
	'use strict';

	jQuery("html,body").animate({ scrollTop: 0 }, 1500);
	return false;
});








