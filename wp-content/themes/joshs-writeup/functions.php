<?php
/**
 * Josh's Write Up theme functions and definitions.
 *
 * @package Joshs_WriteUp
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'JOSHS_WRITEUP_VERSION', '1.0.0' );

/**
 * Theme setup.
 */
function joshs_writeup_setup() {
	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable post thumbnails.
	add_theme_support( 'post-thumbnails' );

	// Register navigation menu.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'joshs-writeup' ),
	) );

	// HTML5 markup support.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	) );

	// Add support for custom logo.
	add_theme_support( 'custom-logo', array(
		'height'      => 80,
		'width'       => 250,
		'flex-height' => true,
		'flex-width'  => true,
	) );

	// Custom image size for featured stories.
	add_image_size( 'joshs-writeup-featured', 1200, 600, true );

	// Set content width.
	if ( ! isset( $content_width ) ) {
		$content_width = 720;
	}
}
add_action( 'after_setup_theme', 'joshs_writeup_setup' );

/**
 * Register widget areas.
 */
function joshs_writeup_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'joshs-writeup' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here to appear in the sidebar.', 'joshs-writeup' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widgets', 'joshs-writeup' ),
		'id'            => 'footer-widgets',
		'description'   => esc_html__( 'Add widgets here to appear in the footer.', 'joshs-writeup' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'joshs_writeup_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function joshs_writeup_scripts() {
	wp_enqueue_style(
		'joshs-writeup-style',
		get_stylesheet_uri(),
		array(),
		JOSHS_WRITEUP_VERSION
	);

	wp_enqueue_style(
		'joshs-writeup-main',
		get_template_directory_uri() . '/assets/css/main.css',
		array( 'joshs-writeup-style' ),
		JOSHS_WRITEUP_VERSION
	);

	wp_enqueue_script(
		'joshs-writeup-main',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		JOSHS_WRITEUP_VERSION,
		true
	);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'joshs_writeup_scripts' );

/**
 * Estimate reading time for the current post.
 *
 * @return string Reading time string, e.g. "3 min read".
 */
function joshs_writeup_reading_time() {
	$content    = get_post_field( 'post_content', get_the_ID() );
	$word_count = str_word_count( wp_strip_all_tags( $content ) );
	$minutes    = max( 1, (int) ceil( $word_count / 250 ) );

	/* translators: %d: number of minutes */
	return sprintf( _n( '%d min read', '%d min read', $minutes, 'joshs-writeup' ), $minutes );
}

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
