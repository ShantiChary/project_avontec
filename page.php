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
									<!-- Banner + sub-menu section -->
									<div class="banner-sub-menu">

										<?php 
										/* Display internal sub-page banner based on top most PARENT PAGE ID */
											if ($post->post_parent)	{
												$ancestors=get_post_ancestors($post->ID);
												$root=count($ancestors)-1;
												$parent = $ancestors[$root];
											} else {
												$parent = $post->ID;
											}

											/* About Us Banner */
											if ( $parent == '77' ) {
												$image = get_field('about_us_banner', 'option');
											}									
											/* Products & Services Banner */
											elseif ( $parent == '1059' ) {
												$image = get_field('products_services_banner', 'option');
											}
											/* Industries Banner */
											elseif ( $parent == '1111' ) {
												$image = get_field('industries_banner', 'option');
											}
											/* Our Partners Banner */
											elseif ( $parent == '1057' ) {
												$image = get_field('our_partners_banner', 'option');
											}	
											/* Core Values Banner */
											elseif ( is_page(1055)) {
												$image = get_field('core_values_banner', 'option');
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
															<?php if ( !empty( the_content( $post->post_parent ) ) ) { ?>
																<a href="<?php echo get_permalink( $post->post_parent ); ?>">
																<?php echo get_the_title( $post->post_parent ); ?>
																</a>
															<?php } 
															else { ?>
																<?php echo get_the_title( $post->post_parent ); ?>
															<?php } ?>
															</h4>

															<ul>
																<?php wp_list_pages("title_li=&child_of=$parent" ); ?>
															</ul>
														</div>

												</div>													
											<?php endif; 
											}
											?>

									</div> <!--banner-sub-menu -->

									<!-- Get template-part content for each page -->
									<?php
											/* About Us */
											if (is_page (409)) { 
												get_template_part( 'template-parts/content', 'about-avontec' ); 
											}
											elseif (is_page (415)) { 
												get_template_part( 'template-parts/content', 'avontec-today' ); 
											}
											elseif (is_page (413)) { 
												get_template_part( 'template-parts/content', 'leadership' ); 
											}
											elseif (is_page (417)) { 
												get_template_part( 'template-parts/content', 'our-customers' ); 
											}
											elseif (is_page (981)) { 
												get_template_part( 'template-parts/content', 'projects' ); 
											}
											elseif (is_page (975)) { 
												get_template_part( 'template-parts/content', 'news' ); 
											}
											elseif (is_page (421)) { 
												get_template_part( 'template-parts/content', 'work-avontec' ); 
											}

											/* Contact Us page */
											elseif (is_page ('contact-us')) { 
												get_template_part( 'template-parts/content', 'contact-us' );
											}

											/* Primary Packaging */
											elseif (is_page (425)) { 
												get_template_part( 'template-parts/content', 'primary-packaging' );
											}
											elseif (is_page (788)) { 
												get_template_part( 'template-parts/content', 'beer' );
											}
											elseif (is_page (807)) { 
												get_template_part( 'template-parts/content', 'carbonated-soft-drinks' );
											}
											elseif (is_page (824)) { 
												get_template_part( 'template-parts/content', 'detergents-chemicals' );
											}
											elseif (is_page (826)) { 
												get_template_part( 'template-parts/content', 'edible-oil' );
											}
											elseif (is_page (828)) { 
												get_template_part( 'template-parts/content', 'juices' );
											}
											elseif (is_page (830)) { 
												get_template_part( 'template-parts/content', 'lube-oil-filling' );
											}
											elseif (is_page (832)) { 
												get_template_part( 'template-parts/content', 'milk-yoghurt' );
											}
											elseif (is_page (834)) { 
												get_template_part( 'template-parts/content', 'spirits' );
											}
											elseif (is_page (836)) { 
												get_template_part( 'template-parts/content', 'water' );
											}
											elseif (is_page (838)) { 
												get_template_part( 'template-parts/content', 'wine' );
											}

											/* Secondary Packaging */
											elseif (is_page (427)) { 
												get_template_part( 'template-parts/content', 'secondary-packaging' );
											}
											/* Tertiary Packaging */
											elseif (is_page (429)) { 
												get_template_part( 'template-parts/content', 'tertiary-packaging' );
											}

											/* Chain Conveyors */
											elseif (is_page (439)) { 
												get_template_part( 'template-parts/content', 'chain-conveyors' );
											}
											elseif (is_page (1072)) { 
												get_template_part( 'template-parts/content', 'aluminium-flexible-chains' );
											}
											elseif (is_page (1074)) { 
												get_template_part( 'template-parts/content', 'stainless-steel-flexible-chains' );
											}

											/* Modular Conveyors */
											elseif (is_page (441)) { 
												get_template_part( 'template-parts/content', 'modular-conveyors' );
											}
											/* Pallet & Bucket Conveyors */
											elseif (is_page (445)) { 
												get_template_part( 'template-parts/content', 'pallet-bucket-conveyors' );
											}
											/* Elevating Solutions */
											elseif (is_page (443)) { 
												get_template_part( 'template-parts/content', 'elevating-solutions' );
											}
											elseif (is_page (1078)) { 
												get_template_part( 'template-parts/content', 'spiral-conveyors' );
											}
											elseif (is_page (1080)) { 
												get_template_part( 'template-parts/content', 'incline-conveyors' );
											}
											elseif (is_page (1082)) { 
												get_template_part( 'template-parts/content', 'overhead-conveyors' );
											}

											/* Industrial Displays */
											elseif (is_page (1092)) { 
												get_template_part( 'template-parts/content', 'single-line-displays' );
											}
											elseif (is_page (622)) { 
												get_template_part( 'template-parts/content', 'combination-displays' );
											}
											elseif (is_page (626)) { 
												get_template_part( 'template-parts/content', 'counters-timers-target-displays' );
											}
											elseif (is_page (628)) { 
												get_template_part( 'template-parts/content', 'clocks-gprs-ntp-poe' );
											}
											elseif (is_page (1099)) { 
												get_template_part( 'template-parts/content', 'large-displays-for-plants' );
											}
											elseif (is_page (1101)) { 
												get_template_part( 'template-parts/content', 'large-displays-for-power' );
											}
											elseif (is_page (1103)) { 
												get_template_part( 'template-parts/content', 'large-displays-alphanumeric' );
											}
											elseif (is_page (1105)) { 
												get_template_part( 'template-parts/content', 'large-displays-for-hvac' );
											}
											elseif (is_page (1089)) { 
												get_template_part( 'template-parts/content', 'mimic-panels' );
											}
											
											/* Systems Integration */
											elseif (is_page (435)) { 
												get_template_part( 'template-parts/content', 'robotics' );
											}
											elseif (is_page (433)) { 
												get_template_part( 'template-parts/content', 'line-integration' );
											}

											/* Manufacturing IIOT */
											elseif (is_page (610)) { 
												get_template_part( 'template-parts/content', 'manufacturing-iiot' );
											}
											/* Digital Transformation */
											elseif (is_page (1145)) { 
												get_template_part( 'template-parts/content', 'digital-transformation' );
											}
											/* Custom Instrumentaiton R&D */
											elseif (is_page (83)) { 
												get_template_part( 'template-parts/content', 'custom-instrumentation-rd' );
											}

											/* Engineering Services */
											elseif (is_page (1151)) { 
												get_template_part( 'template-parts/content', 'application-design-services' );
											}
											elseif (is_page (1153)) { 
												get_template_part( 'template-parts/content', 'complete-engineered-line-solutions' );
											}
											elseif (is_page (460)) { 
												get_template_part( 'template-parts/content', 'controls-engineering' );
											}
											elseif (is_page (644)) { 
												get_template_part( 'template-parts/content', 'business-development' );
											}
											elseif (is_page (642)) { 
												get_template_part( 'template-parts/content', 'technical-intervention' );
											}

											/* Support */
											elseif (is_page (464)) { 
												get_template_part( 'template-parts/content', 'annual-maintenance-contracts' );
											}
											elseif (is_page (1160)) { 
												get_template_part( 'template-parts/content', 'application-notes' );
											}
											elseif (is_page (1162)) { 
												get_template_part( 'template-parts/content', 'tools' );
											}
											elseif (is_page (466)) { 
												get_template_part( 'template-parts/content', 'spare-parts-change-parts' );
											}
											elseif (is_page (1164)) { 
												get_template_part( 'template-parts/content', 'technical-library' );
											}
											elseif (is_page (1166)) { 
												get_template_part( 'template-parts/content', 'product-faqs' );
											}

											/* Industries */
											elseif (is_page (1119)) { 
												get_template_part( 'template-parts/content', 'food-beverage' );
											}
											elseif (is_page (1121)) { 
												get_template_part( 'template-parts/content', 'home-personal-care' );
											}
											elseif (is_page (1123)) { 
												get_template_part( 'template-parts/content', 'pharma' );
											}
											elseif (is_page (1125)) { 
												get_template_part( 'template-parts/content', 'petrochemical' );
											}
											elseif (is_page (1127)) { 
												get_template_part( 'template-parts/content', 'automotive' );
											}
											elseif (is_page (1129)) { 
												get_template_part( 'template-parts/content', 'steel' );
											}
											elseif (is_page (1131)) { 
												get_template_part( 'template-parts/content', 'power' );
											}
											elseif (is_page (1133)) { 
												get_template_part( 'template-parts/content', 'loems' );
											}
								
											/* Our Partners */
											elseif (is_page (1192)) { 
												get_template_part( 'template-parts/content', 'flexcon-conveyor-parts' );
											}
											elseif (is_page (840)) { 
												get_template_part( 'template-parts/content', 'kykloo-unscrambling-solutions' );
											}
											elseif (is_page (1194)) { 
												get_template_part( 'template-parts/content', 'filber-filling-solutions' );
											}

											/* Core Values */
											elseif (is_page (1055)) { 
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
