<?php
/**
 * Loop Error Template
 *
 * Displays an error message when no posts are found.
 *
 * @package Jbr
 * @subpackage Template
 */
?>

<article id="post-0" class="post no-results not-found">

	<h1 class="entry-title"><?php _e('Page not found', 'jbr'); ?></h1>

	<div class="entry-content">
		<p><?php _e('the page you were looking for doesn\'t exist', 'jbr'); ?></p> 
		<p><a href="<?php bloginfo('url'); ?>" title="<?php _e('back to homepage', 'jbr'); ?>><?php _e('back to homepage', 'jbr'); ?></a></p>
	</div>

</article>