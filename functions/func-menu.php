<?php

/**
 * Menu functions
 *
 * @author   <Author>
 * @version  1.0.0
 * @package  <Package>
 */

/**
 * Register nav menus
 */
function gulp_wp_register_menus()
{
	register_nav_menus(
		array(
			'header-menu' => __('Header Menu'),
			'primary-menu' => __('primary Menu'),
			'footer-menu' => __('footer Menu'),
		)
	);
}
add_action('init', 'gulp_wp_register_menus');