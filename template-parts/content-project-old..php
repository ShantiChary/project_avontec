<?php
            $args = array( 
                        'post_type' => 'project',
                        'posts_per_page' => 10,
                        'order' => 'ASC',
                        'orderby' => 'title'                           
                        );
                        
                        $loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post(); ?>
						
								<div class="news-article">
										<div class="news-img">
											
											<?php 
												$field_name = "project_image";
												$image = get_field('project_image');
												$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)

												if(!empty($image)) {
													$field = get_field_object($field_name); ?>

													<?php 

													if( $image ) {
														echo wp_get_attachment_image( $image, $size );
													}
												}

											?>
										</div>

										<div class="news-div">
											<?php 
												$projectHeading = "project_heading";
												$projectLink = "project_link";
												$projectText = "project_text";
											?>

            <!-- Anchor Tag -->

											<h5> <a href="#post-<?php echo the_ID(); ?>"><?php the_field($projectHeading); ?></a></h5>
											<p><?php the_field($projectText); ?></p>
										</div>
								</div>
						<?php endwhile; ?>
