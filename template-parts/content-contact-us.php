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

                    <?php
                        $contactUsVideoID = get_post_meta($post->ID, 'contact_us_banner_url', true);
                
                        // Display video
                        if ($contactUsVideoID) {
                            echo '<div class="contact-us-banner-video">';
                            echo wp_oembed_get( 'http://www.youtube.com/watch?v=' . $contactUsVideoID ); 
                            echo '</div>';
                        }
                        ?>

            <!-- Contact details -->
            <div class="contact-info">
                    <div class="address-block">
                        <div class="address-icon">
                            <?php
                                $icon1 = get_field('address_icon', 'option'); ?>

                                <?php   
                                    if( !empty($icon1) ): ?>
                                        <img src="<?php echo $icon1['url']; ?>" alt="<?php echo $icon1['alt']; ?>" width=100/>
                                <?php endif;  ?>                   
                        </div>

                        <div class="contact-address">
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
                                        <img src="<?php echo $icon2['url']; ?>" alt="<?php echo $icon2['alt']; ?>" width=100/>
                                <?php endif;  ?>                   
                        </div>

                        <div class="contact-address">
                        <br>

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
                                        <img src="<?php echo $icon2['url']; ?>" alt="<?php echo $icon2['alt']; ?>" width=100/>
                                <?php endif;  ?>                   
                        </div>

                        <div class="contact-address">
                        <br>

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
                <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3778.572502049448!2d73.83166031453652!3d18.727947987288577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2beb46c541cd5%3A0xa20f93ee52acd028!2sRavon+Engineering+India+Pvt.Ltd.!5e0!3m2!1sen!2sca!4v1557817406894!5m2!1sen!2sca" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> 
            </div>


