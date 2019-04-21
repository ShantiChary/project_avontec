<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package project_avontec
 */

get_header('internal');

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
			while ( have_posts() ) :
				the_post(); ?>

				<section id="internal-page-section">

					<div class="internal-page-div">

						<div class="internal-content-div">
									<!-- About Us banner + sub-menu section -->
									<div class="banner-sub-menu">

										<?php 
											if ((is_page ('about-avontec')) || (is_page ('share-holders')) || (is_page ('partners')) || (is_page ('client-list'))  || (is_page ('case-studies')) || (is_page ('work-avontec'))) { 
												$image = get_field('about_us_banner', 'option');
											}
										
											if ((is_page ('description')) || (is_page ('contact-us')) || (is_page ('key-projects')) || (is_page ('events-news'))  || (is_page ('video-page')) || (is_page ('site-policy'))) { 
												$image = get_field('custom_rd_banner', 'option');
											}

											if ((is_page ('efficiency-management')) || (is_page ('application-management')) || (is_page ('machine-upgrade')) || (is_page ('annual-maintenance-contract'))  || (is_page ('spare-parts-change-parts'))) { 
												$image = get_field('engineering_banner', 'option');
											}

										?>

										<div class="banner-img-div">
											<img class="banner-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="875"/>

											<h1 class="banner-h1"><?php echo get_the_title(); ?> </h1>
										</div>

										<!-- Sub menu div -->
										<div class="sub-menu-div">

										<h3><?php echo 'More' . ' ' . get_the_title( $post->post_parent ); ?></h3>
											<?php echo do_shortcode('[wpb_childpages]'); ?>
										</div>
									</div> <!--banner-sub-menu -->

									<!-- Get template-part content for each page -->
									<?php
											if (is_page ('about-avontec')) { 
												get_template_part( 'template-parts/content', 'about-avontec' ); 
											}
											elseif (is_page ('contact-us')) { 
												get_template_part( 'template-parts/content', 'contact' ); 
											}
									?>
						</div>	<!-- internal-content-div -->
					
						<?php get_sidebar(); ?>

					</div> <!-- internal-div -->
	 
					<div class="sec-4">
							<?php
								get_template_part( 'template-parts/content', 'newsletter' );
							?>
					</div>

				</section> <!-- internal-page-section -->

			<?php
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
