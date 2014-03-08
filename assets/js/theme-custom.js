/*
Theme Name: Jbr
Theme URI: http://site.com
Author: Julia Briend
Author URI: http://juliabr.com
Version: 1.0
*/

$(function() {

	$(window).resize(function() {
		if( $('body').innerWidth() < 700 ) {
			$('body').addClass('small-screen');
		}
		else {
			$('body').removeClass('small-screen');
		}
	}).resize();


});