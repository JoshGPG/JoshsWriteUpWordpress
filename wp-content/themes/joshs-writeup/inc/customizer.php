<?php
/**
 * Theme Customizer settings.
 *
 * @package Joshs_WriteUp
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register Customizer options.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function joshs_writeup_customize_register( $wp_customize ) {

	// --- Footer Section ---
	$wp_customize->add_section( 'joshs_writeup_footer', array(
		'title'    => __( 'Footer', 'joshs-writeup' ),
		'priority' => 150,
	) );

	$wp_customize->add_setting( 'joshs_writeup_footer_text', array(
		'default'           => '',
		'sanitize_callback' => 'wp_kses_post',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'joshs_writeup_footer_text', array(
		'label'   => __( 'Footer Text', 'joshs-writeup' ),
		'section' => 'joshs_writeup_footer',
		'type'    => 'textarea',
	) );

	// --- Colors ---
	$wp_customize->add_setting( 'joshs_writeup_accent_color', array(
		'default'           => '#0056b3',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'joshs_writeup_accent_color', array(
		'label'   => __( 'Accent Color', 'joshs-writeup' ),
		'section' => 'colors',
	) ) );
}
add_action( 'customize_register', 'joshs_writeup_customize_register' );

/**
 * Output Customizer CSS.
 */
function joshs_writeup_customizer_css() {
	$accent = get_theme_mod( 'joshs_writeup_accent_color', '#0056b3' );
	if ( '#0056b3' !== $accent ) {
		echo '<style>a,a:visited{color:' . esc_attr( $accent ) . ';}a:hover,a:focus{color:' . esc_attr( $accent ) . ';opacity:.8;}</style>';
	}
}
add_action( 'wp_head', 'joshs_writeup_customizer_css' );

/**
 * Enqueue live-preview JS for the Customizer.
 */
function joshs_writeup_customize_preview_js() {
	wp_enqueue_script(
		'joshs-writeup-customizer',
		get_template_directory_uri() . '/assets/js/customizer.js',
		array( 'customize-preview' ),
		JOSHS_WRITEUP_VERSION,
		true
	);
}
add_action( 'customize_preview_init', 'joshs_writeup_customize_preview_js' );
