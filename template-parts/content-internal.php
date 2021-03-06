<?php
/**
 * Template part for displaying page content in front-page.php
 *
 * @package avontec
 */

?>

<!-- Home Page Banner Gallery -->
<section id="home-content">
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

<div class="projects-slider">
        <?php
            if(get_field('heading_2')){
                echo '<h3 class="key-heading">';
                the_field('heading_2');
                echo '</h3>';
            }
        ?>

		<?php
			//Image Slider
			//slider_portfolio = Repeater field
			//slider_image = subfield

			if( have_rows('key_projects_slider') ){
				echo '<div class="multiple-items projects-slide">';
					// loop through the rows of data
					while ( have_rows('key_projects_slider') ) : the_row();
						// display a sub field value
						//variable
                        $image = get_sub_field('project_image');
                        $projectTitle = get_sub_field('project_title');
                        $projectDescription = get_sub_field('project_description');
                        $projectLink = get_sub_field('project_link');

                        ?>

							<div class="project-slides">
                                <!-- <a href="?php the_sub_field('project_link'); ?>" -->
                                    <img src="<?php echo $image['url']; ?>" width=200>
                                    <h4><?php echo $projectTitle; ?></h4>
                                    <p><?php echo $projectDescription; ?></p>
                                <!-- </a> -->
							</div>
	
						<?php
					endwhile;
				echo '</div>'; ?>

				<div class="multiple-nav">';
					<!-- // loop through the rows of data -->
					<?php
					while ( have_rows('key_projects_slider') ) : the_row();
					// display a sub field value
					//vars
                        $image = get_sub_field('project_image');
                        $projectTitle = get_sub_field('project_title');
                        $projectDescription = get_sub_field('project_description');
                        $projectLink = get_sub_field('project_link');
					?>

					<!-- Image carousel - enable but do not display -->
					<div class="image-carousel"></div>
					<?php
					endwhile;
				echo '</div>';
			} ?>
    </div>
                    </section>



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


