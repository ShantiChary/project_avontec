<?php
/**
 * Template part for displaying page content in content-exhibitions-news.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package project_avontec
 */

?>

    <!-- Section 5 Exhibitions & News content -->
    <div class="section-5">
        <div class="section-5-inner">

            <?php    
                    if(function_exists('get_field')) {

                        echo "<h3>";
                        the_field('news_section_heading', 'option');
                        echo "</h3>";
                    }
            ?>

            <div id="exampleSlider" class="newsSlider">      <!-- Give wrapper ID to target with jQuery & CSS -->
                    <div class="MS-content">

                                <?php
                                    $args = array(
                                            'post_type' => 'news',
                                            'posts_per_page' => -1,
                                            'order' => 'ASC',
                                            'orderby' => 'title'
                                    );

                                    $multislides = new WP_Query($args);

                                    if($multislides->have_posts()) {
                                        while($multislides->have_posts()) {
                                            $multislides->the_post();

                                            echo '<div class="item">';
                                                if(function_exists('get_field')){
                                                    echo '<div class="news-item">'; 

                                                    $image = get_field('news_image');
                                                    $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
                                                    if(!empty($image)) {
                                                        if( $image ) {

                                                            echo '<div class="news-image">'; 
                                                                echo '<a href="';
                                                                the_permalink();
                                                                echo '">'; 
                                                                echo wp_get_attachment_image( $image, $size );
                                                                echo '</a>';
                                                            echo '</div>';

                                                            echo '<div class="news-text">'; ?>

                                                                <a href="http://avontec.com/about-us/news/#post-<?php echo the_ID(); ?>">

                                                                    <?php
                                                                    if(get_field('news_link')){
                                                                        // echo '<a href="';
                                                                        // the_permalink();
                                                                        // echo '">'; 
                                                                        // echo "<h5>";
                                                                        // the_field('news_link');
                                                                        // echo "</h5>";
                                                                        // echo '</a>';
                                                                    } ?>
                                                                    </a> 

                                                                    <?php
                                                                    // if(get_field('news_heading')){
                                                                    //     echo "<h5>";
                                                                    //     the_field('news_heading');
                                                                    //     echo "</h5>";
                                                                    // }
                                                                    if(get_field('news_excerpt')){
                                                                        echo "<p>";
                                                                        the_field('news_excerpt');
                                                                        echo "</p>";
                                                                    } 
                                                                    ?>
                                                            </a>                                                                 
                                                            <?php echo '</div>';

                                                        }
                                                    }
                                                    echo '</div>';
                                                }  ?> <!-- end if -->

                                            <?php echo '</div>';


                                        } ?> <!-- end while --> 
                               
                                        <?php wp_reset_postdata();
                                    } ?> <!-- end if -->

                    </div> <!-- end MS-Content -->
            </div> <!-- exampleSlider -->                                        

        </div> <!-- end section-5-inner -->
    </div> <!-- end section-5 -->
