<?php
/**
 * brembarron functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package brembarron
 */

if ( ! function_exists( 'brembarron_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function brembarron_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on brembarron, use a find and replace
		 * to change 'brembarron' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'brembarron', get_template_directory() . '/languages' );

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
		add_theme_support( 'post-formats', ['video','audio','gallery','quote'] );
		add_theme_support( 'menus' );
		add_theme_support( 'widgets' );
		add_theme_support( 'custom-header' );
		add_theme_support( 'custom-background' );
		add_theme_support( 'woocommerce' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( [
			'primary-menu' 	=>  'Primary Menu'
		] );
		
		
		
		

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

		

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		 
				 /* ACF OPTIONS PAGE */
		if(function_exists('acf_add_options_page')) {
			$option_page = acf_add_options_page(
				array(
					'page_title'  => 'Theme Settings',
					'menu_title'  => 'Theme Settings',
					'menu_slug'   => 'theme-settings',
					'capability'  => 'edit_posts',
					'redirect'    => true,
					'position' => 61,
					'icon_url'    => 'dashicons-layout'
				)
			);
		}
		
		
		
		/* Register Post Type with category */
		
		$labels = array(
				'name'               => __( 'News', 'brembarron' ),
				'singular_name'      => __( 'News', 'brembarron' ),
				'menu_name'          => __( 'News', 'brembarron' ),
				'name_admin_bar'     => __( 'News', 'brembarron' ),
				'add_new'            => __( 'Add News', 'brembarron' ),
				'add_new_item'       => __( 'Add New News', 'brembarron' ),
				'new_item'           => __( 'New News', 'brembarron' ),
				'edit_item'          => __( 'Edit News', 'brembarron' ),
				'view_item'          => __( 'View News', 'brembarron' ),
				'all_items'          => __( 'All News', 'brembarron' ),
				'search_items'       => __( 'Search News', 'brembarron' ),
				'parent_item_colon'  => __( 'Parent News:', 'brembarron' ),
				'not_found'          => __( 'No News found.', 'brembarron' ),
				'not_found_in_trash' => __( 'No News found in Trash.', 'brembarron' )
			);

			$args = array(
				'labels'             => $labels,
				'description'        => __( 'Description.', 'brembarron' ),
				'public'             => true,
				'publicly_queryable' => true,
				'show_ui'            => true,
				'show_in_menu'       => true,
				'query_var'          => true,
				'rewrite'            => array( 'slug' => 'News' ),
				'capability_type'    => 'post',
				'has_archive'        => true,
				'hierarchical'       => false,
				'menu_position'      => null,
				'menu_icon'      	 => 'dashicons-smiley',
				'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
			);

			register_post_type( 'news', $args );
			
			
			
			/* Register New Taxonomy*/ 
			
			$labels = array(
				'name'              => _x( 'News Category', 'brembarron' ),
				'singular_name'     => _x( 'News Category', 'brembarron' ),
				'search_items'      => __( 'Search Category', 'brembarron' ),
				'all_items'         => __( 'All Categories', 'brembarron' ),
				'parent_item'       => __( 'Parent Category', 'brembarron' ),
				'parent_item_colon' => __( 'Parent Category:', 'brembarron' ),
				'edit_item'         => __( 'Edit Category', 'brembarron' ),
				'update_item'       => __( 'Update Category', 'brembarron' ),
				'add_new_item'      => __( 'Add New Category', 'brembarron' ),
				'new_item_name'     => __( 'New Category Name', 'brembarron' ),
				'menu_name'         => __( 'Category', 'brembarron' ),
			);

			$args = array(
				'hierarchical'      => true,
				'labels'            => $labels,
				'show_ui'           => true,
				'show_admin_column' => true,
				'query_var'         => true,
				'rewrite'           => array( 'slug' => 'news-category' ),
			);

			register_taxonomy( 'newscategory', array( 'news' ), $args );

		 
	
	}
endif;
add_action( 'after_setup_theme', 'brembarron_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function brembarron_widgets_init() {
	
	
	register_sidebar( array(
		'name'          => esc_html__( 'Top Bar', 'brembarron' ),
		'id'            => 'top-bar',
		'description'   => esc_html__( 'Add Top Bar here.', 'brembarron' ),
		'before_widget' => ' ',
		'after_widget'  => ' ',
		'before_title'  => ' ',
		'after_title'   => ' ',
	) );
	
	
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'brembarron' ),
		'id'            => 'blog-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'brembarron' ),
		'before_widget' => '<div id="recent-posts-2" class="et_pb_widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widgettitle">',
		'after_title'   => '</h4>',
	) );
	
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget', 'brembarron' ),
		'id'            => 'footer-widget',
		'description'   => esc_html__( 'Add Footer Widget here.', 'brembarron' ),
		'before_widget' => '<div class="et_pb_column et_pb_column_1_4    et_pb_css_mix_blend_mode_passthrough">
                                    <div class="et_pb_module et_pb_cta_13 footer_menu et_pb_promo et_pb_bg_layout_dark  et_pb_text_align_left et_pb_no_bg">
                                       <div class="et_pb_promo_description">',
		'after_widget'  => '</div></div></div>',
		'before_title'  => '<h2 class="et_pb_module_header">',
		'after_title'   => '</h2>',
	) );
	
	
}
add_action( 'widgets_init', 'brembarron_widgets_init' );


