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
        <!-- <div class="wuc-heading"> -->
            <?php echo "<h1>";
                the_field('wuc_heading');
                echo "</h1>";
            ?>
        <!-- </div> -->

        <!-- <div class="wuc-description"> -->
            <?php 
                echo "<p class='wuc-desc'>";
                the_field('wuc_description');
                echo "</p>";
            ?>  
        <!-- </div> -->
    </div>


</section>


