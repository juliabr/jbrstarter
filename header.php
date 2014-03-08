<?php
/**
 * @package Jbr
 * @subpackage Template
 */
?>
<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" dir="ltr" lang="fr-FR"> <![endif]-->
<!--[if IE 7 ]> <html class="no-js ie7" dir="ltr" lang="fr-FR"> <![endif]-->
<!--[if IE 8 ]> <html class="no-js ie8" dir="ltr" lang="fr-FR"> <![endif]-->
<!--[if IE 9 ]> <html class="no-js ie9" dir="ltr" lang="fr-FR"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width">
	<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged, $the_area;

	wp_title( '|', true, 'right' );

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' - ' . sprintf( __( 'Page %s', 'jbr' ), max( $paged, $page ) );

	// Add the blog name.
	bloginfo( 'name' );
	echo " - ".get_bloginfo( 'description', 'display' );

	?></title>

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="wrapper">

	<div id="main-header-container" class="container">

		<header id="main-header" role="banner" class="inner clearfix">
			
			<a href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo( 'description' ); ?> - <?php _e('back to homepage', 'jbr'); ?>" rel="home">
				<hgroup id="main-title">
					<h1><?php bloginfo( 'name' ); ?></h1>
					<h2><?php bloginfo( 'description' ); ?></h2>
				</hgroup>
			</a>

			<!-- Main menu -->
			<nav id="main-nav" class="clearfix">
				<?php wp_nav_menu( array(
					'menu_id' => 'main-menu',
					'container' => 'nav',
					'container_class' => 'main-nav', 
					'container_id'    => 'main-nav',
					'theme_location' => 'main-menu',
					'items_wrap' => '<ul class="menu clearfix">%3$s</ul>',
					'container' => false
				) ); ?>
			</nav>

		</header>

	</div>