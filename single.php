<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
											if (is_single() && is_post_type('conveying')){
												// if ((is_page ('about-avontec')) || (is_page ('share-holders')) || (is_page ('partners')) || (is_page ('client-list'))  || (is_page ('case-studies')) || (is_page ('work-avontec'))) { 
													$image = get_field('conveying_banner', 'option');
												// }
											}
											if (is_single() && is_post_type('automation')){
												// if ((is_page ('about-avontec')) || (is_page ('share-holders')) || (is_page ('partners')) || (is_page ('client-list'))  || (is_page ('case-studies')) || (is_page ('work-avontec'))) { 
													$image = get_field('automation_banner', 'option');
												// }
											}
										?>

										<div class="banner-img-div">
											<img class="banner-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="875"/>

											<h1 class="banner-h1"><?php echo get_the_title(); ?> </h1>
										</div>

										<!-- Sub menu div -->
										<div class="sub-menu-div">

											<?php 
												$post_type = get_post_type_object( get_post_type($post) );

												echo '<h3>';
												echo 'More' . ' ' . $post_type->label ; 
												echo '</h3>';


											$children = get_pages( array( 'child_of' => $post_type, ) );



											echo '<p>';
											echo $children->label;
											echo '</p>';
											?>
										</div>
									</div> <!--banner-sub-menu -->

									<!-- Get template-part content for each page -->
									<?php
											// if (is_page ('about-avontec')) { 
											// 	get_template_part( 'template-parts/content', 'about-avontec' ); 
											// }
											// elseif (is_page ('contact-us')) { 
											// 	get_template_part( 'template-parts/content', 'contact' ); 
											// }
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
