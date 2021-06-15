<?php
/**
 * Skillcrush Starter functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
  * @since Skillcrush Starter 2.0
 */

// Enqueue scripts and styles
function skillcrushstarter_child_scripts() {
	wp_enqueue_style( 'skillcrushstarter-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array ( 'skillcrushstarter-style' ));
  wp_enqueue_style( 'wdclora-google-fonts', '//fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap');
}
add_action( 'wp_enqueue_scripts', 'skillcrushstarter_child_scripts' );

// Custom post types functions
function create_custom_post_types() {
// Create a case study custom post type
register_post_type( 'portfolios',
		array(
				'labels' => array(
						'name' => __( 'Portfolios' ),
						'singular_name' => __( 'Portfolio' )
						),
				'public' => true,
				'has_archive' => true,
				'rewrite' => array('slug' => 'portfolios'),
				)
     );
  }
// Hook this custom post type function into the theme
add_action( 'init', 'create_custom_post_types' );