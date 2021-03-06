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

    // wp_nav_menu( array(
    //     'theme_location' => 'primary',
    //     'menu_class'     => 'primary-menu',
    // ) );

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



// add_filter( 'mc4wp_use_sslverify', '__return_false' );



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

	// Google Fonts
	wp_enqueue_style('avontec-googlefonts', 'https://fonts.googleapis.com/css?family=Lato:400,700&display=swap'); 
	wp_enqueue_style('avontec-googlefonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap'); 
	wp_enqueue_style('avontec-googlefonts', 'https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap'); 


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
     ?>
        <!-- <script type="text/javascript"> -->
          <script src="https://apis.google.com/js/platform.js"></script>
				<!-- </script> -->
				

				<div id="fb-root"></div>
				<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>

				<script>
					window.fbAsyncInit = function() {
						FB.init({
							appId            : '433005377509194',
							autoLogAppEvents : true,
							xfbml            : true,
							version          : 'v3.2'
						});
					};
				</script>

		<!-- <script async defer src="https://connect.facebook.net/en_US/sdk.js"></script> -->
    <?php
}
add_action('wp_head', 'wpb_hook_javascript');

/* Display Ancestor (Main Menu Item name) */
function my_menu_parent($theme_location) {
	$locations = get_nav_menu_locations();
	if ( isset( $locations[ $theme_location ] ) ) {
			$menu = wp_get_nav_menu_object( $locations[ $theme_location ] );
			$menu_items = wp_get_nav_menu_items($menu->term_id);
			_wp_menu_item_classes_by_context( $menu_items );
			$breadcrumbs = array();

			foreach ( $menu_items as $menu_item ) {         
					if ($menu_item->current_item_ancestor) {
							$breadcrumbs[] = $menu_item->title;
					}
			}

			return $breadcrumbs;
	 }
}
add_shortcode('my_parent', 'my_menu_parent');


/* Display Child Pages list of a Parent Page in Sub Menu of Child pages */
function wpb_list_child_pages() { 
 
	global $post; 
		if ( is_page() && $post->post_parent ) {
				$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
		}
		else {
				$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );
		} 
		if ( $childpages ) {

				$string = '<ul>' . $childpages . '</ul>';
 
		}

		return $string;
		}	
  
add_shortcode('wpb_childpages', 'wpb_list_child_pages');

/* Display CUstom Post Type Single Post Title */
// function eyesore_list_child_pages() { 
//     ob_start(); 
//     global $post;
// 	//check if this is a parent or child post
// 	if (is_single() && is_post_type('project')){
// 			$args = array(
// 				'post_parent' => $post->ID,
// 				'post_type' => 'project',
// 				'order' => 'asc' 
// 			);
// 			$children = get_children($args); 

// 			//if this is a parent post
// 			if(!empty($children)) {
// 				//has children
// 				$postsarr = array(
// 					'post_parent' => $post->ID,
// 					'post_type' => 'project',
// 					'order' => 'asc' 
// 					); 
// 				$childQuery = new WP_Query($postsarr);
// 				if ( $childQuery->have_posts()) : while ( $childQuery->have_posts()) : $childQuery->the_post();
// 					the_title();
// 				endwhile; endif; 
				
// 			} else {
// 				//if this is a child post
// 				$parent = wp_get_post_parent_id($post->ID); 
// 				$siblingsarr = array(
// 					'post_parent' => $parent,
// 					'post_type' => 'project',
// 					'order' => 'asc' 
// 				); 
// 				$siblings = new WP_Query($siblingsarr); 
// 				if ( $siblings->have_posts()) : while ( $siblings->have_posts()) : $siblings->the_post();
// 					the_title();
// 				endwhile; endif; 
// 			}
// 	}
// 	elseif (is_single() && is_post_type('news')){
// 		$args = array(
// 			'post_parent' => $post->ID,
// 			'post_type' => 'news',
// 			'order' => 'asc'  
// 		);
// 		$children = get_children($args); 

// 		//if this is a parent post
// 		if(!empty($children)) {
// 			//has children
// 			$postsarr = array(
// 				'post_parent' => $post->ID,
// 				'post_type' => 'news',
// 				'order' => 'asc' 
// 				); 
// 			$childQuery = new WP_Query($postsarr);
// 			if ( $childQuery->have_posts()) : while ( $childQuery->have_posts()) : $childQuery->the_post();
// 				the_title();
// 			endwhile; endif; 
			
// 		} else {
// 			//if this is a child post
// 			$parent = wp_get_post_parent_id($post->ID); 
// 			$siblingsarr = array(
// 				'post_parent' => $parent,
// 				'post_type' => 'news',
// 				'order' => 'asc' 
// 				); 
// 			$siblings = new WP_Query($siblingsarr); 
// 			if ( $siblings->have_posts()) : while ( $siblings->have_posts()) : $siblings->the_post();
// 				the_title();
// 			endwhile; endif; 
// 		}
// 	}
//    return ob_get_clean();
// }
// add_shortcode('eyesore_childpages', 'eyesore_list_child_pages');
	
	function is_post_type($type){
		global $wp_query;
		if($type == get_post_type($wp_query->post->ID)) return true;
		return false;
	}

	