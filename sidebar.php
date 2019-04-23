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
                    <div class="sidebar-news">
                        <?php
                            if(function_exists('get_field')) {
                                echo '<h5>';
                                the_field('sidebar_news_heading', 'option');
                                echo '</h5>';

                                echo '<div>';
                                    $image = get_field('sidebar_news_image', 'option');

                                    if( !empty($image) ): ?>

                                        <a href="<?php the_field('events_news_url', 'option'); ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/></a>

                                    <?php endif; 
                                    echo '</div>';

                                    echo '<p>';
                                    the_field('sidebar_news_text', 'option');
                                echo '</p>';
                            } ?>
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
                    <!-- <fb:subscribe href="https://www.facebook.com/Avontec" width="450"></fb:subscribe> -->
                    <div class="fb-subscribe" 
  data-href="https://www.facebook.com/Avontec/?__tn__=%2Cd%2CP-R&eid=ARDxHJCynkbUrl_A4AG1MQirE74FSDIOHre77rZqvljsB1vFy542qPD8-GTXwCC1vHzi2TfSila1tc9x" data-width="450">
</div>

<!-- <iframe src="https://www.facebook.com/plugins/subscribe.php?
  href=https%3A%2F%2Fwww.facebook.com%2Fzuck
  &amp;width=450&amp;appId=APP_ID" scrolling="no"
  frameborder="0" style="border:none; overflow:hidden; width:450px;"
  allowTransparency="true">
</iframe> -->
                    
                     <!-- <div class="fb-page" data-href="https://www.facebook.com/Avontec/" data-tabs="timeline" data-height="380px"  data-width="310px" data-small-header="true" data-adapt-container-width="false" data-hide-cover="true" data-show-facepile="false"><blockquote cite="https://www.facebook.com/Avontec/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Avontec/">Avontec Automation</a></blockquote></div> -->

                </div>
<!-- </div> about-section-1-sidebar -->


</aside><!-- #secondary -->
