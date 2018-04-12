<?php
/**
 * Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Surya_Chandra
 */

if ( ! function_exists( 'surya_chandra_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function surya_chandra_setup() {
		/*
		 * Make theme available for translation.
		 */
		load_theme_textdomain( 'surya-chandra-lite' );

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

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus( array(
			'menu-1'      => esc_html__( 'Primary', 'surya-chandra-lite' ),
			'menu-footer' => esc_html__( 'Footer', 'surya-chandra-lite' ),
			'menu-404'    => esc_html__( '404 Quick Links', 'surya-chandra-lite' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Admin editor style.
		$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
		add_editor_style( array( surya_chandra_fonts_url(), 'css/editor-style' . $min . '.css' ) );

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

		// Add support for Custom Header.
		add_theme_support( 'custom-header', apply_filters( 'surya_chandra_custom_header_args', array(
				'default-image' => get_template_directory_uri() . '/images/default-banner.jpg',
				'width'         => 1920,
				'height'        => 500,
				'flex-height'   => true,
				'header-text'   => false,
		) ) );

		// Register default headers.
		register_default_headers( array(
			'default-banner' => array(
				'url'           => '%s/images/default-banner.jpg',
				'thumbnail_url' => '%s/images/default-banner.jpg',
				'description'   => esc_html_x( 'Default Banner', 'header image description', 'surya-chandra-lite' ),
			),

		) );

		// Load Supports.
		require trailingslashit( get_template_directory() ) . 'inc/support.php';
	}

endif;

add_action( 'after_setup_theme', 'surya_chandra_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function surya_chandra_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'surya_chandra_content_width', 640 );
}
add_action( 'after_setup_theme', 'surya_chandra_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function surya_chandra_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'Primary Sidebar', 'surya-chandra-lite' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here to appear in your primary sidebar.', 'surya-chandra-lite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Secondary Sidebar', 'surya-chandra-lite' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here to appear in your secondary sidebar.', 'surya-chandra-lite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	for ( $i = 1; $i <= 4; $i++ ) {
		register_sidebar( array(
			'name'          => sprintf( esc_html__( 'Footer %d', 'surya-chandra-lite' ), $i ),
			'id'            => 'footer-' . $i,
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}
}

add_action( 'widgets_init', 'surya_chandra_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function surya_chandra_scripts() {
	$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/third-party/font-awesome/css/font-awesome' . $min . '.css', '', '4.7.0' );

	$fonts_url = surya_chandra_fonts_url();

	if ( ! empty( $fonts_url ) ) {
		wp_enqueue_style( 'surya-chandra-google-fonts', $fonts_url, array(), null );
	}

	wp_enqueue_style( 'jquery-sidr', get_template_directory_uri() .'/third-party/sidr/css/jquery.sidr.dark' . $min . '.css', '', '2.2.1' );

	wp_enqueue_style( 'surya-chandra-style', get_stylesheet_uri(), array(), '1.0.1' );

	wp_enqueue_script( 'jquery-sidr', get_template_directory_uri() . '/third-party/sidr/js/jquery.sidr' . $min . '.js', array( 'jquery' ), '2.2.1', true );

	wp_enqueue_script( 'surya-chandra-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'surya-chandra-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'surya-chandra-custom', get_template_directory_uri() . '/js/custom' . $min . '.js', array( 'jquery', 'imagesloaded', 'masonry' ), '1.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'surya_chandra_scripts' );

/**
 * Load init.
 */
require_once trailingslashit( get_template_directory() ) . 'inc/init.php';
