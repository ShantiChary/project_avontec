<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package project_avontec
 */

?>

            <!-- Section 4 Newsletter content -->
            <div class="section-4">
                    <?php
                        if(function_exists('get_field')) {

                            echo "<h3 class='section-4-h3'>";
                            the_field('heading_3', 'option');
                            echo "</h3>";

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
                                        echo "<h4>";
                                        the_field('newsletter_heading', 'option');
                                        echo "</h4>";

                                        echo "<p>";
                                        the_field('newsletter_section', 'option');
                                        echo "</p>";

                                        echo "<p>";
                                        echo do_shortcode('[sibwp_form id=1]');
                                        // echo do_shortcode('[mc4wp_form]');
                                        echo "</p>";
                                    echo "</div>";


                                }
                            ?>
                        </div> <!-- newsletter -->

                        <div class="social-media-home">
                            <div class="pdf-link-h4">
                                <h4>Download PDF Catalogs</h4>
                            </div>
                            <div class="pdf-buttons">
                                <div class="pdf-block-1">
                                    <div class="pdf-button-1 pdf-button">
                                        <div class="pdf-image">
                                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">	
                                                    <img src="<?php the_field('pdf_link_image_1', 'option'); ?>" width=40>
                                            </a>
                                        </div>

                                        <?php if( !empty(get_field('pdf_link_1', 'option')) ): ?>
                                            <div class="pdf-text">
                                                <?php echo "<p>"; ?>			
                                                    <a href="<?php the_field('pdf_link_1', 'option'); ?>" target="_blank">Corporate Brochure</a>
                                                <?php echo "</p>"; ?>
                                            </div>						
                                        <?php endif; ?>                                    
                                    </div>

                                    <div class="pdf-button-2 pdf-button">
                                        <div class="pdf-image">
                                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">	
                                                    <img src="<?php the_field('pdf_link_image_2', 'option'); ?>" width=40>
                                            </a>
                                        </div>
                                        <?php if( !empty(get_field('pdf_link_2', 'option')) ): ?>
                                            <div class="pdf-text">
                                                <?php echo "<p>"; ?>			
                                                    <a href="<?php the_field('pdf_link_2', 'option'); ?>" target="_blank">Conveyer Systems</a>
                                                <?php echo "</p>"; ?>
                                            </div>						
                                        <?php endif; ?>                                          	                         
                                    </div>

                                    <div class="pdf-button-3 pdf-button">
                                        <div class="pdf-image">
                                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">	
                                                <img src="<?php the_field('pdf_link_image_3', 'option'); ?>" width=40>
                                            </a>
                                        </div>	
                                        <?php if( !empty(get_field('pdf_link_3', 'option')) ): ?>
                                            <div class="pdf-text">
                                                <?php echo "<p>"; ?>			
                                                    <a href="<?php the_field('pdf_link_3', 'option'); ?>" target="_blank">Custom Instrumentation R&D</a>
                                                <?php echo "</p>"; ?>
                                            </div>						
                                        <?php endif; ?>                                       									
                                    </div>
                                </div>

                                <div class="pdf-block-2">
                                    <div class="pdf-button-4 pdf-button">
                                        <div class="pdf-image">
                                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">	
                                                    <img src="<?php the_field('pdf_link_image_4', 'option'); ?>" width=40>
                                            </a>
                                        </div>                                        
                                        <?php if( !empty(get_field('pdf_link_3', 'option')) ): ?>
                                            <div class="pdf-text">
                                                <?php echo "<p>"; ?>			
                                                    <a href="<?php the_field('pdf_link_4', 'option'); ?>" target="_blank">Industrial Displays</a>
                                                <?php echo "</p>"; ?>
                                            </div>						
                                        <?php endif; ?>  
                                    </div>

                                    <div class="pdf-button-5 pdf-button">
                                        <div class="pdf-image">
                                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">	
                                                    <img src="<?php the_field('pdf_link_image_5', 'option'); ?>" width=40>
                                            </a>
                                        </div>	                                        
                                        <?php if( !empty(get_field('pdf_link_3', 'option')) ): ?>
                                            <div class="pdf-text">
                                                <?php echo "<p>"; ?>			
                                                    <a href="<?php the_field('pdf_link_5', 'option'); ?>" target="_blank">Automated Machinery</a>
                                                <?php echo "</p>"; ?>
                                            </div>						
                                        <?php endif; ?>  									
                                    </div>

                                    <div class="pdf-button-6 pdf-button">
                                        <div class="pdf-image">
                                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">	
                                                <img src="<?php the_field('pdf_link_image_6', 'option'); ?>" width=40>
                                            </a>
                                        </div>	                                        
                                        <?php if( !empty(get_field('pdf_link_3', 'option')) ): ?>
                                            <div class="pdf-text">
                                                <?php echo "<p>"; ?>			
                                                    <a href="<?php the_field('pdf_link_3', 'option'); ?>" target="_blank">Digital Transformation</a>
                                                <?php echo "</p>"; ?>
                                            </div>						
                                        <?php endif; ?>  											
                                    </div>
                                </div>
                            </div>


                            <!-- ?php if( have_rows('social_media', 'option') ): ?>

                                <ul>

                                ?php while( have_rows('social_media', 'option') ): the_row(); ?>


                                    <li><a href="?php the_sub_field('social_media_link'); ?>" target="_blank"> 
                                        <img src="?php the_sub_field('social_media_icon'); ?>" width=90>
                                        </a>
                                    </li>

                                <\?php endwhile; ?>

                                </ul>

                            ?php endif; ?> -->
                        </div> <!-- social-media-home -->
                    </div> <!-- newsletter-social -->                        

            </div> <!-- section-4 -->