<?php
/**
 * Template part for displaying page content in front-page.php
 *
 * @package avontec
 */

?>


<section class="home-content">
    <div class="section-1">


    </div>
</section>        

<section class="home-content">
    <div class="section-2">
        <?php  
            echo "<h2>";
            the_field('heading_1');
            echo "</h2>";

            echo "<p>";
            the_field('section_2');
            echo "</p>";
        ?>
    </div>

    <!-- Section 2 Videos content -->
    <div class="section-2 video-section">
        <?php   	   
            if(function_exists('get_field')) {

                echo "<h2 class='heading-1'>";
                // Display video 1
                echo "<h3 class='video-1-title'>";
                the_field('video_1_title');
                echo "</h3>";

                // Get the video URL and put it in the $video variable
                $video1ID = get_post_meta($post->ID, 'video_1_url', true);
                // Check if there is in fact a video URL
                if ($video1ID) {
                    echo '<div class="videoContainer">';
                    // Echo the embed code via oEmbed
                    echo wp_oembed_get( 'http://www.youtube.com/watch?v=' . $video1ID ); 
                    echo '</div>';
                }

                echo "<p>";
                the_field('video_1_text');
                echo "</p>";                
                // 

                // Display video 2
                echo "<h3 class='video-2-title'>";
                the_field('video_2_title');
                echo "</h3>";

                // Get the video URL and put it in the $video variable
                $video2ID = get_post_meta($post->ID, 'video_2_url', true);
                // Check if there is in fact a video URL
                if ($video2ID) {
                    echo '<div class="videoContainer">';
                    // Echo the embed code via oEmbed
                    echo wp_oembed_get( 'http://www.youtube.com/watch?v=' . $video2ID ); 
                    echo '</div>';
                }
                
                echo "<p>";
                the_field('video_2_text');
                echo "</p>";  
                // 

                // Display video 3
                echo "<h3 class='video-3-title'>";
                the_field('video_3_title');
                echo "</h3>";

                // Get the video URL and put it in the $video variable
                $video3ID = get_post_meta($post->ID, 'video_3_url', true);
                // Check if there is in fact a video URL
                if ($video3ID) {
                    echo '<div class="videoContainer">';
                    // Echo the embed code via oEmbed
                    echo wp_oembed_get( 'http://www.youtube.com/watch?v=' . $video3ID ); 
                    echo '</div>';
                }
                
                echo "<p>";
                the_field('video_3_text');
                echo "</p>";  
                // 

                // Display video 4
                echo "<h3 class='video-4-title'>";
                the_field('video_4_title');
                echo "</h3>";

                // Get the video URL and put it in the $video variable
                $video4ID = get_post_meta($post->ID, 'video_4_url', true);
                // Check if there is in fact a video URL
                if ($video4ID) {
                    echo '<div class="videoContainer">';
                    // Echo the embed code via oEmbed
                    echo wp_oembed_get( 'http://www.youtube.com/watch?v=' . $video4ID ); 
                    echo '</div>';
                }
                
                echo "<p>";
                the_field('video_4_text');
                echo "</p>";  
                //             

            }	
            ?>
    </div>
</section>


