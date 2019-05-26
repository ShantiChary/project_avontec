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

<div class="header-contact-mobile">
                <div class="contact-us-image">
                    <a href="<?php the_field('contact_us_button', 'option'); ?>"><img src="<?php the_field('contact_us_image', 'option'); ?>"></a>
				</div>
				
				<div class="social-media">
				<?php if( have_rows('social_media', 'option') ): ?>

					<ul>
							<!-- <a href="?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<li id="home-icon">			
									<img src="?php the_field('home_icon', 'option'); ?>" width=30>
								</li>
							</a> -->

							<?php while( have_rows('social_media', 'option') ): the_row(); ?>
								<a href="<?php the_sub_field('social_media_link'); ?>" target="_blank"> 
									<li><img src="<?php the_sub_field('social_media_icon'); ?>" width=25>
									</li>
								</a>
							<?php endwhile; ?>

					</ul>

				<?php endif; ?>
		</div>
</div>

<body <?php body_class(); ?>>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'avontec' ); ?></a>

	<header id="masthead" class="site-header">
	<div class="header-top-fixed">

		<div class="contact-us-image">
			<a href="<?php the_field('contact_us_button', 'option'); ?>"><img src="<?php the_field('contact_us_image', 'option'); ?>" width=480></a></h1>
		</div>

		<div class="social-media">

				<div class="header-buttons">
						<div class="language-button header-button">
							<div class="button-text">
								<p>Language</p>
							</div>
							<div class="button-image">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">	
										<img src="<?php the_field('language_button', 'option'); ?>" width=40>
								</a>
							</div>
						</div>

						<div class="login-button header-button">
							<div class="button-text">
								<p>Log In</p>
							</div>
							<div class="button-image">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">	
										<img src="<?php the_field('login_button', 'option'); ?>" width=40>
								</a>
							</div>											
						</div>

						<div class="faq-button header-button">
							<div class="button-text">
								<p>FAQ</p>
							</div>
							<div class="button-image">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">	
									<img src="<?php the_field('faq_button', 'option'); ?>" width=40>
								</a>
							</div>												
						</div>
				</div>

				<?php if( have_rows('social_media', 'option') ): ?>

					<ul>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<li id="home-icon">			
									<img src="<?php the_field('home_icon', 'option'); ?>" width=30>
								</li>
							</a>

							<?php while( have_rows('social_media', 'option') ): the_row(); ?>
								<a href="<?php the_sub_field('social_media_link'); ?>" target="_blank"> 
									<li><img src="<?php the_sub_field('social_media_icon'); ?>" width=30>
									</li>
								</a>
							<?php endwhile; ?>

					</ul>

				<?php endif; ?>
		</div>
	</div>

	<div id="block-header">
		<div class="logo-div">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php the_field('website_logo', 'option'); ?>" width=300></a></h1>
		</div><!-- .site-branding logo-->

		<!-- <input type="checkbox" name="nav-btn" id="nav-btn" />
		<span></span> -->
		<nav id="site-navigation" class="main-navigation">
			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">?php esc_html_e( 'Primary Menu', 'avontec' ); ?></button> -->
			<div class="menu-div">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
			
			</div>
		</nav><!-- #site-navigation -->
	</div>


	</header> <!--#masthead -->

	<div id="content" class="site-content">
