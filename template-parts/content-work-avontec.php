<?php
/**
 * Template part for displaying page content in page-work-avontec.php
 *
 * @package avontec
 */

?>

<!-- Work @ Avontec Content -->
<div class="about-section about-us-section work-avontec-section">

            <div class="job-page-heading">
                <h3>The following positions are currently available with Avontec:</h3>
            </div>

            <div>
                <?php
                        // check if the repeater field has rows of data
                        if( have_rows('job_description') ):

                            // loop through the rows of data
                            while ( have_rows('job_description') ) : the_row(); ?>

                                <?php
                                $jobTitle = get_sub_field('job_title'); 
                                $jobHeading1 = get_sub_field('job_heading_1'); 
                                $jobDescription1 = get_sub_field('job_description_1'); 
                                $jobHeading2 = get_sub_field('job_heading_2'); 
                                $jobDescription2 = get_sub_field('job_description_2'); 
                                $jobHeading3 = get_sub_field('job_heading_3'); 
                                $jobDescription3 = get_sub_field('job_description_3'); 
                                $jobHeading4 = get_sub_field('job_heading_4'); 
                                $jobDescription4 = get_sub_field('job_description_4');
                                $jobFooter = get_sub_field('job_footer');  ?>

                                <div class="job-description-div">
                                        <?php // display a sub field value
                                        if( !empty($jobTitle) ): ?>
                                            <h3>
                                                <?php echo $jobTitle; ?>
                                            </h3>
                                        <?php endif;  ?>

                                        <?php
                                        if( !empty($jobHeading1) ): ?>
                                            <h4>
                                                <?php echo $jobHeading1; ?>
                                            </h4>
                                        <?php endif;  ?>

                                        <?php
                                        if( !empty($jobDescription1) ): ?>
                                            <p>
                                                <?php echo $jobDescription1; ?>
                                            </p>
                                        <?php endif;  ?>

                                        <?php
                                        if( !empty($jobHeading2) ): ?>
                                            <h4>
                                                <?php echo $jobHeading2; ?>
                                            </h4>
                                        <?php endif;  ?>

                                        <?php
                                        if( !empty($jobDescription2) ): ?>
                                            <p>
                                                <?php echo $jobDescription2; ?>
                                            </p>
                                        <?php endif;  ?>

                                        <?php
                                        if( !empty($jobHeading3) ): ?>
                                            <h4>
                                                <?php echo $jobHeading3; ?>
                                            </h4>
                                        <?php endif;  ?>

                                        <?php
                                        if( !empty($jobDescription3) ): ?>
                                            <p>
                                                <?php echo $jobDescription3; ?>
                                            </p>
                                        <?php endif;  ?>

                                        <?php
                                        if( !empty($jobHeading4) ): ?>
                                            <h4>
                                                <?php echo $jobHeading4; ?>
                                            </h4>
                                        <?php endif;  ?>

                                        <?php
                                        if( !empty($jobDescription4) ): ?>
                                            <p>
                                                <?php echo $jobDescription4; ?>
                                            </p>
                                        <?php endif;  ?>

                                        <?php
                                        if( !empty($jobFooter) ): ?>
                                            <h4>
                                                <?php echo $jobFooter; ?>
                                            </h4>
                                        <?php endif;  ?>

                                </div>

                            <?php
                            endwhile;

                        else :

                            // no rows found

                        endif;
                ?>
            </div>
</div>