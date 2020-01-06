( function( $ ) {


	/*
	 * Resize post-wrapper for full width on small screens.
	 */

	$( window ).load( function() {


		var post_wrapper = $( '#post-container' );

		post_wrapper.imagesLoaded( function() {
			if ( $( 'body' ).hasClass( 'rtl' ) ) {
				post_wrapper.masonry( {
					columnWidth: '.grid-sizer',
					itemSelector: '.hentry',
					isOriginLeft: false
				} );
			} else {
				post_wrapper.masonry( {
					columnWidth: '.grid-sizer',
					itemSelector: '.hentry',
				} );
			}

			// Show the blocks
			$( '.hentry' ).animate( {
				'opacity' : 1
			}, 250 );
		} );


		// Layout posts that arrive via infinite scroll
		$( document.body ).on( 'post-load', function () {

			var new_items = $( '.infinite-wrap .hentry' );

			post_wrapper.append( new_items );
			post_wrapper.masonry( 'appended', new_items );

			// Force layout correction after 1500 milliseconds
			setTimeout( function () {

				post_wrapper.masonry();

				// Show the blocks
				$( '.hentry' ).animate( {
					'opacity' : 1
				}, 250 );

			}, 500 );

		} );

	} );

} )( jQuery );
