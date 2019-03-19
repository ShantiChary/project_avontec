<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package project_avontec
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="footer-nav-container">
			<nav id="site-navigation" class="footer-navigation">
				<p>Site Map</p>
				<br>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'footer_menu',
					'menu_id'        => 'footer-menu',
				) );
				?>
			</nav><!-- #site-navigation -->
		</div> <!-- footer-nav-container -->

		<div class="site-info">	
			<!-- ?php echo do_shortcode('[mc4wp_form]'); ?> -->
			<p class="copy">&copy; <?php echo date('Y'); ?> Avontec</p>
			<!-- <p class="credits">Check out the <a href="/credits/">attribution page.</a></p> -->
		</div><!-- .site-info -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
