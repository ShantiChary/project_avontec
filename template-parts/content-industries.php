<?php
/**
 * Template part for displaying page content in aluminium-flexible-chains.php
 *
 * @package avontec
 */

?>

<!-- Aluminium Flexible Chains Page Content -->

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


