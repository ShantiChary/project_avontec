<?php
/**
 * Template part for displaying page content in page-contact-us.php
 *
 * @package avontec
 */

?>

<!-- Contact Us Page Content -->
            <!--Contact Us Banner -->
            <?php 
                // $image = get_field('contact_us_banner'); ?>

                    <!-- ?php   
                    if( !empty($image) ): ?>
                        <img src="?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="890"/>
                    ?php endif; ?> -->

                    <!-- ?php
                        $contactUsVideoID = get_post_meta($post->ID, 'contact_us_banner_url', true);
                
                        // Display video
                        if ($contactUsVideoID) {
                            echo '<div class="contact-us-banner-video">';
                            echo wp_oembed_get( 'http://www.youtube.com/watch?v=' . $contactUsVideoID ); 
                            echo '</div>';
                        }
                        ?> -->

            <!-- Contact details -->
            <div class="contact-block-main">
                <div class="contact-info">
                        <div class="address-block">
                            <div class="address-icon">
                                <?php
                                    $icon1 = get_field('address_icon', 'option'); ?>

                                    <?php   
                                        if( !empty($icon1) ): ?>
                                            <img src="<?php echo $icon1['url']; ?>" alt="<?php echo $icon1['alt']; ?>" width=80/>
                                    <?php endif;  ?>                   
                            </div>

                            <div class="contact-address factory-address-block">
                                <h4><?php echo 'FACTORY ADDRESS'; ?></h4>
                                <p><?php the_field('company_name', 'option'); ?></p>
                                <p><?php the_field('address_line_1', 'option'); ?></p>
                                <p><?php the_field('address_line_2', 'option'); ?></p>

                                <?php
                                    $city = get_field('city', 'option');
                                    $postalCode = get_field('postal_code', 'option');
                                    $cityPostalCode = $city ." - ". $postalCode;
                                ?>
                                <p><?php echo $cityPostalCode; ?></p>
                            
                                <p><?php the_field('country', 'option'); ?></p>
                            </div>
                        </div>

                        <br>
                        <div class="address-block">
                            <div class="address-icon">
                                <?php
                                    $icon2 = get_field('phone_icon', 'option'); ?>

                                    <?php   
                                        if( !empty($icon2) ): ?>
                                            <img src="<?php echo $icon2['url']; ?>" alt="<?php echo $icon2['alt']; ?>" width=80/>
                                    <?php endif;  ?>                   
                            </div>

                            <div class="contact-address phone-block">

                                <!-- <h3 class="phone-title">Phone:</h3> -->
                                <p><a href="tel:+<?php the_field('phone_number_1', 'option'); ?>"><?php the_field('phone_number_1', 'option'); ?></a></p>

                                <!-- <p><a href="tel:+?php the_field('phone_number_2', 'option'); ?>">?php the_field('phone_number_2', 'option'); ?></a></p> -->

                                <p><?php the_field('alt_phone_numbers', 'option'); ?></p>
                            </div>                            
                        </div>
                        <br>

                        <div class="address-block">
                            <div class="address-icon">
                                <?php
                                    $icon2 = get_field('email_icon', 'option'); ?>

                                    <?php   
                                        if( !empty($icon2) ): ?>
                                            <img src="<?php echo $icon2['url']; ?>" alt="<?php echo $icon2['alt']; ?>" width=80/>
                                    <?php endif;  ?>                   
                            </div>

                            <div class="contact-address email-block">

                                <!-- <h3 class="email-title">Email:</h3> -->
                                <!-- <p>?php the_field('email_title_1', 'option'); ?></p> -->
                                <p><a href="mailto:<?php the_field('email_address_1', 'option'); ?>"><?php the_field('email_address_1', 'option'); ?></a></p>

                                <!-- <p>?php the_field('email_title_2', 'option'); ?></p> -->
                                <p><a href="mailto:<?php the_field('email_address_2', 'option'); ?>"><?php the_field('email_address_2', 'option'); ?></a></p>

                                <!-- <p>?php the_field('email_title_2', 'option'); ?></p> -->
                                <p><a href="mailto:<?php the_field('email_address_3', 'option'); ?>"><?php the_field('email_address_3', 'option'); ?></a></p>
                            </div>                            
                        </div>
                    </div>

                    <!-- Google Map embed code -->
                    <div class="google-map-div">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3778.57034224134!2d73.83194051489592!3d18.72804458728851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2cba90c0d0f07%3A0x13a9ac6330b24b3a!2sAvontec+Automation+Private+Limited!5e0!3m2!1sen!2sca!4v1559146648562!5m2!1sen!2sca" width="630" height="330" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>

                <!-- Contact Us -->
                <div class="cform-h4">
                    <h4>Please provide the following information so we may best help you.</h4>
                </div>
                <div class="contact-form">
        
                    <h4>For more information about our Products and Services, please fill in the form below:</h4>

                    <?php echo do_shortcode('[contact-form-7 id="1389" title="Contact form main"]'); ?>

                </div> <!-- contact-form -->

                
                <div class="social-media-home contact-us-pdf-block">

                            <h4>Download PDF Catalogs</h4>

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
                        </div> <!-- social-media-home -->




