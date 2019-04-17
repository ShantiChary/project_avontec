<?php
/**
 * Template part for displaying page content in page-news.php
 *
 * @package avontec
 */

?>

<!-- Events & News Content -->
<section id="about-content">

            <div class="about-section-1">

                <div class="about-section-1-text">
                    <?php
                        if(function_exists('get_field')) {
                            // echo '<p>';
                            // the_field('about_us_text');
                            // echo '</p>';
                        }
                    ?>
                </div>

                <div class="about-section-1-sidebar">
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

                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>

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
    
                    </div> <!-- contact-form -->


                    <!-- Facebook Feed -->



                    <fb:subscribe href="https://www.facebook.com/Avontec" width="450"></fb:subscribe>
                    
                     <div class="fb-page" data-href="https://www.facebook.com/Avontec/" data-tabs="timeline" data-height="380px"  data-width="310px" data-small-header="true" data-adapt-container-width="false" data-hide-cover="true" data-show-facepile="false"><blockquote cite="https://www.facebook.com/Avontec/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Avontec/">Avontec Automation</a></blockquote></div>

                </div>
            </div>

            <!-- Section 4 Newsletter content -->
            <div class="section-4">
                    <?php
                        if(function_exists('get_field')) {

                            echo "<h2 class='section-4-h2'>";
                            the_field('heading_3', 'option');
                            echo "</h2>";

                            echo "<p class='section-4-para'>";
                            the_field('section_4', 'option');
                            echo "</p>";
                        }
                    ?>

                    <div class="newsletter-social">
                        <div class="newsletter">
                            <?php
                                if(function_exists('get_field')) {
                                    echo "<div class='newsletter-full'>";
                                    echo "<h5>";
                                    the_field('newsletter_heading', 'option');
                                    echo "</h5>";

                                    echo "<p>";
                                    the_field('newsletter_section', 'option');
                                    echo "</p>";
                                    echo "</div>";
                                }

                            ?>
                        </div> <!-- newsletter -->

                        <div class="social-media-home">
                            <?php if( have_rows('social_media', 'option') ): ?>

                                <ul>

                                <?php while( have_rows('social_media', 'option') ): the_row(); ?>


                                    <li><a href="<?php the_sub_field('social_media_link'); ?>" target="_blank"> 
                                        <img src="<?php the_sub_field('social_media_icon'); ?>" width=120>
                                        </a>
                                    </li>

                                <?php endwhile; ?>

                                </ul>

                            <?php endif; ?>
                        </div> <!-- social-media-home -->
                    </div> <!-- newsletter-social -->                        

            </div> <!-- section-4 -->

            <br>

</section>


