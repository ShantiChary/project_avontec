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


            <div class="about-section-main">
                    <!-- About Us banner image -->

                    <?php 
                        $image = get_field('about_us_banner', 'option');

                        if( !empty($image) ): ?>
                            <div class="banner-sub-menu">
                                <div class="banner-img-div">
                                    <!-- <img class="banner-img" src="?php echo $image['url']; ?>" alt="?php echo $image['alt']; ?>" /> -->
                                </div>

                                <h1 class="banner-h1"><?php echo get_the_title(); ?> </h1>

                                <!-- Sub menu div -->
                                <div class="sub-menu-div">

                                <h3><?php echo 'More' . ' ' . get_the_title( $post->post_parent ); ?></h3>
                                    <?php echo do_shortcode('[wpb_childpages]'); ?>
                                </div>
                            </div>

                    <?php endif; ?>

                    <div class="about-section-text">
                        <?php
                                // loop through the rows of data
                                while ( have_rows('about_us_section') ) : the_row();
                                    // display a sub field value
                                    //variable
                                    $aboutUsHeading = get_sub_field('about_us_heading');
                                    $aboutUsText = get_sub_field('about_us_text');

                                    ?>

                                    <h2><?php echo $aboutUsHeading; ?></h2>
                                    <p><?php echo $aboutUsText; ?></p>
                
                                <?php
                                endwhile;
                            ?>
                    </div>
                </div>

                <?php get_sidebar(); ?>

            <br>

</section>


