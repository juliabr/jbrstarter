<?php
/**
 * @package Jbr
 * @subpackage Template
 */
?>
	<div id="main-footer-container" class="container">

		<footer id="main-footer" class="inner clearfix">
			<div id="main-footer-first">
				<p>Copyright &copy; <?php echo date('Y'); ?> - <a href="<?php echo home_url('/legal/'); ?>"<?php if(!is_home()) echo ' rel="nofollow"'; ?>><?php _e('Legal infos', 'jbr'); ?></a> - <a href="<?php echo home_url('/credits/'); ?>"<?php if(!is_home()) echo ' rel="nofollow"'; ?>><?php _e('Credits', 'jbr'); ?></a></p>
			</div>
		</footer>

	</div><!-- .end main-footer-container -->

</div><!-- .end wrapper -->

<?php wp_footer(); ?>

<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-XX-x', 'site.com');
	ga('send', 'pageview');

</script>

</body>