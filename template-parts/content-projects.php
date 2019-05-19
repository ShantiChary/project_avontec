<?php
/**
 * Template part for displaying page content in content-projects.php
 *
 * @package avontec
 */

?>

<!-- Projects (All) Page Content -->

<div class="about-section">
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
                                                            <!-- Anchor Tag -->
                            <a name="post-<?php the_ID(); ?>">
                                    <?php 
                                        $projectHeading = "project_heading";
                                    
                                        $projectText = "project_text";
                                        ?>
                                        </a>
                        
                                        <h5><?php the_field($projectHeading); ?></h5>
                                        <p><?php the_field($projectText); ?></p>
                                </div>
                            </div>                              
                       <?php endwhile;
    ?>  
</div>