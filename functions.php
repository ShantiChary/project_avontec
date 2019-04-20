<?php
/**
 * project_avontec functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package project_avontec
 */

if ( ! function_exists( 'avontec_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function avontec_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on project_avontec, use a find and replace
		 * to change 'avontec_theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'avontec_theme', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'avontec_theme' ),
			'footer_menu' => esc_html__( 'Footer Menu', 'avontec_theme' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'avontec_theme_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'avontec_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function avontec_theme_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'avontec_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'avontec_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function avontec_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'avontec_theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'avontec_theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'avontec_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function avontec_theme_scripts() {

	wp_enqueue_style( 'avontec_theme-style', get_stylesheet_uri() );

	wp_enqueue_script( 'avontec_theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'avontec_theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	// Enqueue Slick scripts and styles
	wp_enqueue_script( 'slickjs', get_stylesheet_directory_uri() . '/js/slick.min.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'slickjs-init', get_stylesheet_directory_uri(). '/js/slick-init.js', array( 'slickjs' ), '1.0', true );
	wp_enqueue_style( 'slickcss', get_stylesheet_directory_uri() . '/css/slick.css', '1.6.0', 'all');
	wp_enqueue_style( 'slickcsstheme', get_stylesheet_directory_uri(). '/css/slick-theme.css', '1.0', 'all');

	// Enqueue Multislider script and styles
	wp_enqueue_script( 'multisliderjs', get_stylesheet_directory_uri() . '/js/multislider/js/multislider.min.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'multisliderjs-init', get_stylesheet_directory_uri(). '/js/multislider/js/multislider-init.js', array( 'multisliderjs' ), '1.0', true );
	wp_enqueue_style( 'multislidercss', get_stylesheet_directory_uri() . '/js/multislider/css/custom.css', '1.6.0', 'all');

	//SCROLL TO TOP BUTTON script
	wp_enqueue_script( 'scrolltop', get_stylesheet_directory_uri() . '/js/scroll-top.js', array( 'jquery' ) );

	// //POPUP MODAL script
	// wp_enqueue_script( 'popup', get_stylesheet_directory_uri() . '/js/popup-modal.js', array( 'jquery' ) );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'avontec_theme_scripts' );

/* ADDS FAVICON TO HEADER */  
function avontec_favicon() {  
	$avontec_dir = get_bloginfo('stylesheet_directory');  
	echo '<link rel="shortcut icon" href="';
	echo $avontec_dir;
	echo '/favicon.ico" type="image/x-icon" />';
	echo '<link rel="icon" href="';
	echo $avontec_dir;
	echo '/favicon.ico" type="image/x-icon" />';
 }  
 add_action('wp_head', 'avontec_favicon', 5);


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

//ACF Options Page Setup
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

/* YoTube subscribe button javascript */
function wpb_hook_javascript() {
  // if (is_page ('about-us')) { 
  //   ?>
        <!-- <script type="text/javascript"> -->
          <script src="https://apis.google.com/js/platform.js"></script>
				<!-- </script> -->
				

				<div id="fb-root"></div>
				<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>


				<!-- <script>
					window.fbAsyncInit = function() {
						FB.init({
							appId            : '433005377509194',
							autoLogAppEvents : true,
							xfbml            : true,
							version          : 'v3.2'
						});
					};
				</script> -->

		<!-- <script async defer src="https://connect.facebook.net/en_US/sdk.js"></script> -->
    <?php
  // }
}
add_action('wp_head', 'wpb_hook_javascript');


function wpb_list_child_pages() { 
 
	global $post; 
	 
	if ( is_page() && $post->post_parent ) 
			$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
	
	else
			$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );
	 
	if ( $childpages ) {

			$string = '<ul>' . $childpages . '</ul>';
	}
	 
	return $string;
	 
	}
	 
	add_shortcode('wpb_childpages', 'wpb_list_child_pages');



