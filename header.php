<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package avontec
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'avontec' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php the_field('website_logo', 'option'); ?>" width=300></a></h1>
		</div><!-- .site-branding logo-->




		<!-- <div class="nav-social">
			<div class="social-media">
				?php if( have_rows('social_media', 'option') ): ?>

					<ul>

					?php while( have_rows('social_media', 'option') ): the_row(); ?>


						<li><a href="?php the_sub_field('social_media_link'); ?>" target="_blank"> 
							<img src="?php the_sub_field('social_media_icon'); ?>" width=40>
							</a>
						</li>

					?php endwhile; ?>

					</ul>

				?php endif; ?>
			</div> -->




			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'avontec' ); ?></button>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</nav><!-- #site-navigation -->
		</div> <!-- nav-social -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
