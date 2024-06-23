<?php
/**
 * Owais-theme Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package owais-theme
 */

add_action( 'wp_enqueue_scripts', 'oceanwp_parent_theme_enqueue_styles' );

/**
 * Enqueue scripts and styles.
 */
function oceanwp_parent_theme_enqueue_styles() {
	$parent_style = "parent-style";
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'owais-theme-style',
		get_stylesheet_directory_uri() . '/style.css',
		[ $parent_style ]
	);
}
