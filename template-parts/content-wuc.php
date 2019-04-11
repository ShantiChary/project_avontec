<?php
/**
 * Template part for displaying page content in front-page.php
 *
 * @package avontec
 */

?>

<!-- Home Page Banner Gallery -->
<section id="wuc-content">
    <div class="wuc-banner">
        <!-- ?php if( get_field('wuc_banner') ): ?>

            <img src="?php the_field('wuc_banner'); ?>" />

        ?php endif; ?> -->
    </div>

    <div class="section-one">
        <div class="fb-icon">
            <?php if(function_exists('get_field')) { ?>
                    <a href="<?php the_field('fb_link'); ?>" target="_blank"> 
                        <img src="<?php the_field('fb_icon'); ?>" width=100>
                    </a>

            <?php } ?>
        </div>

        <div class="wuc-text">
            <?php 
                echo "<h1 class='wuc-text'>";
                the_field('wuc_text');
                echo "</h1>";
            ?>
        </div>

        <div class="wuc-image">
            <?php if( get_field('wuc_image') ): ?>
                <img src="<?php the_field('wuc_image'); ?>"  width=680/>
            <?php endif; ?>
        </div>
    </div>

    <div class="section-two">
            <!-- ?php echo "<h1>";
                the_field('wuc_heading');
                echo "</h1>";
            ?> -->

            <!-- ?php 
                echo "<p class='wuc-desc'>";
                the_field('wuc_description');
                echo "</p>";
            ?>   -->

            <?php if(function_exists('get_field')) { ?>
                <img src="<?php the_field('wuc_lectrotek_logo'); ?>" width=150>
            <?php } ?>

            <?php 
                echo "<p>";
                the_field('wuc_lectrotek_text');
                echo "</p>";
            ?>  

            <?php if(function_exists('get_field')) { ?>
                <img src="<?php the_field('wuc_ravon_logo'); ?>" width=200>
            <?php } ?>

            <?php 
                echo "<p>";
                the_field('wuc_ravon_text');
                echo "</p>";
            ?>  

            <?php if(function_exists('get_field')) { ?>
                <img src="<?php the_field('wuc_avontec_logo'); ?>" width=300>
            <?php } ?>

            <?php 
                echo "<p>";
                the_field('wuc_avontec_text');
                echo "</p>";
            ?>
            
            <?php if(function_exists('get_field')) { ?>
                <img src="<?php the_field('products_image'); ?>" width=650>
            <?php } ?>

            <?php 
                echo "<p>";
                the_field('wuc_extra_text');
                echo "</p>";
            ?>

            <?php 
                echo "<p>";
                the_field('office_address');
                echo "</p>";
            ?>


    </div>


</section>