/* customize login screen */
function mbthirty_custom_login_page() {
    echo '<style type="text/css">
        h1 a { background-image:url("'. get_stylesheet_directory_uri().'/images/logo.png") !important; height: 90px !important; width: 100px !important; margin: 0 auto !important; }
		h1 a:focus { outline: 0 !important; box-shadow: none; }
        body.login { background-image:url("'. get_stylesheet_directory_uri().'/images/banner.png") !important; background-repeat: no-repeat !important; background-attachment: fixed !important; background-position: center !important; background-size: cover !important; position: relative; z-index: 999;}
  		body.login:before { background-color: rgba(0,0,0,0.7); position: absolute; width: 100%; height: 100%; left: 0; top: 0; content: ""; z-index: -1; }
  		.login form {
  			background: rgba(255,255,255, 0.2) !important;
  		}
		.login form .input, .login form input[type=checkbox], .login input[type=text] {
			background: transparent !important;
			color: #ddd;
		}
		.login label {
			color: #DDD !important;
		}
		.login #login_error, .login .message {
			color: #ddd;
			margin-top: 20px;
			background: rgba(255,255,255, 0.2) !important;
		}
    </style>';
}
add_action('login_head', 'mbthirty_custom_login_page');
function mbthirty_login_logo_url_title() {
 	return 'Mostafiz Shabbir';
}
add_filter( 'login_headertitle', 'mbthirty_login_logo_url_title' );
function mbthirty_login_logo_url() {
	return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'mbthirty_login_logo_url' );
		 
		 
/* customize login screen */
		 
/**
 * Enqueue scripts and styles.
 */
function brembarron_scripts() {
	
	 
      
	  
	wp_enqueue_style( 'brembarron-css-transitions', get_template_directory_uri().'/css/mozart-transitions.css' );
	wp_enqueue_style( 'brembarron-css-about', get_template_directory_uri().'/css/mozart-about.css' );
	wp_enqueue_style( 'brembarron-css-autor', get_template_directory_uri().'/css/mozart-autor-page.css' );
	wp_enqueue_style( 'brembarron-css-accountant', get_template_directory_uri().'/css/mozart-accountant.css' );
	wp_enqueue_style( 'brembarron-css-blog', get_template_directory_uri().'/css/mozart-blog.css' );
	wp_enqueue_style( 'brembarron-css-category', get_template_directory_uri().'/css/mozart-category-page.css' );
	wp_enqueue_style( 'brembarron-css-coach', get_template_directory_uri().'/css/mozart-coach.css' );
	wp_enqueue_style( 'brembarron-css-conference', get_template_directory_uri().'/css/mozart-conference.css' );
	wp_enqueue_style( 'brembarron-css-consulting', get_template_directory_uri().'/css/mozart-consulting.css' );
	wp_enqueue_style( 'brembarron-css-contact', get_template_directory_uri().'/css/mozart-contact.css' );
	wp_enqueue_style( 'brembarron-css-corporation', get_template_directory_uri().'/css/mozart-corporation.css' );
	wp_enqueue_style( 'brembarron-css-business', get_template_directory_uri().'/css/mozart-digital-business.css' );
	wp_enqueue_style( 'brembarron-css-fancybox', get_template_directory_uri().'/css/mozart-fancybox.css' );
	wp_enqueue_style( 'brembarron-css-fancybox', get_template_directory_uri().'/css/mozart-fancybox.css' );
	wp_enqueue_style( 'brembarron-css-footer', get_template_directory_uri().'/css/mozart-footer.css' );
	wp_enqueue_style( 'brembarron-css-header', get_template_directory_uri().'/css/mozart-header.css' );
	wp_enqueue_style( 'brembarron-css-inside', get_template_directory_uri().'/css/mozart-inside.css' );
	wp_enqueue_style( 'brembarron-css-investment', get_template_directory_uri().'/css/mozart-investment.css' );
	wp_enqueue_style( 'brembarron-css-law', get_template_directory_uri().'/css/mozart-law.css' );
	wp_enqueue_style( 'brembarron-css-search', get_template_directory_uri().'/css/mozart-search.css' );
	wp_enqueue_style( 'brembarron-css-single', get_template_directory_uri().'/css/mozart-single-post.css' );
	wp_enqueue_style( 'brembarron-css-start', get_template_directory_uri().'/css/mozart-start-up.css' );
	wp_enqueue_style( 'brembarron-css-team', get_template_directory_uri().'/css/mozart-team.css' );
	
	
	
	wp_enqueue_style( 'brembarron-css-style', get_template_directory_uri().'/css/style.css' );
	wp_enqueue_style( 'brembarron-css-cache', get_template_directory_uri().'/css/cache-style.css' );
	wp_enqueue_style( 'brembarron-css-all', get_template_directory_uri().'/css/all.min.css' );
	wp_enqueue_style( 'brembarron-style', get_stylesheet_uri() );
	
	  
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'davide-custom-min', get_template_directory_uri() . '/js/custom.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'davide-custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '', true );


}
add_action( 'wp_enqueue_scripts', 'brembarron_scripts' );


/**
 * Redux include
 */
require get_template_directory() . '/inc/opt/ReduxCore/framework.php';
require get_template_directory() . '/inc/opt/sample/config.php';


/**
 * CMB2  include
 */
require get_template_directory() . '/inc/cmb/init.php';
require get_template_directory() . '/inc/cmb/config.php';


/**
 * CMB2  include
 */
require get_template_directory() . '/inc/tgm/example.php';





