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
		<div class="footer-main-container">
			<div class="footer-nav-container footer-item">
				<nav id="site-navigation" class="footer-navigation">
					<h3>Site Map</h3>
					<?php
					wp_nav_menu( array(
						'theme_location' => 'footer_menu',
						'menu_id'        => 'footer-menu',
					) );
					?>
				</nav><!-- #site-navigation -->
			</div> <!-- footer-nav-container -->

			<div class="footer-contact-address footer-item">
				<h3 class="address-title">Address:</h3>
				<br>
				<p><?php the_field('company_name', 'option'); ?></p>
				<p><?php the_field('address_line_1', 'option'); ?></p>
				<p><?php the_field('address_line_2', 'option'); ?></p>			
				<p><?php the_field('city', 'option'); ?></p>
				<p><?php the_field('postal_code', '-', 'option'); ?></p>
				<p><?php the_field('country', 'option'); ?></p>
			</div>	

			<div class="footer-contact-phone footer-item">
				<h3 class="phone-title">Phone:</h3>
				<br>
				<p><a class="telephone1" href="<?php the_field('phone_number_1', 'option'); ?>"><?php the_field('phone_number_1', 'option'); ?></a> </p>
				<p><a class="telephone2" href="<?php the_field('phone_number_2', 'option'); ?>"><?php the_field('phone_number_2', 'option'); ?></a></p>
				<p><a class="fax" href="<?php the_field('fax_number', 'option'); ?>"><?php the_field('fax_number', 'option'); ?></a></p> 
			</div>

			<div class="footer-contact-email footer-item">
				<h3 class="email-title">Email:</h3>
				<br>
				<p><?php the_field('email_title_1', 'option'); ?></p>
				<a class="email1" href="<?php the_field('email_address_1', 'option'); ?>"><?php the_field('email_address_1', 'option'); ?></a> 
				<p><?php the_field('email_title_2', 'option'); ?></p>
				<a class="email2" href="<?php the_field('email_address_2', 'option'); ?>"><?php the_field('email_address_2', 'option'); ?></a> 
			</div>

		</div>

		<div class="site-info">	
			<!-- ?php echo do_shortcode('[mc4wp_form]'); ?> -->
			<p class="copy">Copyright &copy; <?php echo date('Y'); ?> Avontec Automation Pvt Ltd. All Rights Reserved</p>        <p class="site-design">Designed by <a href="https://www.arusansystems.com" target="_blank">Arusan.com</a></p>
		</div><!-- .site-info -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
