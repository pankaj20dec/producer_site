<?php

if ( version_compare( $GLOBALS['wp_version'], '4.4-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'bm_music_setup' ) ) :

function bm_music_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Twenty Sixteen, use a find and replace
	 * to change 'twentysixteen' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'bm_music', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );
	add_image_size( 'custom-size', 220, 180, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'bm_music' ),
		'social'  => __( 'Social Links Menu', 'bm_music' ),
	) );
	show_admin_bar( false );
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

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	) );



	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif; // twentysixteen_setup
add_action( 'after_setup_theme', 'bm_music_setup' );
function arphabet_widgets_init() {

    register_sidebar( array(
        'name' => 'Home right sidebar',
        'id' => 'home_right_1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );

/**
 * Enqueues scripts and styles.
 *
 * @since Twenty Sixteen 1.0
 */
function bm_music_scripts() {
	
	// Theme stylesheet.
	wp_enqueue_style( 'bm_music-style', get_stylesheet_uri() );

	wp_enqueue_style( 'bm_music-bxslider', get_template_directory_uri() . '/css/bxslider.css', array( 'bm_music-style' ), '20160415' );
	wp_enqueue_style( 'bm_music-custom-scrollbar', get_template_directory_uri() . '/css/custom-scrollbar.css', array( 'bm_music-style' ), '20160422' );
	wp_enqueue_style( 'bm_music-font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array( 'bm_music-style' ), '20160420' );
	wp_enqueue_style( 'bm_music-media', get_template_directory_uri() . '/css/media.css', array( 'bm_music-style' ), '20160421' );
	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'bm_music-ie', get_template_directory_uri() . '/css/ie.css', array( 'bm_music-style' ), '20160412' );
	
	wp_style_add_data( 'bm_music-ie', 'conditional', 'lt IE 10' );

	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'bm_music-ie8', get_template_directory_uri() . '/css/ie8.css', array( 'bm_music-style' ), '20160412' );
	wp_style_add_data( 'bm_music-ie8', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style( 'bm_music-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'bm_music-style' ), '20160412' );
	wp_style_add_data( 'bm_music-ie7', 'conditional', 'lt IE 8' );

	// Load the html5 shiv.
	wp_enqueue_script( 'bm_music-html5', get_template_directory_uri() . '/js/html5.js', array(), '3.7.3' );
	wp_script_add_data( 'bm_music-html5', 'conditional', 'lt IE 9' );
	
	wp_enqueue_script( 'bm_music-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20160412', true );
	wp_enqueue_script("jquery");
	wp_enqueue_script( 'bm_music-bxslider', get_template_directory_uri() . '/js/bxslider.js', array(), '20160415', true );
	wp_enqueue_script( 'bm_music-readmore', get_template_directory_uri() . '/js/readmore.js', array(), '20160417', true );
	wp_enqueue_script( 'bm_music-twitter-fetcher', get_template_directory_uri() . '/js/twitter-fetcher.js', array(), '20160418', true );
	wp_enqueue_script( 'bm_music-custom-scrollbar', get_template_directory_uri() . '/js/custom-scrollbar.min.js', array(), '20160419', true );
	wp_enqueue_script( 'bm_music-jquery-scrolltofixed', get_template_directory_uri() . '/js/jquery-scrolltofixed.js', array(), '20160416', true );
	wp_enqueue_script( 'bm_music-custom', get_template_directory_uri() . '/js/custom.js', array(), '20160414', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'bm_music-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20160412' );
	}


	wp_localize_script( 'bm_music_script', 'screenReaderText', array(
		'expand'   => __( 'expand child menu', 'bm_music' ),
		'collapse' => __( 'collapse child menu', 'bm_music' ),
	) );
}
add_action( 'wp_enqueue_scripts', 'bm_music_scripts' );
