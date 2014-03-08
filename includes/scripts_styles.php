<?php
/**
 * @package Jbr
 * @subpackage Functions
 */

 /* Enqueue scripts */
function jbr_scripts_styles() {
	global $wp_scripts;

	$scripts_dir = get_template_directory_uri().'/assets/js';
	$styles_dir = get_template_directory_uri().'/assets/css';

	//Replaces WP Jquery include by Google Libraries API
	//http://code.google.com/intl/fr-FR/apis/libraries/devguide.html
	wp_deregister_script('jquery');
	wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"), false, null, 1);
	wp_enqueue_script('jquery');

	//Add HTML5
	wp_enqueue_script('html5', $scripts_dir.'/html5.js', false, null, 0);
	$wp_scripts->add_data( 'html5', 'conditional', 'lt IE 9' );

	if ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) {

		//Custom JS for the theme
		wp_register_script('theme-custom', $scripts_dir.'/theme-custom.js', array('jquery'), null, 1);
		wp_enqueue_script('theme-custom');
		wp_localize_script( 'theme-custom', 'theme-custom', array( 
			'ajaxurl' => admin_url( 'admin-ajax.php' )
		) );

	}

	else {
		
		wp_register_script('production-min', $scripts_dir.'/build/production-min.js', array('jquery'), null, 1);
		wp_localize_script( 'production-min', 'production-min', array( 
			'ajaxurl' => admin_url( 'admin-ajax.php' )
		) );
	
	}

	//Custom fonts
	$query_args = array(
		'family' => 'Open+Sans:400italic,700italic,400,700'
	);
	wp_enqueue_style( 'jbr-fonts', add_query_arg( $query_args, "http://fonts.googleapis.com/css" ), array(), null );

	//CSS enqueue
	wp_enqueue_style( 'jbr-styles', $styles_dir.'/style.css', array(), null);


}

?>