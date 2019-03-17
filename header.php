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
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="website-logo" src="<?php the_field('website_logo'); ?>" width="300"></a>
		</div><!-- .site-branding logo-->

		<div class="nav-social">
			<div class="social-media">
				<ul>
					<li><a href="https://www.linkedin.com/in/shanti-chary-96446615" class="facebook" title="Facebook" target="_blank"><img src="<?php the_field('social_media_facebook'); ?>" width="30"></a></li>

					<li><a href="https://github.com/ShantiChary?tab=repositories" class="linkedin" title="LinkedIn" target="_blank"> <img src="<?php the_field('social_media_linkedin'); ?>" width="30"></a></li>

					<li><a href="https://www.instagram.com/shantichary" class="twitter" title="Twitter" target="_blank"><img src="<?php the_field('social_media_twitter'); ?>" width="30"></i></a></li>

					<li><a href="https://www.instagram.com/shantichary" class="youtube" title="YouTube" target="_blank"><img src="<?php the_field('social_media_youtube'); ?>" width="30"></a></li>
				</ul>	
			</div> <!-- social-media -->

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
