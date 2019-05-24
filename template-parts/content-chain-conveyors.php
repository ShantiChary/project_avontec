<?php
/**
 * Template part for displaying page content in chain-conveying.php
 *
 * @package avontec
 */

?>

<!-- Chain Conveying Page Content -->

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



