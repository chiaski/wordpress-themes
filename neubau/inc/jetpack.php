<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Neubau
 * @since Neubau 1.0
 * @version 1.0
 */

function neubau_jetpack_setup() {

	/**
		* Add theme support for Responsive Videos.
	*/
    add_theme_support( 'jetpack-responsive-videos' );

	/**
		* Add theme support for Infinite Scroll.
 	*/
	add_theme_support( 'infinite-scroll', array(
		'container' 		=> 'primary',
		'footer_widgets' 	=> array( 'footer-one', 'footer-two', 'footer-three' ),
		'footer'    		=> 'main-wrap',
	) );
}
add_action( 'after_setup_theme', 'neubau_jetpack_setup' );
