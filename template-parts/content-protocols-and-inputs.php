<?php
/**
 * Template part for displaying page content in protocols-and-inputs.php
 *
 * @package avontec
 */

?>

<!-- Protocols & Inputs Page Content -->

<div class="about-section">
        <?php
            $ppText = get_field('pp_text');
            $ppImage = get_field('pp_image'); ?>

            <div>
                <?php echo $ppText; ?>
            </div>

            <?php   
                if( !empty($ppImage) ): ?>
                    <img src="<?php echo $ppImage['url']; ?>" alt="<?php echo $ppImage['alt']; ?>" width=100%/>
            <?php endif;  
        ?>
</div>



