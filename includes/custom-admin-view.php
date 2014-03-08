<?php
/**
 * @package Jbr
 * @subpackage Functions
 */

/* Add custom CSS to admin panel */
add_action('admin_head', 'jbr_admin_head');

function jbr_admin_head() {
	echo '<link rel="stylesheet" type="text/css" href="'.get_template_directory_uri().'/css/admin.css">';
}

/* Add custom JS to admin footer */
add_action('admin_print_footer_scripts', 'jbr_admin_print_footer_scripts');
function jbr_admin_print_footer_scripts() {


}


?>