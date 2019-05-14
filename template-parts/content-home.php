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
                        if ($video1ID) {
                            echo '<div class="video1Container">';
                            // Echo the embed code via oEmbed
                            echo wp_oembed_get( 'http://www.youtube.com/watch?v=' . $video1ID ); 
                            echo '</div>';
                        }

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
                                                <h3 class='video2Title'><?php echo $videoTitle; ?></h3>

                                                <p class='video2Text'><?php echo $videoText; ?></p>
                                            </div>

                                            <?php
                                            // Get the video URL and put it in the $video variable
                                            // Check if there is in fact a video URL
                                            if ($video2ID) {
                                                echo '<div class="video2Container">';
                                                // Echo the embed code via oEmbed
                                                // echo wp_oembed_get( 'http://www.youtube.com/watch?v=' . $videoHome2, array('width'=>280, 'height'=>150)); 
                                                // echo wp_oembed_get( 'http://www.youtube.com/watch?v=' . $video2ID ); 
                                                // echo do_shortcode("[video src=".get_sub_field('video_url')."]");
                                                echo $video2ID;
                                                echo '</div>';
                                            }
                                        ?>
                                        </div>
                
                                <?php
                                endwhile;   ?>                          
                            </div> <!--video2MainContainer  -->
                      <?php  }    ?>          

            </div> <!--video-2-section -->
        </section> <!-- section-2 -->

        <!-- SECTION 3 - KEY PROJECTS -->
        <div id="key-projects" class="projects-slider">
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


            <?php get_template_part( 'template-parts/content', 'newsletter' ); ?>
            <?php get_template_part( 'template-parts/content', 'exhibitions-news' ); ?>
            


</section> <!-- home-content -->


