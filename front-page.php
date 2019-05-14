<?php
/** 
 * The template for displaying Front Page of the site
 */

//  get_header();
	if(is_page('101')) {
		get_header('landing');
	}
	// else if(is_page(587)) { for local - 241 is for prod Website Under Construction page
		else if(is_page(587)) {

	}
	// else {
	// 	get_header('internal');
	// }
	wp_head();
 ?>

 	<div id="primary" class="content-area">
		<main id="main" class="site-main home-main" role="main">

		<?php
		while ( have_posts() ) :
			the_post();

			if(is_page('101')) {
				get_template_part('template-parts/content', 'home');
			}
			elseif (is_page(241)) {
				get_template_part('template-parts/content', 'wuc');
			}

		endwhile; // End of the loop.
		?>		
 

		</main><!-- #main -->
	</div><!-- #primary -->


<!-- Disabled for WUC Page. Enable for actual home page NOTE: IF YOU DISABLE FOOTER, SLICK SLIDER WILL NOT WORK!!!-->
<?php 
	if(is_page('101')) {
		get_footer(); 
	}
?>