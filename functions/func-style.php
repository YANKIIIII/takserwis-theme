<?php

/**
 * Style functions
 *
 * @author   <Author>
 * @version  1.0.0
 * @package  <Package>
 */

/**
 * Enqueue theme styles.
 */

function gulp_wp_theme_styles()
{

	/**
	 * Set a script handle prefix based on theme name.
	 * Note that this should be the same as the `themePrefix` var set in your Gulpfile.js.
	 */
	$theme_handle_prefix = 'callisto';

	wp_enqueue_style($theme_handle_prefix . '-styles', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all');
	wp_enqueue_style($theme_handle_prefix . '-styles2', get_template_directory_uri() . '/assets/css/style2.css', array(), filemtime(get_template_directory() . '/assets/css/style2.css'), 'all');
	wp_enqueue_style($theme_handle_prefix . '-style3-ls-excl.css', get_template_directory_uri() . '/assets/css/style3-ls-excl.css', array(), '1.0.0', 'all');
	// wp_enqueue_style($theme_handle_prefix . '-style-swiper', get_template_directory_uri() . '/assets/js/swiper/swiper-bundle.min.css', array(), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'gulp_wp_theme_styles');