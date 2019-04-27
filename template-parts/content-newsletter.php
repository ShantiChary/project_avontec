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

                            echo "<h1 class='section-4-h1'>";
                            the_field('heading_3', 'option');
                            echo "</h1>";

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
                                        echo do_shortcode('[mc4wp_form]');
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
                                        <img src="<?php the_sub_field('social_media_icon'); ?>" width=90>
                                        </a>
                                    </li>

                                <?php endwhile; ?>

                                </ul>

                            <?php endif; ?>
                        </div> <!-- social-media-home -->
                    </div> <!-- newsletter-social -->                        

            </div> <!-- section-4 -->