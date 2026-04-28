<?php

/**
 * Script functions
 *
 * @author   <Author>
 * @version  1.0.0
 * @package  <Package>
 */

/**
 * Enqueue theme scripts
 */
function gulp_wp_theme_scripts()
{


	$theme_handle_prefix = 'callisto';

	/**
	 * Enqueue common scripts.
	 */
	wp_enqueue_script($theme_handle_prefix . '-scripts', get_template_directory_uri() . '/assets/js/' . $theme_handle_prefix . '.min.js', array('jquery'), '1.0.0', true);
	// wp_enqueue_script($theme_handle_prefix . '-swiper', get_template_directory_uri() . '/assets/js/swiper/swiper-bundle.min.js', array('jquery'), '1.0.0', true);
	// wp_enqueue_script($theme_handle_prefix . '-lenis', get_template_directory_uri() . '/assets/js/swiper/lenis.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'gulp_wp_theme_scripts');