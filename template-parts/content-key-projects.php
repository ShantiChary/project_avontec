<?php
/**
 * Template part for displaying page content in key-projects.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package project_avontec
 */

?>

    <!-- SECTION 3 - KEY PROJECTS -->
    <section id="key-projects" class="projects-slider">
                        <?php
                            echo '<h3 class="project-heading">';
                            echo "Projects";
                            echo '</h3>';
                        ?>

                        <div class="multiple-items projects-slide">

                                <?php
                                    $args = array(
                                            'post_type' => 'project',
                                            'posts_per_page' => -1,
                                            'order' => 'ASC',
                                            'orderby' => 'title'
                                    );

                                    $slickslides = new WP_Query($args);

                                    if($slickslides->have_posts()) {
                                        while($slickslides->have_posts()) {
                                            $slickslides->the_post();

                                            echo '<div class="project-slides">';

                                                    if(function_exists('get_field')){

                                                        $image = get_field('project_image');
                                                        $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
                                                                                                            
                                                        if(!empty($image)) {                                
                                                            if( $image ) {

                                                                // the_permalink(); ?>

                                                                <a href="http://avontec.com/about-us/projects/#post-<?php echo the_ID(); ?>">
                                                                
                                                                <?php echo wp_get_attachment_image( $image, $size );                                                 
                                                            }
                                                        }
                                                        ?>
                                                        </a> 
                                                        
                                                        <?php
                                                        if(get_field('project_heading')){ ?>

                                                            <?php
                                                                echo "<h4>";
                                                                the_field('project_heading');
                                                                echo "</h4>";
                                                        }
                                                        if(get_field('project_excerpt')){
                                                                echo "<p>";
                                                                the_field('project_excerpt');
                                                                echo "</p>";
                                                        }
                                                    }                                                            
                                            echo '</div>';
                                        }
                                        
                                        wp_reset_postdata();
                                    }
                                ?>

                        </div>
        </section>
