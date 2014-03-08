<?php
/**
 * @package Jbr
 * @subpackage Functions
 */

/**
 * Create excerpt
 */
function jbr_shorten_text($title, $length=27) {
	$title = strip_tags($title);
	if(strlen($title) > $length) {
		$title = substr($title, 0, $length);
		$title = preg_replace('/[,\.\?\!:;\s()-]*?\s\S*?$/', '...', $title, 1);
	}
	return $title;
}

?>