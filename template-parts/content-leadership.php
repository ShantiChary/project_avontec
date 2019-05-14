<?php
/**
 * Template part for displaying page content in content-share-holders.php
 *
 * @package avontec
 */

?>

<!-- Share Holders Page Content -->

    <div class="about-section">
            <?php

                    // Leadership Top Image // ?>
                    <div class="leadership_top_image">
                    <?php
                    $leadershipImage = get_field('leadership_top_image'); ?>

                    <?php   
                        if( !empty($leadershipImage) ): ?>
                            <img src="<?php echo $leadershipImage['url']; ?>" alt="<?php echo $leadershipImage['alt']; ?>" width=600/>
                    <?php endif;  ?>
                    </div>              

                    <?php
                    // loop through the rows of data
                    while ( have_rows('member_profile') ) : the_row();
                        // display a sub field value
                        //variable
                        $memberImage = get_sub_field('member_profile_picture');
                        $memberName = get_sub_field('member_name');
                        $memberTitle = get_sub_field('member_title');
                        $memberBlurb = get_sub_field('member_blurb');

                        ?>

                        <div class="member-details">
                            <div class="member-image">
                                <img src="<?php echo $memberImage['url']; ?>" width=80>
                            </div>

                            <div class="member-info">
                                <h4><?php echo $memberName; ?></h4>
                                <h5><?php echo $memberTitle; ?></h5>
                            </div>
                        </div>
                        <div class="member-blurb">
                            <ul>
                                <?php echo $memberBlurb; ?>
                            </ul>
                         </div>
    
                    <?php
                    endwhile;
                ?>
    </div>