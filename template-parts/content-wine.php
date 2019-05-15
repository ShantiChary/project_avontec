<?php
/**
 * Template part for displaying page content in wine.php
 *
 * @package avontec
 */

?>

<!-- Primary Packaging Content -->
<div class="about-section">
        <?php
            $ppText = get_field('pp_text');
            $ppImage = get_field('pp_image'); ?>

            <div>
                <p><?php echo $ppText; ?></p>
            </div>

            <?php   
                if( !empty($ppImage) ): ?>
                    <img src="<?php echo $ppImage['url']; ?>" alt="<?php echo $ppImage['alt']; ?>" width=100%/>
            <?php endif;  
        ?>
</div>