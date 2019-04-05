<?php
/**
 * Template part for displaying page content in front-page.php
 *
 * @package avontec
 */

?>

<!-- Home Page Banner Gallery -->
<section class="home-content">
    <div class="section-1">
        <?php  
        ?>
    </div>


    <!-- SECTION 2 - INTRO -->
    <div class="section-2-intro">
        <?php  
            echo "<h2 class='section-2-h2'>";
            the_field('heading_1');
            echo "</h2>";

            echo "<p class='section-2-para'>";
            the_field('section_2');
            echo "</p>";
        ?>
    </div>

    <!-- Section 2 Videos content -->
    <section class="section-2">
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
                    if ($video1ID) {
                        echo '<div class="video1Container">';
                        // Echo the embed code via oEmbed
                        echo wp_oembed_get( 'http://www.youtube.com/watch?v=' . $video1ID ); 
                        echo '</div>';
                    }

                    echo '<p class="video1Text">';
                        the_field('video_1_text');
                    echo "</p>";                                  
                    // 

                    // Display video 2

                }	
                ?>
        </div>

        <div class="video-2-section">
            <?php   	   
                if(function_exists('get_field')) {
                    echo '<div class="video2MainContainer">';
                        echo '<div class="video2TitleText">';
                            // Display video 2
                            echo "<h3 class='video2Title'>";
                            the_field('video_2_title');
                            echo "</h3>";

                            echo "<p class='video2Text'>";
                            the_field('video_2_text');
                            echo "</p>";  
                        echo '</div>';

                        // Get the video URL and put it in the $video variable
                        $video2ID = get_post_meta($post->ID, 'video_2_url', true);
                        // Check if there is in fact a video URL
                        if ($video2ID) {
                            echo '<div class="videoContainer">';
                            // Echo the embed code via oEmbed
                            echo wp_oembed_get( 'http://www.youtube.com/watch?v=' . $video2ID, array('width'=>280, 'height'=>150)); 
                            echo '</div>';
                        }
                        
                        // 
                    echo '</div>'; //video2MainContainer

                    echo '<div class="video2MainContainer">';
                        echo '<div class="video2TitleText">';
                            // Display video 2
                            echo "<h3 class='video2Title'>";
                            the_field('video_3_title');
                            echo "</h3>";

                            echo "<p class='video2Text'>";
                            the_field('video_3_text');
                            echo "</p>";  
                        echo '</div>';

                        // Get the video URL and put it in the $video variable
                        $video2ID = get_post_meta($post->ID, 'video_3_url', true);
                        // Check if there is in fact a video URL
                        if ($video2ID) {
                            echo '<div class="videoContainer">';
                            // Echo the embed code via oEmbed
                            echo wp_oembed_get( 'http://www.youtube.com/watch?v=' . $video2ID, array('width'=>280, 'height'=>150)); 
                            echo '</div>';
                        }

                    // 
                    echo '</div>'; //video2MainCOntainer

                    echo '<div class="video2MainContainer">';
                        echo '<div class="video2TitleText">';
                            // Display video 2
                            echo "<h3 class='video2Title'>";
                            the_field('video_4_title');
                            echo "</h3>";

                            echo "<p class='video2Text'>";
                            the_field('video_4_text');
                            echo "</p>";  
                        echo '</div>';

                        // Get the video URL and put it in the $video variable
                        $video2ID = get_post_meta($post->ID, 'video_4_url', true);
                        // Check if there is in fact a video URL
                        if ($video2ID) {
                            echo '<div class="videoContainer">';
                            // Echo the embed code via oEmbed
                            echo wp_oembed_get( 'http://www.youtube.com/watch?v=' . $video2ID, array('width'=>280, 'height'=>150)); 
                            echo '</div>';
                        }
                    
                    // 
                    echo '</div>'; //video2MainCOntainer
                }	
            ?>    
        </div> <!--video-2-section -->

    </section>

    <!-- SECTION 3 - KEY PROJECTS -->
    <div class="key-projects">
        <?php
            if(get_field('heading_2')){
                echo '<h3>';
                the_field('heading_2');
                echo '</h3>';
            }

        ?>
    </div>




</section>


