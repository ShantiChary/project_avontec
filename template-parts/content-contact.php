<?php
/**
 * Template part for displaying page content in page-contact-us.php
 *
 * @package avontec
 */

?>

<!-- Contact Us Page Content -->

            <!-- Contact details -->
            <div class="contact-info">
                    <h3><?php the_field('company_name', 'option'); ?></h3>
                    <p><?php the_field('address_line_1', 'option'); ?></p>
                    <p><?php the_field('address_line_2', 'option'); ?></p>
                    <p><?php the_field('city', 'option'); ?></p>
                    <p><?php the_field('postal_code', 'option'); ?></p>
                    <p><?php the_field('country', 'option'); ?></p>
                    <br>
                    <a class="telephone" href="tel:+<?php the_field('phone_number_1', 'option'); ?>"><?php the_field('phone_number_1', 'option'); ?></a> 
                    <br>
                    <a class="telephone" href="tel:+<?php the_field('phone_number_2', 'option'); ?>"><?php the_field('phone_number_2', 'option'); ?></a> 
                    <br>
                    <a class="telephone" href="tel:+<?php the_field('fax_number', 'option'); ?>"><?php the_field('fax_number', 'option'); ?></a> 
                    <br>
                    <a class="telephone" href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email_address_1', 'option'); ?></a>
                    <br>
                    <a class="telephone" href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email_address_2', 'option'); ?></a>
            </div>

            <!-- Google Map embed code -->
            <div class="google-map-div">
                <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3778.5397684018044!2d73.826737314846!3d18.729411987287662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b63ca19c61fd%3A0x76e8c851e540ef95!2sM+PLUS+Engineering+Private+Ltd!5e0!3m2!1sen!2sca!4v1555697693119!5m2!1sen!2sca" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>      
            </div>



