<?php
/**
 * Template part for displaying page content in content-our-customers.php
 *
 * @package avontec
 */

?>

<!-- About Avontec Page Content -->

        <div class="about-section">
            <?php
                    // loop through the rows of data
                    while ( have_rows('about_avontec_section') ) : the_row();
                        // display a sub field value
                        //variable
                        $aboutAvontecHeading = get_sub_field('about_avontec_heading');
                        $aboutAvontecText = get_sub_field('about_avontec_text');

                        ?>

                        <h2><?php echo $aboutAvontecHeading; ?></h2>
                        <p><?php echo $aboutAvontecText; ?></p>
    
                    <?php
                    endwhile;
                ?>
        </div>



