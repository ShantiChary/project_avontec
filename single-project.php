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
											/* About Us -Projects Banner */
											// if ( $post->post_parent == '981' ) {
												$image = get_field('about_us_banner', 'option');
											// }
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
														// $grandparent = get_post_ancestors($currentpage);
														// grand parent page id = From the array created above
														// $grandparentID = $grandparent[1];
														// echo out your new array if you want to see
														// echo "<pre>"; print_r($parent); echo "</pre>";
														?>

														<!-- <h4>?php echo get_the_title( $grandparentID ); ?></h4> -->
														<!-- <h4>?php echo get_the_title( $post->post_parent ); ?></h4> --?
														?php echo do_shortcode('[eyesore_childpages]'); ?> -->


														<?php
														// Define the WP query
														$args = array(
															'post_type' => 'project',//Swap in your CPT
															'posts_per_page' => -1,
															'order' => 'ASC',
															'orderby' => 'title'
														);

														$query = new WP_Query( $args );

														if ($query->have_posts()) {

															// Output the post titles in a list
															echo '<ul id="extra-menu">';

															// echo '<h4>';
															// if ( 0 == $post->post_parent ) {
															// 	echo get_the_title( $post->post_parent );
															// } else {
															// 	$parents = get_post_ancestors( $post->ID );
															// 	echo apply_filters( "the_title", get_the_title( end ( $parents ) ) );
															// }
															// echo '</h4>'; 

																echo '<h4>';
																$post_type = get_post_type_object( get_post_type($post) );
																echo $post_type->label; 
																echo '</h4>';

																// Start the Loop
																while ( $query->have_posts() ) : $query->the_post(); ?>

																<li class="extra-menu-item" id="post-<?php the_ID(); ?>">
																	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
																</li>

																<?php endwhile;

																echo '</ul>';
														}

														// Reset the WP Query
														wp_reset_postdata();

														?>
													
													</div>
												<?php } ?>	
									</div> <!--banner-sub-menu -->

									<!-- Get template-part content for each page -->
									<div class = "about-section">
										<?php

											get_template_part( 'template-parts/content', 'project' ); 
										?>	
									</div>								

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
