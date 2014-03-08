<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage Jbr
 */
?>

<article id="post-<?php the_ID(); ?>" class="entry resume clearfix">

	<a href="<?php the_permalink(); ?>" class="entry-permalink">
		<div class="entry-image">
			<?php get_the_image('size=medium&link_to_post=0&default_image='.get_bloginfo('template_url').'/images/default.png'); ?>
		</div>
		<h1 class="entry-title">
			<?php the_title(); ?>
		</h1>
	</a>
	<div class="entry-content balance-text">
		<?php the_excerpt(); ?>
	</div>

</article>