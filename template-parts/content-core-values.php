<?php
/**
 * Template part for displaying page content in core-values.php
 *
 * @package avontec
 */

?>

<!-- Core Values Page Content -->

<div class="about-section">
            <?php

                    // loop through the rows of data
                    while ( have_rows('member_profile') ) : the_row();
                        // display a sub field value
                        //variable
                        $cvImage = get_sub_field('member_profile_picture');
                        $cvHeading = get_sub_field('member_title');
                        $cvBlurb = get_sub_field('member_blurb');

                        ?>

                        <div class="cv-div">
                            <div class="cv-img">
                                <img src="<?php echo $cvImage['url']; ?>" width=200 height=130>
                            </div>

                            <div class="cv-text">

                                <h5><?php echo $cvHeading; ?></h5>
                                <p><?php echo $cvBlurb; ?></p>

                            </div>
                        </div>
                    <?php
                    endwhile;
                ?>
    </div>



