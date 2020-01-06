<?php
/**
 * Implement Theme Customizer additions and adjustments.
 *
 * @package Neubau
 * @since Neubau 1.0
 * @version 1.0
 */


function neubau_customize_register( $wp_customize ) {

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

	// Rename the label to "Site Title Color" because this only affects the site title in this theme.
	$wp_customize->get_control( 'header_textcolor' )->label = esc_html__( 'Site Title Color', 'neubau' );
	$wp_customize->get_section('header_image')->title = esc_html__( 'Logo', 'neubau' );

	// Neubau Theme Options Sections
	$wp_customize->add_section( 'neubau_themeoptions', array(
		'title'        		=> esc_html__( 'Theme Options', 'neubau' ),
		'priority'      	=> 1,
	) );

	// Add the custom colors.
	$wp_customize->add_setting( 'header_background_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );

	// Custom Colors.
	$wp_customize->add_setting( 'link_color' , array(
    	'default'     		=> '#000000',
    	'sanitize_callback' => 'sanitize_hex_color',
		'transport'   		=> 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
		'label'				=> esc_html__( 'Link Color', 'neubau' ),
		'section'			=> 'colors',
		'settings'			=> 'link_color',
	) ) );
	
	$wp_customize->add_setting( 'hover_mobilemenu_color' , array(
    	'default'     		=> '#0000ff',
    	'sanitize_callback' => 'sanitize_hex_color',
		'transport'   		=> 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hover_mobilemenu_color', array(
		'label'				=> esc_html__( 'Title Hover and Mobile Menu Color', 'neubau' ),
		'section'			=> 'colors',
		'settings'			=> 'hover_mobilemenu_color',
	) ) );

	$wp_customize->add_setting( 'footer_bg_color' , array(
    	'default'     		=> '#bababa',
    	'sanitize_callback' => 'sanitize_hex_color',
		'transport'   		=> 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_bg_color', array(
		'label'				=> esc_html__( 'Footer Background Color', 'neubau' ),
		'section'			=> 'colors',
		'settings'			=> 'footer_bg_color',
	) ) );
	
	
	// Neubau Theme Options	
	$wp_customize->add_setting( 'neubau_credit', array(
		'default'       	=> '',
		'sanitize_callback' => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'neubau_credit', array(
		'label'         	=> esc_html__( 'Footer credit text', 'neubau' ),
		'description'		=> esc_html__( 'Customize the footer credit text. (HTML is allowed)', 'neubau' ),
		'section'       	=> 'neubau_themeoptions',
		'type'          	=> 'text',
		'priority'			=> 2,
	) );

}
add_action( 'customize_register', 'neubau_customize_register' );

/**
 * Sanitize Checkboxes.
 */
function neubau_sanitize_checkbox( $input ) {
	if ( 1 == $input ) {
		return true;
	} else {
		return false;
	}
}

