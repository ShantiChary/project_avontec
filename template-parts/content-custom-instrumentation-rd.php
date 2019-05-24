<?php
/**
 * Template part for displaying page content in custom-iiot-h-w-s-w.php
 *
 * @package avontec
 */

?>

<!-- Chain Conveying Page Content -->

<div class="about-section">
        <?php
            $ppText = get_field('pp_text');
            $ppImage = get_field('pp_image'); ?>

            <div class="conveying-list-text">
                <ul>
                    <?php echo $ppText; ?>
                </ul>
            </div>

            <?php   
                if( !empty($ppImage) ): ?>
                    <img src="<?php echo $ppImage['url']; ?>" alt="<?php echo $ppImage['alt']; ?>" width=100%/>
            <?php endif;  
        ?>
</div>




