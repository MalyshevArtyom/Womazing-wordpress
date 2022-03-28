<?php
/**
 * womazing functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package womazing
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function womazing_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on womazing, use a find and replace
		* to change 'womazing' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'womazing', get_template_directory() . '/languages' );

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
        'primary' => __( 'Primary Menu', 'womazing' ), 
        'footer_menu' => 'Меню в футере', 
    ));

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'womazing_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'womazing_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function womazing_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'womazing_content_width', 640 );
}
add_action( 'after_setup_theme', 'womazing_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function womazing_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'womazing' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'womazing' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'womazing_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function womazing_scripts() {
	// css
	wp_enqueue_style( 'bootstrap-grid.min', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css');
	wp_enqueue_style( 'bootstrap-reboot.min', get_template_directory_uri() . '/assets/css/bootstrap-reboot.min.css');
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css');
	// js
	wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bootstrap.min.js', get_template_directory_uri() . '/assets/js/bootstrap.min.js.map', array(), _S_VERSION, true );
	wp_enqueue_script( 'jquery-3.6.0.min', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'slick.min', get_template_directory_uri() . '/assets/js/slick.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true );

	
	
	// wp_enqueue_style( 'womazing-style', get_stylesheet_uri(), array(), _S_VERSION );
	// wp_style_add_data( 'womazing-style', 'rtl', 'replace' );

	// wp_enqueue_script( 'womazing-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'womazing_scripts' );

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


 
/*
 * Redux config
 */
require get_template_directory() . '/inc/redux-config.php';
// // Отключаем любые CSS стили плагинов
// function custom_dequeue() {
//     wp_dequeue_style('womazingredux-dynamic');

//     wp_deregister_style('womazingredux-dynamic');

// }
// add_action( 'wp_enqueue_scripts', 'custom_dequeue', 9999 );
// add_action( 'wp_head', 'custom_dequeue', 9999 );

// function all_dequeue_styles() {
//     wp_enqueue_style( 'true_style', get_stylesheet_directory_uri() . '/assets/css/all_dequeue_styles.css' );
// }
 
// add_action( 'wp_enqueue_scripts', 'all_dequeue_styles' );