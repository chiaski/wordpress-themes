/* global screenReaderText */
/**
 * Theme functions file.
 *
 * Contains handlers for navigation and widget area.
 *
 * @version 1.0.1
 */

( function($) {

	// Fade content in, if page loaded.
	$( window ).load( function() {

		// hide load overlay content
		$( '.load-overlay' ).delay( 500 ).animate( {
			'opacity': 0
		}, 1500 );

		// Show content
		$( '.main-container' ).delay( 500 ).animate( {
			'opacity': 1
		}, 1500 );

	});

	// Overlay (main menu + widget area) open/close
	$('#overlay-open').on( 'click', function () {
		$('#overlay-wrap').fadeIn('fast', 'linear');
		$('html').addClass('overlay-show');
		$('body').addClass('overlay-show');
    });

    $('#overlay-close').on( 'click', function () {
	    $('#overlay-wrap').fadeOut('fast', 'linear');
		$('html').removeClass('overlay-show');
		$('body').removeClass('overlay-show');
    });

    // Resize Title Font size
    $(window).scroll(function() {    
	    var scroll = $(window).scrollTop();
	
	    if (scroll >= 20) {
	        $(".site-header").addClass("small");
	        $(".main-navigation").addClass("show");
	    } else {
	        $(".site-header").removeClass("small");
	        $(".main-navigation").removeClass("show");
	    }
	});

	// FadeIn effect on scroll into browser window
	$(document).ready(function() {
		if ( window.innerWidth >= 1100 ) {
		$('.fadethis').addClass("hidden").viewportChecker({
		    classToAdd: 'visible animated fadeInUp', // Class to add to the elements when they are visible
		    offset: 100,
		    removeClassAfterAnimation: true
		   });
		}
	});

	// Smooth Scroll
	$(function() {
	  $('a[href*="#"]:not([href="#"])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top
	        }, 600);
	        return false;
	      }
	    }
	  });
	});

} )( jQuery );
