<?php
/**
 * Template part for displaying page content in annual-maintenance-contracts.php
 *
 * @package avontec
 */

?>

<!-- Chain Conveying Page Content -->

<div class="about-section amc-section">
        <?php
            $ppText = get_field('pp_text');
            $ppImage = get_field('pp_image');
            $ppText2 = get_field('pp_text_2');
            $ppImage2 = get_field('pp_image_2');
            $ppText3 = get_field('pp_text_3');
            $ppImage3 = get_field('pp_image_3');
            $ppText4 = get_field('pp_text_4');
            $ppImage4 = get_field('pp_image_4');
            $ppText5 = get_field('pp_text_5');
            $ppImage5 = get_field('pp_image_5'); ?>

            <?php   
                if( !empty($ppImage) ): ?>
                    <img src="<?php echo $ppImage['url']; ?>" alt="<?php echo $ppImage['alt']; ?>" width=100%/>
            <?php endif;  ?>

            <div>
                <?php  
                    if( !empty($ppText) ): ?>
                    <?php echo $ppText; ?>
                <?php endif;   ?>              
            </div>

            <?php
            if( !empty($ppImage2) ): ?>
                <img class="internal-page-image" src="<?php echo $ppImage2['url']; ?>" alt="<?php echo $ppImage2['alt']; ?>" width=100%/>
            <?php endif;  ?>

            <div>
                <?php  
                    if( !empty($ppText2) ): ?>
                    <?php echo $ppText2; ?>
                <?php endif;   ?>              
            </div>

            <?php
            if( !empty($ppImage3) ): ?>
                <img class="internal-page-image" src="<?php echo $ppImage3['url']; ?>" alt="<?php echo $ppImage3['alt']; ?>" width=100%/>
            <?php endif;  ?>
  
            <div>
                <?php  
                    if( !empty($ppText3) ): ?>
                    <?php echo $ppText3; ?>
                <?php endif;   ?>              
            </div>

            <?php
            if( !empty($ppImage4) ): ?>
                <img class="internal-page-image" src="<?php echo $ppImage4['url']; ?>" alt="<?php echo $ppImage4['alt']; ?>" width=100%/>
            <?php endif;  ?>
  
            <div>
                <?php  
                    if( !empty($ppText4) ): ?>
                    <?php echo $ppText4; ?>
                <?php endif;   ?>              
            </div>

            <?php
            if( !empty($ppImage5) ): ?>
                <img class="internal-page-image" src="<?php echo $ppImage5['url']; ?>" alt="<?php echo $ppImage5['alt']; ?>" width=100%/>
            <?php endif;  ?>
  
            <div>
                <?php  
                    if( !empty($ppText5) ): ?>
                    <?php echo $ppText5; ?>
                <?php endif;   ?>              
            </div>
  
</div>




