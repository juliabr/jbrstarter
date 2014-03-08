<?php
/**
 * @package Jbr
 * @subpackage Functions
 */

 /**
 * Custom excerpts
 */
add_filter('excerpt_more', 'jbr_excerpt_more');
function jbr_excerpt_more($more) {
	global $post;
	return '... <a href="'. get_permalink($post->ID) . '" class="more">'.__('More', 'jbr').'</a>';
}

add_filter( 'excerpt_length', 'jbr_excerpt_length', 999 );
function jbr_excerpt_length( $length ) {
	if( is_archive('movie') ) return 35;
	return 40;
}

/**
 * Remove title from menu
 */
add_filter('wp_list_categories','jbr_split_category_menu');
function jbr_split_category_menu($items){
	$items = preg_replace( '%title="([^"]+)"%', '', $items );
	return $items;
}

/**
 * We don't want h1 in contents
 */
add_filter( 'the_content', 'jbr_content_markup' );
add_filter( 'term_description', 'jbr_content_markup' );
function jbr_content_markup($content) {
	if( is_single('movie') ) {
		//Replace h1 to h2
		$content = preg_replace('@<(/?)h1)>@', '<$1h2>', $content);
	}
	return $content;
}

/**
 * French Typo
 */
 add_filter( 'the_content', 'jbr_correct_typo' );
 function jbr_correct_typo($content) {
	$content = preg_replace('@ (:|\?|!|»)@', '&nbsp;$1', $content);
	$content = preg_replace('@(«) @', '$1&nbsp;', $content);
	return $content;
}

/**
 * Customize TinyMCE style
 */
add_filter( 'tiny_mce_before_init', 'jbr_custom_tinymce' );  
function jbr_custom_tinymce( $tools ) {  

	$tools['theme_advanced_blockformats'] = 'p,blockquote,h2,h3,h4,h5,h6,div';

	return $tools;
}

?>