<?php
/**
 *  The Indigo Mill theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */
/**
 * Enqueue scripts and styles.
 */
function theindigomill_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_script( 'theindigomill-scripts', get_stylesheet_directory_uri() . '/js/main.js', array(), 1.0, true );
}
add_action( 'wp_enqueue_scripts', 'theindigomill_styles' );
