<?php
/**
 * AllesvdK-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package AllesvdK-theme
 */

if ( ! function_exists( 'allesvdk_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function allesvdk_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on AllesvdK-theme, use a find and replace
		 * to change 'allesvdk-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'allesvdk-theme', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'allesvdk-theme' ),
			'menu-2' => esc_html__( 'Category', 'allesvdk-theme' ),
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
		add_theme_support( 'custom-background', apply_filters( 'allesvdk_theme_custom_background_args', array(
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
add_action( 'after_setup_theme', 'allesvdk_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function allesvdk_theme_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'allesvdk_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'allesvdk_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function allesvdk_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar 1', 'allesvdk-theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Voeg widgets toe.', 'allesvdk-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s bs-widgets__content">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title bs-heading bs-widgets__heading">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar 2', 'allesvdk-theme' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Voeg widgets toe.', 'allesvdk-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s bs-widgets__content">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title bs-heading bs-widgets__heading">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar 3', 'allesvdk-theme' ),
		'id'            => 'sidebar-3',
		'description'   => esc_html__( 'Voeg widgets toe.', 'allesvdk-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s bs-widgets__content">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title bs-heading bs-widgets__heading">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'allesvdk_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function allesvdk_theme_scripts() {
	wp_enqueue_style( 'allesvdk-theme-style', get_stylesheet_uri() );

	wp_enqueue_style( 'uikit-css', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.3.6/css/uikit.min.css' );
	wp_enqueue_style( 'roboto_mono', 'https://fonts.googleapis.com/css?family=Roboto+Mono:300,400,700&display=swap' );
	wp_enqueue_style( 'custom_css', get_template_directory_uri() . '/css/custom.css' );
	wp_enqueue_script( 'totop_js', get_template_directory_uri() . '/js/totop.js', array(), 1.1, true);
	wp_enqueue_script( 'uikit_js', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.3.6/js/uikit.min.js', array( 'jquery' ), true );
	wp_enqueue_script( 'uikit_icons_js', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.3.6/js/uikit-icons.min.js' );

	wp_enqueue_script( 'allesvdk-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	// wp_enqueue_script( 'allesvdk-theme-hylo', get_template_directory_uri() . '/js/hylo.js', array(), '20200408', true );

	wp_enqueue_script( 'allesvdk-theme-hyphens', get_template_directory_uri() . '/js/hyphenator.js', array(), '20200408', true );

	wp_enqueue_script( 'allesvdk-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'allesvdk_theme_scripts' );

/**
* Customize Read More link
*/
function allesvdk_theme_excerpt_more( $more ) {
	return sprintf( ' (...)<br /><a class="bs-tiles__button" href="%1$s">%2$s</a>',
	 	get_permalink( get_the_ID() ),
		__( 'Lees verder', 'textdomain' )
	);
}
add_filter( 'excerpt_more', 'allesvdk_theme_excerpt_more' );

/**
* Customize Excerpt Length
*/
function allesvdk_theme_custom_excerpt_length( $length ) {
	return 25;
}
add_filter( 'excerpt_length', 'allesvdk_theme_custom_excerpt_length', 999 );


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

add_image_size( 'square', 300, 300, true );
