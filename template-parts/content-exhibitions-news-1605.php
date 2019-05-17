<?php
/**
 * Template part for displaying page content in content-exhibitions-news.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package project_avontec
 */

?>

    <!-- Section 5 Exhibitions & News content -->
    <div class="section-5">
        <div class="section-5-inner">

            <?php    
                    if(function_exists('get_field')) {

                        echo "<h3>";
                        the_field('news_section_heading', 'option');
                        echo "</h3>";
                    }
            ?>


            <div id="key-news" class="news-slider">

                <?php
                    //Image Slider
                    //slider_portfolio = Repeater field
                    //slider_image = subfield

                    if( have_rows('news_article') ){ ?>
                        <div class="news-multiple news-slide">
                            <?php
                                // loop through the rows of data
                                while ( have_rows('news_article') ) : the_row();
                                    // display a sub field value
                                    //variable
                                    $image = get_sub_field('news_article_image', 'option');
                                    $newsLink = get_sub_field('news_article_link', 'option');
                                    $newsTitle = get_sub_field('news_article_title', 'option');
                                    $newsText = get_sub_field('news_article_text', 'option');

                                    ?>

                                    <div class="news-slides">
                                        <a href="<?php the_sub_field('news_article_link'); ?>">
                                            <img src="<?php echo $image['url']; ?>" width=200>
                                        </a>
                                        <h4><?php echo $newsTitle; ?></h4>
                                        <p><?php echo $newsText; ?></p>

                                    </div> <!-- project-slides -->
                
                                <?php
                                endwhile;
                                ?>
                        </div> <!-- news-multiple newss-slide -->

                        <div class="news-nav">';
                            <!-- // loop through the rows of data -->
                            <?php
                            while ( have_rows('news_article') ) : the_row();
                                // display a sub field value
                                //vars
                                $image = get_sub_field('news_article_image', 'option');
                                $newsLink = get_sub_field('news_article_link', 'option');
                                $newsTitle = get_sub_field('news_article_title', 'option');
                                $newsText = get_sub_field('news_article_text', 'option');
                            ?>

                            <!-- Image carousel - enable but do not display -->
                            <div class="image-carousel"></div>
                            <?php
                            endwhile; ?>
                        </div> <!-- news-nav -->
                   <?php } ?>
            </div> <!-- news-slider -->


        </div>
    </div>
