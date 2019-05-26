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
			<a href="<?php the_field('contact_us_button', 'option'); ?>"><img src="<?php the_field('contact_us_image', 'option'); ?>" width=480></a>
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

	<div class="banner-slider">
		<?php
			//Image Slider
			//slider_portfolio = Repeater field
			//slider_image = subfield

			if( have_rows('banner_slider') ){
				echo '<div class="slider-for">';
					// loop through the rows of data
					while ( have_rows('banner_slider') ) : the_row();
						// display a sub field value
						//variable
						$image = get_sub_field('banner_image');
						$bannerText = get_sub_field('banner_text');
						?>
							<div class="banner-slide">
								<img src="<?php echo $image['url']; ?>"/>
								<div class="banner-text">
									<h1><?php echo $bannerText; ?></h1>
								</div>
							</div>
								
							<!-- <div> -->

							<!-- </div> -->


						<?php
					endwhile;
				echo '</div>'; ?>

				<div class="slider-nav">';
					<!-- // loop through the rows of data -->
					<?php
					while ( have_rows('banner_slider') ) : the_row();
					// display a sub field value
					//vars
					$image = get_sub_field('banner_image');
					$bannerText = get_sub_field('banner_text');
					?>

					<!-- Image carousel - enable but do not display -->
					<div class="image-carousel"></div>
					<?php
					endwhile;
				echo '</div>';
			} ?>
	</div>

	<div id="block-header" class="block-logo-nav">
		<div class="logo-div">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php the_field('website_logo', 'option'); ?>" width=300></a></h1>
		</div><!-- .site-branding logo-->

		<!-- <input type="checkbox" name="nav-btn" id="nav-btn" />
		<span></span> -->
		
		<nav id="site-navigation" class="main-navigation nav">
			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">?php esc_html_e( 'Primary Menu', 'avontec' ); ?></button> -->
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</div>


	</header> <!--#masthead -->

	<div id="content" class="site-content">
