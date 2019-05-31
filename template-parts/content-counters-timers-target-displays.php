<?php
/**
 * Template part for displaying page content in counter-timers-target.php
 *
 * @package avontec
 */

?>

<!-- Counter Timers Target Page Content -->

<div class="about-section">
        <?php
            $ppText = get_field('pp_text');
            $ppImage = get_field('pp_image');
            $ppText2 = get_field('pp_text_2');
            $ppImage2 = get_field('pp_image_2');
            $ppText3 = get_field('pp_text_3');
            $ppImage3 = get_field('pp_image_3'); ?>

            <div>
                <?php  
                    if( !empty($ppImage) ): ?>
                    <?php echo $ppText; ?>
                <?php endif;   ?>              
            </div>

            <?php   
                if( !empty($ppImage) ): ?>
                    <img class="internal-page-image" src="<?php echo $ppImage['url']; ?>" alt="<?php echo $ppImage['alt']; ?>" width=100%/>
            <?php endif;  ?>

            <div>
                <?php  
                    if( !empty($ppText2) ): ?>
                    <?php echo $ppText2; ?>
                <?php endif;   ?>              
            </div>
  
            <?php
            if( !empty($ppImage2) ): ?>
                <img class="internal-page-image" src="<?php echo $ppImage2['url']; ?>" alt="<?php echo $ppImage2['alt']; ?>" width=100%/>
            <?php endif;  ?>

            <div>
                <?php  
                    if( !empty($ppText3) ): ?>
                    <?php echo $ppText3; ?>
                <?php endif;   ?>              
            </div>
  
            <?php
            if( !empty($ppImage3) ): ?>
                <img class="internal-page-image" src="<?php echo $ppImage3['url']; ?>" alt="<?php echo $ppImage3['alt']; ?>" width=100%/>
            <?php endif;  ?>
</div>


