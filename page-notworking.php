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

// if (( 0 == $post->post_parent ) && ($post->ID == '77')) {
// 	// $parents = get_post_ancestors( $post->ID );
// 	$image = get_field('about_us_banner', 'option');
// }	



											/* About Us Banner */
											// if ( $post->post_parent == '77' ) {
											if( ! is_page('about-us') )
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
											/* Products-Services Banner */
											elseif ( $post->post_parent == '1059' ) {
												$image = get_field('iot_banner', 'option');
											}
											/* Primary Packaging Banner */
											elseif ( $post->post_parent == '425' ) {
												$image = get_field('primary_packaging_banner1', 'option');
											}

											/* Our Partners Banner */
											elseif ( $post->post_parent == '1057' ) {
												$image = get_field('iot_banner', 'option');
											}

											/* Core Values Banner */
											$cvID=get_post_meta( $item->ID, '_menu_item_object_id' );
											elseif ( $cvID == '1055' ) {
												
												$image = get_field('iot_banner', 'option');
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
											if (( ! is_page('contact-us') ) && ( ! is_page('custom-rd') ) && ( ! is_page('digital-transformation') ) && ( ! is_page('iot-solutions') ) && ( ! is_page('core-values') )) { ?>
												<div class="sub-menu-div">										
													<?php
													global $wp_query;
													if( empty($wp_query->post->post_parent) ) {
														$parent = $wp_query->post->ID;
													} else {
														$parent = $wp_query->post->post_parent;
													} ?>

														<?php if(wp_list_pages("title_li=&child_of=$parent&echo=0" )): ?>
														<div>
															<h4>
																<?php echo get_the_title( $post->post_parent ); ?>
															<?php echo '</h4>';
															?>
															<ul>
																<?php wp_list_pages("title_li=&child_of=$parent" ); ?>
															</ul>
														</div>

												</div>													
											<?php endif; 
											}
											?>

									</div> <!--banner-sub-menu -->

									<!------------------------------------------------------------------------- -->

									<!-- Get template-part content for each page -->
									<?php
											/* ABOUT US*/
											if ( is_page('about-us') ) { 
												get_template_part( 'template-parts/content', 'about-avontec' ); 
											}
											elseif ($post->ID == 415) { 
												get_template_part( 'template-parts/content', 'avontec-today' ); 
											}
											elseif ($post->ID == 413)  { 
												get_template_part( 'template-parts/content', 'leadership' ); 
											}
											elseif ($post->ID == 417) { 
												get_template_part( 'template-parts/content', 'our-customers' ); 
											}
											elseif ($post->ID == 421) { 
												get_template_part( 'template-parts/content', 'work-avontec' ); 
											}
											elseif ($post->ID == 981) { 
												get_template_part( 'template-parts/content', 'projects' ); 
											}
											elseif ($post->ID == 975) { 
												get_template_part( 'template-parts/content', 'news' ); 
											}
											/* END About Us */

											/* Contact Us */
											elseif ($post->ID == 87) { 
												get_template_part( 'template-parts/content', 'contact-us' );
											}

											/* PRODUCTS/SERVICES */
											/* Automated Machinery */
											/* Primary Packaging */
											elseif ($post->ID == 425) { 
												get_template_part( 'template-parts/content', 'primary-packaging' );
											}
											elseif ($post->ID == 788) { 
												get_template_part( 'template-parts/content', 'beer' );
											}
											elseif ($post->ID == 807) { 
												get_template_part( 'template-parts/content', 'carbonated-soft-drinks' );
											}
											elseif ($post->ID == 824) { 
												get_template_part( 'template-parts/content', 'detergents-chemicals' );
											}
											elseif ($post->ID == 826) { 
												get_template_part( 'template-parts/content', 'edible-oil' );
											}
											elseif ($post->ID == 828) { 
												get_template_part( 'template-parts/content', 'juices' );
											}
											elseif ($post->ID == 830) { 
												get_template_part( 'template-parts/content', 'lube-oil-filling' );
											}
											elseif ($post->ID == 832) { 
												get_template_part( 'template-parts/content', 'milk-yoghurt' );
											}
											elseif ($post->ID == 834) { 
												get_template_part( 'template-parts/content', 'spirits' );
											}
											elseif ($post->ID == 836) { 
												get_template_part( 'template-parts/content', 'water' );
											}
											elseif ($post->ID == 838) { 
												get_template_part( 'template-parts/content', 'wine' );
											}
											/* END Primary Packaging */
											/* Secondary Packaging */
											elseif ($post->ID == 427) { 
												get_template_part( 'template-parts/content', 'secondary-packaging' );
											}
											/* Tertiary Packaging */
											elseif ($post->ID == 429) { 
												get_template_part( 'template-parts/content', 'tertiary-packaging' );
											}

											/* CONVEYING SYSTEMS */
											/* Chain Conveying */
											elseif ($post->ID == 439) { 
												get_template_part( 'template-parts/content', 'chain-conveying' );
											}
											elseif ($post->ID == 1072) { 
												get_template_part( 'template-parts/content', 'aluminum-flexible-chains' );
											}
											elseif ($post->ID == 1074) { 
												get_template_part( 'template-parts/content', 'stainless-steel-flexible-chains' );
											}
											/* Modular Conveying */
											elseif ($post->ID == 441) { 
												get_template_part( 'template-parts/content', 'modular-conveying' );
											}
											elseif ($post->ID == 445) { 
												get_template_part( 'template-parts/content', 'pallet-bucket-conveying' );
											}
											elseif ($post->ID == 443) { 
												get_template_part( 'template-parts/content', 'elevating-solutions' );
											}
											elseif ($post->ID == 1078) { 
												get_template_part( 'template-parts/content', 'spiral-conveyors' );
											}
											elseif ($post->ID == 1080) { 
												get_template_part( 'template-parts/content', 'incline-conveyors' );
											}
											elseif ($post->ID == 1082) { 
												get_template_part( 'template-parts/content', 'overhead-conveyors' );
											}


											elseif ($post->ID == 409) { 
												get_template_part( 'template-parts/content', 'robotics' );
											}
											elseif ($post->ID == 409) { 
												get_template_part( 'template-parts/content', 'line-integration' );
											}

											/* Industrial Displays */
											elseif ($post->ID == 409) { 
												get_template_part( 'template-parts/content', 'large-displays' );
											}
											elseif ($post->ID == 409) { 
												get_template_part( 'template-parts/content', 'jumbo-displays-2-12' );
											}
											elseif ($post->ID == 409) { 
												get_template_part( 'template-parts/content', 'multi-line-2-sided' );
											}
											elseif ($post->ID == 409) { 
												get_template_part( 'template-parts/content', 'counter-timers-target' );
											}
											elseif ($post->ID == 409) { 
												get_template_part( 'template-parts/content', 'clocks-gprs-ntp-poe' );
											}
											elseif ($post->ID == 409) { 
												get_template_part( 'template-parts/content', 'protocols-and-inputs' );
											}
											

											/* Our Partners */
											elseif ($post->ID == 1192) { 
												get_template_part( 'template-parts/content', 'flexcon-conveyor-parts' );
											}
											elseif ($post->ID == 840) { 
												get_template_part( 'template-parts/content', 'kykloo-unscrambling-solutions' );
											}
											elseif ($post->ID == 1194) { 
												get_template_part( 'template-parts/content', 'filber-filling-solutions' );
											}

											/* Core Values */
											elseif ($post->ID == 1055) { 
												get_template_part( 'template-parts/content', 'core-values' );
											}
									?>
						</div>	<!-- internal-content-div -->
					
						<?php get_sidebar(); ?>

					</div> <!-- internal-page-div -->
	 
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
