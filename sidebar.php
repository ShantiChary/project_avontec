<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package project_avontec
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
                    <!-- YouTube Subscribe div -->
                    <!-- <div class="about-section-1-youtube g-ytsubscribe" data-channel="GoogleDevelopers" data-layout="default" data-count="hidden">
                    </div> -->

                    <?php echo do_shortcode('[Awesome-youtube-subscribe]'); ?>

                    <!-- Display news slider -->

                    <div class="sidebar-news-slider">
                        <div id="exampleSlider" class="newsSlider2">      <!-- Give wrapper ID to target with jQuery & CSS -->
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

                                        echo '<h5>';
                                        the_field('sidebar_news_heading', 'option');
                                        echo '</h5>';

                                        while($multislides->have_posts()) {
                                            $multislides->the_post();

                                            echo '<div id="sidebar-news-single-item" class="item">';
                                                if(function_exists('get_field')){
                                                    echo '<div class="sidebar-news-item">'; 

                                                    $image = get_field('news_image');
                                                    $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
                                                    if(!empty($image)) {
                                                        if( $image ) {
?>
                                                                <a href="http://avontec.com/about-us/news/#post-<?php echo the_ID(); ?>">
<?php
                                                            echo '<div class="news-image">'; 
                                                                echo '<a href="';
                                                                the_permalink();
                                                                echo '">'; 
                                                                echo wp_get_attachment_image( $image);
                                                                echo '</a>';
                                                            echo '</div>';
                                                            ?>
                                                            </a>                                                             
<?php
                                                            echo '<div class="news-text">'; ?>


                                                                    <!-- ?php
                                                                    if(get_field('news_link')){
                                                                        // echo '<a href="';
                                                                        // the_permalink();
                                                                        // echo '">'; 
                                                                        echo "<h5>";
                                                                        the_field('news_link');
                                                                        echo "</h5>";
                                                                        // echo '</a>';
                                                                    } ?>
                                                                    </a>  -->

                                                                    <?php
                                                                    // if(get_field('news_heading')){
                                                                    //     echo "<h6>";
                                                                    //     the_field('news_heading');
                                                                    //     echo "</h6>";
                                                                    // }
                                                                    if(get_field('sidebar_news_excerpt')){
                                                                        echo "<p>";
                                                                        the_field('sidebar_news_excerpt');
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
                    </div>



                    <!-- Display news video -->
                    <div class="sidebar-news">
                        <?php 
                            if(function_exists('get_field')) {

                                $videoTitle = get_field('sidebar_news_video_heading', 'option');
                                $videoText = get_field('sidebar_news_video_text', 'option');
                                // $videoUrl = get_post_meta($post->ID, 'sidebar_news_video_url', true);
                                $videoUrl = get_field('sidebar_news_video', 'option');

                                // Display video ?>
                                <?php
                                echo '<h5>';
                                the_field('sidebar_news_video_heading', 'option');
                                echo '</h5>';
                                
                                // Get the video URL and put it in the $video variable
                                // Check if there is in fact a video URL
                                if ($videoUrl) {
                                    echo '<div>';
                                    echo $videoUrl;
                                    echo '</div>';
                                }

                                echo '<p>';
                                echo $videoText;
                                echo '</p>';
                            }
                        ?>
                    </div>


                    <!-- Contact Us -->
                    <!-- <div class="contact-form">
			
                        <h4>Contact Us!</h4>
    
                        ?php echo do_shortcode('[contact-form-7 id="714" title="Contact form 1"]'); ?>

                        !-- Contact Form Overlay on clicking Submit button -->
                        <!-- <div class="contact-us-overlay">
                            ?php 
                                echo "<p>";
                                the_field('contact_us_overlay', 'option');
                                echo "</p>";
                            ?>
                        </div> --
    
                    </div> contact-form -->

                    <!-- <div id="sidebar-form"> -->
                            <!-- <h4>Contact Us!</h4>

                            <input id="name" type="text" name="name" placeholder="Name"/>

                            <input id="email" type="text" name="email" placeholder="Email"/>

                            <input id="designation" type="text" name="designation" placeholder="Designation"/>

                            <input id="company" type="text" name="company" placeholder="Company"/> -->
                      <div class="sidebar-contact-div">
                            <a href="http://avontec.com/contact-us" class="sidebar-contact-button">Contact US</a>
                      </div>
                    <!-- </div> -->

                    <br>

                    <div class="fb-follow">
                        <h5> Follow us on Facebook: </h5>
                        <?php echo do_shortcode('[addthis tool=addthis_vertical_follow_toolbox]'); ?>;

                    </div>

                        <!-- Facebook Feed -->                  
                        <div class="fb-page" data-href="https://www.facebook.com/Avontec/" data-tabs="timeline" data-height="380px"  data-width="300px" data-small-header="true" data-adapt-container-width="false" data-hide-cover="true" data-show-facepile="false"><blockquote cite="https://www.facebook.com/Avontec/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Avontec/">Avontec Automation</a></blockquote>
                    </div>

</aside><!-- #secondary -->