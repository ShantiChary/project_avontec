<?php
/**
 * Template part for displaying page content in front-page.php
 *
 * @package avontec
 */

?>

<!-- Home Page Banner Gallery -->
<section class="home-content">
    <div class="section-1-top">
        <?php    
            if(function_exists('get_field')) {

                while( have_rows('banner_images_1', $bannerimages) ) {
                    the_row();
                    
                    $title = get_sub_field('banner_image_title');

                    $image = get_sub_field('banner_image');
                        echo "<div class='item'>";
                        if( !empty($image) ): ?>
                            <a href="<?php echo get_permalink(); ?>"> <img class="content-padding" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <?php
                                echo "<div class='banner-image-title'>";                               
                                    echo "<h3>";
                                    echo $title;
                                    echo "</h3>";
                                echo "</div>";
                            ?>
                            </a>

                            <?php echo "</div>"; ?>
                        <?php endif;


                 } 
            } 
        ?>
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

    <!-- Section 2 Key Projects content -->
    <div class="section-3 key-projects"> 
            <!-- <div class="section-1 image-gallery">
                ?php
                    echo do_shortcode('[soliloquy id="218"]');
                ?>

            </div> -->

    <!-- Key Projects -->
    <div class="key-projects">
        <?php
            if(get_field('heading_2')){
                echo '<h3>' . the_field('heading_2') . '</h3>';
            }
                    
            $image = get_field('image_1');

            if( !empty($image) ): ?>
                <img src="<?php echo $image['url']; ?>" width="150px" alt="<?php echo $image['alt']; ?>" />
             <?php endif; ?>

            <?php			
                echo '<h4>';
                the_field('image_1_title');
                echo '</h4>';
            ?>

            <?php    

                if(get_field('image_1_text')){
                    echo '<p>' . the_field('image_1_text') . '</p>';
                }                       
        ?>

        <?php    
            // Display Image 2                  
            $image = get_field('image_2');

            if( !empty($image) ): ?>
                <img src="<?php echo $image['url']; ?>" width="150px" alt="<?php echo $image['alt']; ?>" />
             <?php endif; ?>

            <?php			
                echo '<h4>';
                the_field('image_2_title');
                echo '</h4>';
            ?>

            <?php    

                if(get_field('image_1_text')){
                    echo '<p>' . the_field('image_2_text') . '</p>';
                }                      
        ?>

        <?php    
            // Display Image 3                  
            $image = get_field('image_3');

            if( !empty($image) ): ?>
                <img src="<?php echo $image['url']; ?>" width="150px" alt="<?php echo $image['alt']; ?>" />
             <?php endif; ?>

            <?php			
                echo '<h4>';
                the_field('image_3_title');
                echo '</h4>';
            ?>

            <?php    

                if(get_field('image_3_text')){
                    echo '<p>' . the_field('image_3_text') . '</p>';
                }                      
        ?>

        <?php    
            // Display Image 4                 
            $image = get_field('image_4');

            if( !empty($image) ): ?>
                <img src="<?php echo $image['url']; ?>" width="150px" alt="<?php echo $image['alt']; ?>" />
             <?php endif; ?>

            <?php			
                echo '<h4>';
                the_field('image_4_title');
                echo '</h4>';
            ?>

            <?php    

                if(get_field('image_4_text')){
                    echo '<p>' . the_field('image_4_text') . '</p>';
                }                      
          ?>
    </div>

    <!-- Section 4 Newsletter content -->
    <div class="section-4">
        <?php
            if(function_exists('get_field')) {

                echo "<h2 class='heading-3'>";
                the_field('heading_3');
                echo "</h2>";

                echo "<p>";
                the_field('section_4');
                echo "</p>";
            }
        ?>

        <div class="newsletter-social">
            <div class="newsletter">
                <?php
                    if(function_exists('get_field')) {

                        echo "<h5 class='newsletter-heading'>";
                        the_field('newsletter_heading');
                        echo "</h5>";

                        echo "<p>";
                        the_field('newsletter_section');
                        echo "</p>";
                    }

                ?>
            </div> <!-- newsletter -->

            <div class="social-media-home">
                <?php if( have_rows('social_media', 'option') ): ?>

                    <ul>

                    <?php while( have_rows('social_media', 'option') ): the_row(); ?>


                        <li><a href="<?php the_sub_field('social_media_link'); ?>" target="_blank"> 
                            <img src="<?php the_sub_field('social_media_icon'); ?>" width=60>
                            </a>
                        </li>

                    <?php endwhile; ?>

                    </ul>

                <?php endif; ?>
            </div> <!-- social-media-home -->
        </div> <!-- newsletter-social -->
    </div>  <!-- section-4 -->

    <!-- Section 5 Exhibitions & News content -->
    <div class="section-4">
            <?php    
                if(function_exists('get_field')) {

                    echo "<h5 class='news_section_heading'>";
                    the_field('news_section_heading');
                    echo "</h5>";

            ?>
            
            <div class="exhib-news"> 
                <?php
                    $image = get_field('news_article_1_image');

                    if( !empty($image) ): ?>
                        <img src="<?php echo $image['url']; ?>" width="40px" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; 

                    echo "<p>";
                    the_field('news_article_1_text');
                    echo "</p>";
                }
                ?>

                <?php    
                    if(function_exists('get_field')) {

                        $image = get_field('news_article_2_image');

                        if( !empty($image) ): ?>
                            <img src="<?php echo $image['url']; ?>" width="40px" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; 

                        echo "<p>";
                        the_field('news_article_2_text');
                        echo "</p>";
                    }
                ?>

                <?php    
                    if(function_exists('get_field')) {

                        $image = get_field('news_article_3_image');

                        if( !empty($image) ): ?>
                            <img src="<?php echo $image['url']; ?>" width="40px" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; 

                        echo "<p>";
                        the_field('news_article_3_text');
                        echo "</p>";
                    }
                ?>
             </div>  <!-- exhib-news -->  
         </div>  <!-- section-4 -->   

</section>


