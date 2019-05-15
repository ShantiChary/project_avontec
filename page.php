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
											/* About Us Banner */
											if ( $post->post_parent == '77' ) {
												$image = get_field('about_us_banner', 'option');
											}												
											/* Packaging Automation Banner */
											elseif ( $post->post_parent == '423' ) {
												$image = get_field('automation_banner', 'option');
											}	
											/* Conveying Automation & Robotics Banner */
											elseif ( $post->post_parent == '437' ) {
												$image = get_field('conveying_banner', 'option');
											}	
											/* Industrial Displays Banner */							
											elseif ( $post->post_parent == '468' ) {
												$image = get_field('industrial_displays_banner', 'option');
											}
											/* Custom Process Control RD Banner */
											elseif ( $post->post_parent == '83' ) {
												$image = get_field('custom_rd_banner', 'option');
											}
											/* Engineering Banner */
											elseif ( $post->post_parent == '79' ) {
												$image = get_field('engineering_banner', 'option');
											}
											/* About Us Banner */
											elseif ( $post->post_parent == '610' ) {
												$image = get_field('iot_banner', 'option');
											}
											/* Primary Packaging Banner */
											elseif ( $post->post_parent == '425' ) {
												$image = get_field('primary_packaging_banner1', 'option');
											}

										?>

										<?php
										if ( ! is_page('contact-us') ) { ?>
											<div class="banner-img-div">
												<img class="banner-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="890"/>

												<h1 class="banner-h1"><?php echo get_the_title(); ?> </h1>
											</div>
										<?php } ?>	

										<!-- Sub menu div -->
											<?php 
												if ( ! is_page('contact-us') ) { ?>
													<div class="sub-menu-div">

														<!-- <h3>?php echo 'More' . ' ' . get_the_title( $post->post_parent ); ?></h3> -->
														<!-- ?php
														if ($post->post_parent)	{
														$ancestors=get_post_ancestors($post->ID);
														$root=count($ancestors)-1;
														$parent = $ancestors[$root];}
														?> -->
<?php
														// $currentpage = $post->ID;
														// immediate parent page id
														// $parentpage = $post->post_parent;
														// get all parents and grand parents in an array
														$grandparent = get_post_ancestors($currentpage);
														// grand parent page id = From the array created above
														$grandparentID = $grandparent[1];
														// echo out your new array if you want to see
														// echo "<pre>"; print_r($parent); echo "</pre>";
										?>

														<h4><?php echo get_the_title( $grandparentID ); ?></h4>
														<h4><?php echo get_the_title( $post->post_parent ); ?></h4>
															<?php echo do_shortcode('[wpb_childpages]'); ?>
													
													</div>
												<?php } ?>	
									</div> <!--banner-sub-menu -->


									<!-- Get template-part content for each page -->
									<?php
											if (is_page ('about-avontec')) { 
												get_template_part( 'template-parts/content', 'about-avontec' ); 
											}
											elseif (is_page ('avontec-today')) { 
												get_template_part( 'template-parts/content', 'avontec-today' ); 
											}
											elseif (is_page ('leadership')) { 
												get_template_part( 'template-parts/content', 'leadership' ); 
											}
											elseif (is_page ('our-customers')) { 
												get_template_part( 'template-parts/content', 'our-customers' ); 
											}
											elseif (is_page ('work-avontec')) { 
												get_template_part( 'template-parts/content', 'work-avontec' ); 
											}
											elseif (is_page ('chain-conveying')) { 
												get_template_part( 'template-parts/content', 'chain-conveying' ); 
											}
											elseif (is_page ('contact-us')) { 
												get_template_part( 'template-parts/content', 'contact' );
											}
											/* Primary Packaging */
											elseif (is_page ('primary-packaging')) { 
												get_template_part( 'template-parts/content', 'primary-packaging' );
											}
											elseif (is_page ('beer')) { 
												get_template_part( 'template-parts/content', 'beer' );
											}
											elseif (is_page ('carbonated-soft-drinks')) { 
												get_template_part( 'template-parts/content', 'carbonated-soft-drinks' );
											}
											elseif (is_page ('detergents-chemicals')) { 
												get_template_part( 'template-parts/content', 'detergents-chemicals' );
											}
											elseif (is_page ('edible-oil')) { 
												get_template_part( 'template-parts/content', 'edible-oil' );
											}
											elseif (is_page ('juices')) { 
												get_template_part( 'template-parts/content', 'juices' );
											}
											elseif (is_page ('lube-oil-filling')) { 
												get_template_part( 'template-parts/content', 'lube-oil-filling' );
											}
											elseif (is_page ('milk-yoghurt')) { 
												get_template_part( 'template-parts/content', 'milk-yoghurt' );
											}
											elseif (is_page ('spirits')) { 
												get_template_part( 'template-parts/content', 'spirits' );
											}
											elseif (is_page ('water')) { 
												get_template_part( 'template-parts/content', 'water' );
											}
											elseif (is_page ('wine')) { 
												get_template_part( 'template-parts/content', 'wine' );
											}
											elseif (is_page ('kykloo-unscrambler')) { 
												get_template_part( 'template-parts/content', 'kykloo-unscrambler' );
											}

											/* IOT SOlutions */
											elseif (is_page ('kykloo-unscrambler')) { 
												get_template_part( 'template-parts/content', 'kykloo-unscrambler' );
											}
									?>
						</div>	<!-- internal-content-div -->
					
						<?php get_sidebar(); ?>

					</div> <!-- internal-div -->
	 
					<div class="sec-5">
							<?php
								get_template_part( 'template-parts/content', 'exhibitions-news' );
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
