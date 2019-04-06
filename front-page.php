<?php
/** 
 * The template for displaying Front Page of the site
 */

//  get_header();
	if(is_page(101)) {
		get_header('landing');
	}
	else {
		get_header();
	}
	wp_head();
 ?>

 	<div id="primary" class="content-area">
		<main id="main" class="site-main home-main" role="main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part('template-parts/content', 'home');

		endwhile; // End of the loop.
		?>		
 

		</main><!-- #main -->
	</div><!-- #primary -->



<?php get_footer(); ?>