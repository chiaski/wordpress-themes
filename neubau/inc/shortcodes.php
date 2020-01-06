<?php
/**
 * Available Neubau Shortcodes
 *
 *
 * @package Neubau
 * @since Neubau 1.0
 * @version 1.0
 */

/*-----------------------------------------------------------------------------------*/
/* Neubau Shortcodes
/*-----------------------------------------------------------------------------------*/
// Enable shortcodes in widget areas
add_filter( 'widget_text', 'do_shortcode' );

// Replace WP autop formatting
if (!function_exists( "neubau_remove_wpautop")) {
	function neubau_remove_wpautop($content) {
		$content = do_shortcode( shortcode_unautop( $content ) );
		$content = preg_replace( '#^<\/p>|^<br \/>|<p>$#', '', $content);
		return $content;
	}
}

/*-----------------------------------------------------------------------------------*/
/* Multi Columns Shortcodes
/* Don't forget to add "_last" behind the shortcode if it is the last column.
/*-----------------------------------------------------------------------------------*/

// Two Columns
function neubau_shortcode_two_columns_one( $atts, $content = null ) {
   return '<div class="two-columns-one">' . neubau_remove_wpautop($content) . '</div>';
}
add_shortcode( 'two_columns_one', 'neubau_shortcode_two_columns_one' );

function neubau_shortcode_two_columns_one_last( $atts, $content = null ) {
   return '<div class="two-columns-one last">' . neubau_remove_wpautop($content) . '</div>';
}
add_shortcode( 'two_columns_one_last', 'neubau_shortcode_two_columns_one_last' );

// Three Columns
function neubau_shortcode_three_columns_one($atts, $content = null) {
   return '<div class="three-columns-one">' . neubau_remove_wpautop($content) . '</div>';
}
add_shortcode( 'three_columns_one', 'neubau_shortcode_three_columns_one' );

function neubau_shortcode_three_columns_one_last($atts, $content = null) {
   return '<div class="three-columns-one last">' . neubau_remove_wpautop($content) . '</div>';
}
add_shortcode( 'three_columns_one_last', 'neubau_shortcode_three_columns_one_last' );

function neubau_shortcode_three_columns_two($atts, $content = null) {
   return '<div class="three-columns-two">' . neubau_remove_wpautop($content) . '</div>';
}
add_shortcode( 'three_columns_two', 'neubau_shortcode_three_columns_two' );

function neubau_shortcode_three_columns_two_last($atts, $content = null) {
   return '<div class="three-columns-two last">' . neubau_remove_wpautop($content) . '</div>';
}
add_shortcode( 'three_columns_two_last', 'neubau_shortcode_three_columns_two_last' );

// Four Columns
function neubau_shortcode_four_columns_one($atts, $content = null) {
   return '<div class="four-columns-one">' . neubau_remove_wpautop($content) . '</div>';
}
add_shortcode( 'four_columns_one', 'neubau_shortcode_four_columns_one' );

function neubau_shortcode_four_columns_one_last($atts, $content = null) {
   return '<div class="four-columns-one last">' . neubau_remove_wpautop($content) . '</div>';
}
add_shortcode( 'four_columns_one_last', 'neubau_shortcode_four_columns_one_last' );

function neubau_shortcode_four_columns_two($atts, $content = null) {
   return '<div class="four-columns-two">' . neubau_remove_wpautop($content) . '</div>';
}
add_shortcode( 'four_columns_two', 'neubau_shortcode_four_columns_two' );

function neubau_shortcode_four_columns_two_last($atts, $content = null) {
   return '<div class="four-columns-two last">' . neubau_remove_wpautop($content) . '</div>';
}
add_shortcode( 'four_columns_two_last', 'neubau_shortcode_four_columns_two_last' );

function neubau_shortcode_four_columns_three($atts, $content = null) {
   return '<div class="four-columns-three">' . neubau_remove_wpautop($content) . '</div>';
}
add_shortcode( 'four_columns_three', 'neubau_shortcode_four_columns_three' );

function neubau_shortcode_four_columns_three_last($atts, $content = null) {
   return '<div class="four-columns-three last">' . neubau_remove_wpautop($content) . '</div>';
}
add_shortcode( 'four_columns_three_last', 'neubau_shortcode_four_columns_three_last' );


// Divide Text Shortcode
function neubau_shortcode_divider($atts, $content = null) {
   return '<div class="divider"></div>';
}
add_shortcode( 'divider', 'neubau_shortcode_divider' );


/*-----------------------------------------------------------------------------------*/
/* Info Boxes Shortcodes
/*-----------------------------------------------------------------------------------*/

function neubau_shortcode_white_box($atts, $content = null) {
   return '<div class="box white-box">' . do_shortcode( neubau_remove_wpautop($content) ) . '</div>';
}
add_shortcode( 'white_box', 'neubau_shortcode_white_box' );

function neubau_shortcode_yellow_box($atts, $content = null) {
   return '<div class="box yellow-box">' . do_shortcode( neubau_remove_wpautop($content) ) . '</div>';
}
add_shortcode( 'yellow_box', 'neubau_shortcode_yellow_box' );

function neubau_shortcode_red_box($atts, $content = null) {
   return '<div class="box red-box">' . do_shortcode( neubau_remove_wpautop($content) ) . '</div>';
}
add_shortcode( 'red_box', 'neubau_shortcode_red_box' );

function neubau_shortcode_blue_box($atts, $content = null) {
   return '<div class="box blue-box">' . do_shortcode( neubau_remove_wpautop($content) ) . '</div>';
}
add_shortcode( 'blue_box', 'neubau_shortcode_blue_box' );

function neubau_shortcode_green_box($atts, $content = null) {
   return '<div class="box green-box">' . do_shortcode( neubau_remove_wpautop($content) ) . '</div>';
}
add_shortcode( 'green_box', 'neubau_shortcode_green_box' );

function neubau_shortcode_lightgrey_box($atts, $content = null) {
   return '<div class="box lightgrey-box">' . do_shortcode( neubau_remove_wpautop($content) ) . '</div>';
}
add_shortcode( 'lightgrey_box', 'neubau_shortcode_lightgrey_box' );

function neubau_shortcode_grey_box($atts, $content = null) {
   return '<div class="box grey-box">' . do_shortcode( neubau_remove_wpautop($content) ) . '</div>';
}
add_shortcode( 'grey_box', 'neubau_shortcode_grey_box' );

function neubau_shortcode_dark_box($atts, $content = null) {
   return '<div class="box dark-box">' . do_shortcode( neubau_remove_wpautop($content) ) . '</div>';
}
add_shortcode( 'dark_box', 'neubau_shortcode_dark_box' );


/*-----------------------------------------------------------------------------------*/
/* Buttons Shortcodes
/*-----------------------------------------------------------------------------------*/
function neubau_button( $atts, $content = null ) {
    extract(shortcode_atts(array(
    'link'	=> '#',
    'target' => '',
    'color'	=> '',
    'size'	=> '',
	 'form'	=> '',
	 'font'	=> '',
    ), $atts));

	$color = ($color) ? ' '.$color. '-btn' : '';
	$size = ($size) ? ' '.$size. '-btn' : '';
	$form = ($form) ? ' '.$form. '-btn' : '';
	$font = ($font) ? ' '.$font. '-btn' : '';
	$target = ($target == 'blank') ? ' target="_blank"' : '';

	$out = '<a' .$target. ' class="standard-btn' .$color.$size.$form.$font. '" href="' .$link. '"><span>' .do_shortcode($content). '</span></a>';

    return $out;
}
add_shortcode('button', 'neubau_button');

