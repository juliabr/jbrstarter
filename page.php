<?php
/**
 * @package Jbr
 * @subpackage Template
 */

get_header();
?>

<div id="content" role="main" class="inner clearfix">

	<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" class="entry hentry">
		
		<h1 class="entry-title"><?php the_title(); ?></h1>
		
		<?php if(function_exists('bcn_display')) : ?>
		<div class="breadcrumbs">
			<?php bcn_display(); ?>
		</div>
		<?php endif; ?>
						
		<div class="entry-content">
			<?php the_content(); ?>
		</div>

	</article>


	<?php endwhile; ?>
	<?php else : ?>
		
	<?php get_template_part( 'loop-error' ); ?>

	<?php endif; ?>

</div><!-- Content END-->

<?php get_footer(); ?>