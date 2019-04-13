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
                echo "<h2 class='section-2-h2'>";
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
                        if ($video1ID) {
                            echo '<div class="video1Container">';
                            // Echo the embed code via oEmbed
                            echo wp_oembed_get( 'http://www.youtube.com/watch?v=' . $video1ID ); 
                            echo '</div>';
                        }

                        echo '<p class="video1Text">';
                            the_field('video_1_text');
                        echo "</p>";  
                    
                        echo "<a class='learn-more-button' href='";
                        the_field('learn_more_button');
                        echo "'>Learn More</a>";

                    }	
                    ?>
            </div> <!-- video-1-section -->


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
                                            $videoUrl = get_post_meta($post->ID, 'video_2_url', true);
                                    
                                            // Display video ?>
                                            <div class="video2TitleText">
                                                <h3 class='video2Title'><?php echo $videoTitle; ?></h3>

                                                <p class='video2Text'><?php echo $videoText; ?></p>
                                            </div>

                                            <?php
                                            // Get the video URL and put it in the $video variable
                                            // Check if there is in fact a video URL
                                            if ($videoUrl) {
                                                echo '<div class="videoContainer">';
                                                // Echo the embed code via oEmbed
                                                echo wp_oembed_get( 'http://www.youtube.com/watch?v=' . $videoUrl, array('width'=>280, 'height'=>150)); 
                                                echo '</div>';
                                            }
                                        ?>
                                        </div>
                
                                <?php
                                endwhile;                             
                            echo '</div>'; //video2MainContainer  
                        }  
                    ?>                

            </div> <!--video-2-section -->
        </section> <!-- section-2 -->

        <!-- SECTION 3 - KEY PROJECTS -->
        <div id="key-projects" class="projects-slider">
                <?php
                    if(get_field('heading_2')){
                        echo '<h4 class="key-heading">';
                        the_field('heading_2');
                        echo '</h4>';
                    }
                ?>

                <?php
                    //Image Slider
                    //slider_portfolio = Repeater field
                    //slider_image = subfield

                    if( have_rows('key_projects_slider') ){ ?>
                        <div class="multiple-items projects-slide">
                            <?php
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
                                        <a href="<?php the_sub_field('project_link'); ?>">
                                            <img src="<?php echo $image['url']; ?>" width=200>
                                        </a>
                                        <h4><?php echo $projectTitle; ?></h4>
                                        <p><?php echo $projectDescription; ?></p>

                                    </div> <!-- project-slides -->
                
                                <?php
                                endwhile;
                                ?>
                        </div> <!-- multiple-items projects-slide -->

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
                            endwhile; ?>
                        </div> <!-- multiple-nav -->
                   <?php } ?>
            </div> <!-- projects-slider -->


            <!-- Section 4 Newsletter content -->
            <div class="section-4">
                    <?php
                        if(function_exists('get_field')) {

                            echo "<h2 class='section-4-h2'>";
                            the_field('heading_3');
                            echo "</h2>";

                            echo "<p class='section-4-para'>";
                            the_field('section_4');
                            echo "</p>";
                        }
                    ?>

                    <div class="newsletter-social">
                        <div class="newsletter">
                            <?php
                                if(function_exists('get_field')) {
                                    echo "<div class='newsletter-full'>";
                                    echo "<h5>";
                                    the_field('newsletter_heading');
                                    echo "</h5>";

                                    echo "<p>";
                                    the_field('newsletter_section');
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

            <!-- Section 5 Exhibitions & News content -->
            <div class="section-5">
                <div class="section-5-inner">

                    <?php    
                            if(function_exists('get_field')) {

                                echo "<h4 class='news_section_heading'>";
                                the_field('news_section_heading');
                                echo "</h4>";
                            }
                    ?>


                    <div id="exampleSlider">      <!-- Give wrapper ID to target with jQuery & CSS -->
                            <div class="MS-content">

                                <!-- // loop through the rows of data -->
                                <?php
                                while ( have_rows('news_article') ) : the_row(); ?>
                                
                                    <?php
                                        $image = get_sub_field('news_article_image');
                                        $newsText = get_sub_field('news_article_text');

                                    ?>                        
                                    <div class="item">
                                        <img src="<?php echo $image['url']; ?>" width=50>   
                                    <!-- </div> -->

                                    <!-- <div class="news-text">  -->
                                        <p><?php echo $newsText; ?></p>
                                    </div>
                                <?php
                                endwhile;
                                ?>            
                            </div>
                            <div class="MS-controls">
                                <button class="MS-left"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                                <button class="MS-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                            </div>
                    </div>
                </div>
            </div>


</section> <!-- home-content -->


