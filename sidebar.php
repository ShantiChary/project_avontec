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
	<!-- <div class="about-section-1-sidebar"> -->
                    <!-- YouTube Subscribe div -->
                    <div class="about-section-1-youtube g-ytsubscribe" data-channel="GoogleDevelopers" data-layout="default" data-count="hidden">
                    </div>

                    <!-- Display news image -->
                    <div class="about-us-news">
                        <?php
                            if(function_exists('get_field')) {
                                echo '<h5>';
                                the_field('about_us_news_heading');
                                echo '</h5>';

                                echo '<div>';
                                    $image = get_field('about_us_news_image');

                                    if( !empty($image) ): ?>

                                        <a href="<?php the_field('events_news_url', 'option'); ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/></a>

                                    <?php endif; 
                                    echo '</div>';

                                    echo '<p>';
                                    the_field('about_us_news_text');
                                echo '</p>';
                            } ?>
                    </div>

                    <!-- Display news video -->
                    <div class="about-us-news">
                        <?php 
                            if(function_exists('get_field')) {

                                $videoTitle = get_field('about_us_news_video_heading');
                                $videoText = get_field('about_us_news_video_text');
                                $videoUrl = get_post_meta($post->ID, 'about_us_news_video_url', true);
                    
                                // Display video ?>
                                <?php
                                echo '<h5>';
                                the_field('about_us_news_video_heading');
                                echo '</h5>';

                                // Get the video URL and put it in the $video variable
                                // Check if there is in fact a video URL
                                if ($videoUrl) {
                                    echo '<div>';
                                        // Echo the embed code via oEmbed
                                        echo wp_oembed_get( 'http://www.youtube.com/watch?v=' . $videoUrl, array('width'=>320, 'height'=>150)); 
                                    echo '</div>';
                                }

                                echo '<p>';
                                echo $videoText;
                                echo '</p>';
                            }
                        ?>
                    </div>


                    <!-- Contact Us -->
                    <div class="contact-form">
			
                        <h4>Contact Us!</h4>
    
                        <?php echo do_shortcode('[contact-form-7 id="714" title="Contact form 1"]'); ?>

                        <!-- Contact Form Overlay on clicking Submit button -->
                        <!-- <div class="contact-us-overlay">
                            ?php 
                                echo "<p>";
                                the_field('contact_us_overlay', 'option');
                                echo "</p>";
                            ?>
                        </div> -->
    
                    </div> <!-- contact-form -->

                    <!-- Facebook Feed -->
                    <fb:subscribe href="https://www.facebook.com/Avontec" width="450"></fb:subscribe>
                    
                     <div class="fb-page" data-href="https://www.facebook.com/Avontec/" data-tabs="timeline" data-height="380px"  data-width="310px" data-small-header="true" data-adapt-container-width="false" data-hide-cover="true" data-show-facepile="false"><blockquote cite="https://www.facebook.com/Avontec/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Avontec/">Avontec Automation</a></blockquote></div>

                </div>
<!-- </div> about-section-1-sidebar -->


</aside><!-- #secondary -->
