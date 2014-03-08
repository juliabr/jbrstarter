<?php
/**
 * @package Jbr
 * @subpackage Template
 */

get_header();
?>

<div id="content" role="main" class="inner clearfix">

	<?php if ( have_posts() ) : ?>

		<?php loop_pagination( array('before' => '<div id="nav-above" class="pagination">') ); ?>

		<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', get_post_type($post->ID) ); ?>

		<?php endwhile; ?>

		<?php loop_pagination( array('before' => '<div id="nav-below" class="pagination">') ); ?>

	<?php else : ?>
		
		<?php get_template_part( 'loop-error' ); ?>

	<?php endif; ?>

</div><!-- Content END-->

<?php get_footer(); ?>