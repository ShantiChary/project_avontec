<?php
/**
 * Template part for displaying page content in page-contact-us.php
 *
 * @package avontec
 */

?>

<!-- Contact Us Content -->
<section id="internal-content">

            <div class="internal-section-1">

                <div class="about-section-1-text">
                    <?php
                        if(function_exists('get_field')) {
                            // echo '<p>';
                            // the_field('about_us_text');
                            // echo '</p>';
                        }
                    ?>
                </div>

                <?php get_sidebar(); ?>

            <br>

</section>


