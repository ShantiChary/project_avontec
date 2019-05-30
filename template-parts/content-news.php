<?php
/**
 * Template part for displaying page content in content-news.php
 *
 * @package avontec
 */

?>

<!-- Projects (All) Page Content -->

<div class="about-section">
    <?php
            $args = array( 
                        'post_type' => 'news',
                        'posts_per_page' => 10,
                        'order' => 'ASC',
                        'orderby' => 'title'                           
                        );
                        
                        $loop = new WP_Query( $args );

                        // if($loop->have_posts()){
                        //     echo "<div>";
                        //     echo '<ul class="news-tabs">';
                        //     while($loop->have_posts()){
                        //             echo "<li>";
                        //                 $loop->the_post();
                        //                 $id = get_the_ID();
                        //                 echo '<a href="#';
                        //                 echo $id;
                        //                 echo '">';
                        //                 the_title();
                        //                 echo '</a>';
                        //                 echo "</li>";
                        //     }
                        //     echo "</ul>";
                        //     echo "</div>";
                        //     wp_reset_postdata();
                        // }
            
                        while ( $loop->have_posts() ) : $loop->the_post(); ?>

                            <?php 
                                $newsDate = "news_date";
                                $newsHeading = "news_heading";
                                // $newsLink = "news_link";
                                $newsText = "news_text";
                            ?>

                            <div>
                                <!-- Anchor Tag -->
                                <a name="post-<?php the_ID(); ?>"></a>

                                <?php $post_type=get_post_type(); ?>
                                <!-- <h4 id="post-?php the_ID(); ?>"></h4> -->
                                <h4 id="post-<?php $newsHeading; ?>"></h4>
                                <!-- <h4 id="post-?php the_ID(); ?>"> ?php the_title(); ?> </h4> -->
                            </div>

                            <!-- <div>
                                    ?php
                                            echo '<h4 id="';
                                            echo get_the_id($loop);
                                            echo '">';
                                            the_title();
                                            echo '</h4>';
                                    ?>
                            </div> -->
                     
                            <div class="news-article">

                                <div class="news-img">
                                
                                    <?php 
										$field_name = "news_image";
										$image = get_field('news_image');
										$size = 'medium'; // (thumbnail, medium, large, full or custom size)
                        
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
                                        <p><?php the_field($newsDate); ?></p>
                                        <h5><?php the_field($newsHeading); ?></h5>
                                        <p><?php the_field($newsText); ?></p>

                                        <div class="news-page-link">
                                            <p><a href="<?php echo get_permalink(); ?>"><span class="email-id";>Know More</span></a></p>
                                        </div>
                                </div>
                                

                            </div>  

                       <?php endwhile;
    ?>  
</div>