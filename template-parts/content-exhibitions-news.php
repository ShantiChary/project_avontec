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


            <div id="exampleSlider">      <!-- Give wrapper ID to target with jQuery & CSS -->
                    <div class="MS-content">

                        <!-- // loop through the rows of data -->
                        <?php
                        while ( have_rows('news_article', 'option') ) : the_row(); ?>
                        
                            <?php
                                $image = get_sub_field('news_article_image', 'option');
                                $newsLink = get_sub_field('news_article_link', 'option');
                                $newsTitle = get_sub_field('news_article_title', 'option');
                                $newsText = get_sub_field('news_article_text', 'option');

                            ?>                        
                            <div class="item">
                                <div class="news-item">
                                    <div class="news-image">
                                        <img src="<?php echo $image['url']; ?>" width=250 height=100%>   
                                    </div>

                                    <div class="news-text"> 
                                        <h5><a href="#"><?php echo $newsLink; ?></a></h5>
                                        <h5><?php echo $newsTitle; ?></h5>
                                        <p><?php echo $newsText; ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php
                        endwhile;
                        ?>            
                    </div>
                    <div class="MS-controls">
                        <button class="MS-left"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                        <button class="MS-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                    </div>
            </div>
        </div>
    </div>
