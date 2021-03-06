<?php
/**
 * Template part for displaying page content in front-page.php
 *
 * @package avontec
 */

?>

<!-- Home Page Banner Gallery -->
<section id="home-content">
        <!-- SECTION 2 - Intro heading and Para-->
        <div class="section-2-intro">
            <?php  
                echo "<h1 class='section-2-h1'>";
                the_field('heading_1');
                echo "</h2>";

                echo "<p class='section-2-para'>";
                the_field('section_2');
                echo "</p>";
            ?>
        </div> <!-- section-2-intro -->

        <!-- Section 2 Videos content -->
        <section class="section-2">

            <!-- Main video -->
            <div class="video-1-section">
                <?php   	   
                    if(function_exists('get_field')) {

                    // Display video 1
                        echo '<h2 class="video1Title">';
                            the_field('video_1_title');
                        echo '</h2>';

                        // Get the video URL and put it in the $video variable
                        $video1ID = get_post_meta($post->ID, 'video_1_url', true);
                        // Check if there is in fact a video URL
                        echo '<div class="video1Container">';
                            if ($video1ID) {
                                // Echo the embed code via oEmbed
                                echo wp_oembed_get( 'http://www.youtube.com/watch?v=' . $video1ID ); 
                            }
                        echo '</div>';

                        echo '<p class="video1Text">';
                            the_field('video_1_text');
                        echo "</p>";  
                    
                        // echo "<a class='trigger learn-more-button' href='";
                        // the_field('learn_more_button');
                        // echo "'>Learn More</a>";
                        ?>
                        <div class="learn-button">
                            <button id="trigger-id" class="trigger">Learn More</button>
                        </div>

                    <?php
                    }	
                    ?>
            </div> <!-- video-1-section -->

            <div id="modal-id" class="modal">
                <div id="modal-content-id" class="modal-content">
                    <div class="popup-content">
                        <span id="close-button-id" class="close-button">&times;</span>
                            <img src="<?php the_field('website_logo', 'option'); ?>" width=150>

                            <p>Hello, please contact us for more information.</p>

                            <a href="<?php the_field('contact_us_button', 'option'); ?>"><button>Contact Us</button></a>
                    </div>
                </div>
            </div>

            <!-- Side videos --> 
            <div class="video-2-section">
                    <?php   	   
		            	if( have_rows('video_2_section') ){

                                // loop through the rows of data
                                while ( have_rows('video_2_section') ) : the_row();
                                        // display a sub field value
                                        //variable ?>
                                        <div class="video2MainContainer">

                                        <?php
                                            $videoTitle = get_sub_field('video_title');
                                            $videoText = get_sub_field('video_text');
                                            // $video2ID = get_post_meta($post->ID, 'video_url', true);
                                            // $video2ID = get_sub_field('video_url');
                                            $video2ID = get_sub_field('video_url');
                                    
                                            // Display video ?>
                                            <div class="video2TitleText">
                                                <h4 class='video2Title'><?php echo $videoTitle; ?></h4>

                                                <p class='video2Text'><?php echo $videoText; ?></p>
                                            </div>

                                            <?php
                                            // Get the video URL and put it in the $video variable
                                            // Check if there is in fact a video 
                                            echo '<div class="video2Container">';
                                                if ($video2ID) {
                                                    // Echo the embed code via oEmbed
                                                    // echo wp_oembed_get( 'http://www.youtube.com/watch?v=' . $videoHome2, array('width'=>280, 'height'=>150)); 
                                                    // echo wp_oembed_get( 'http://www.youtube.com/watch?v=' . $video2ID ); 
                                                    // echo do_shortcode("[video src=".get_sub_field('video_url')."]");
                                                    echo $video2ID;
                                                }
                                            echo '</div>';
                                        ?>
                                        </div>
                
                                <?php
                                endwhile;   ?>                          
                            </div> <!--video2MainContainer  -->
                      <?php  }    ?>          

            </div> <!--video-2-section -->
        </section> <!-- section-2 -->

            <?php get_template_part( 'template-parts/content', 'key-projects' ); ?>
            <?php get_template_part( 'template-parts/content', 'newsletter' ); ?>
            <?php get_template_part( 'template-parts/content', 'exhibitions-news' ); ?>
        


</section> <!-- home-content -->


