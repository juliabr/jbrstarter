<?php
/**
 * @package Jbr
 * @subpackage Functions
 */
 
remove_action('init', 'wp_widgets_init', 1);

//see http://scotty-t.com/2012/01/30/understanding-mysql-in-wordpress/
add_action('parse_query', 'jbr_optimize_query');
function jbr_optimize_query($query, $error = true ) {
	if ( !is_home() && !is_archive() ) return;

	if( is_home() ) {
		$query->query_vars['no_found_rows'] = true;
	}
	//$query->query_vars['update_post_meta_cache'] = false;
	$query->query_vars['update_post_term_cache'] = false;
}

add_filter('wp_headers', 'jbr_add_header');

function jbr_add_header($headers) {

    $headers['X-UA-Compatible'] = 'IE=edge,chrome=1';
    return $headers;

}


?>