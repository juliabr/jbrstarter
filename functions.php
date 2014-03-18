<?php
/**
 * @package Jbr
 * @subpackage Functions
 * @version 1.0
 * @author Julia Briend
 */

/* Theme setup */
add_action( 'after_setup_theme', 'jbr_setup_theme' );
add_action( 'after_switch_theme', 'jbr_activation' ); //when theme is activated
add_action( 'switch_theme', 'jbr_deactivation' ); //when theme is de-activated

function jbr_setup_theme() {

	/* WP Optimization */
	require_once( trailingslashit( TEMPLATEPATH ) . 'includes/wp-optimization.php' );

	/* Load functions for use in templates */
	require_once( trailingslashit( TEMPLATEPATH ) . 'includes/context.php' );

	/* Load default filters */
	require_once( trailingslashit( TEMPLATEPATH ) . 'includes/filters.php' );

	if ( is_admin() ) {
		require_once( trailingslashit( TEMPLATEPATH ) . 'includes/custom-admin-view.php' );
		require_once( trailingslashit( TEMPLATEPATH ) . 'includes/theme-options.php' );
	}

	/* Enqueue scripts & styles */
	require_once( trailingslashit( TEMPLATEPATH ) . 'includes/scripts_styles.php' );
	add_action('wp_enqueue_scripts', 'jbr_scripts_styles');

	/* Load extensions */
	require_once( trailingslashit( TEMPLATEPATH ) . 'extensions/loop-pagination.php' );
	require_once( trailingslashit( TEMPLATEPATH ) . 'extensions/get-the-image.php' );
	require_once( trailingslashit( TEMPLATEPATH ) . 'extensions/entry-views.php' );

	add_editor_style('assets/css/editor-style.css');

	//add_image_size( 'tmp-large', 575, 320, 1 );

	/* Add support for WordPress features. */
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails', array( 'post' ) );

	/* Nav menus */
	register_nav_menu( 'main-menu', __('Main menu', 'jbr') );

}

function jbr_activation() {

	flush_rewrite_rules();

}

function jbr_deactivation() {

	flush_rewrite_rules();
	
}

?>