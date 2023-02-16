<?php
/**
 * rescored functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package rescored
 */

if ( ! defined( '_RS_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_RS_VERSION', '0.1.0' );
}

if ( ! function_exists( '_rs_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function _rs_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on rescored, use a find and replace
		 * to change 'rescored' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( '_rs', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', '_rs' ),
				'menu-2' => __( 'Footer Menu', '_rs' ),
			)
		);

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

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'editor-style.css' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add theme support for block templates.
		add_theme_support( 'block-templates' );

		// Add theme support for block template parts.
		add_theme_support( 'block-template-parts' );

		// Add theme support for block styles.
		add_theme_support( 'wp-block-styles' );

	}
endif;
add_action( 'after_setup_theme', '_rs_setup' );

/**
 * Set the default image if none exists.
 *
 * @param string $html              The post thumbnail HTML.
 * @param int    $post_id           The post ID.
 * @return $html
 */
function rs_add_fallback_ft_image( $html, $post_id ) {
	if ( empty( $html ) ) {

		$image_placeholder_url    = get_stylesheet_directory_uri() . '/assets/images/placeholder-h-dark.jpeg';
		$image_placeholder_width  = '580';
		$image_placeholder_height = '300';

		if ( is_single() || is_page() ) {
			$image_placeholder_width  = '1600';
			$image_placeholder_height = '500';
			$image_placeholder_url    = get_stylesheet_directory_uri() . '/assets/images/placeholder-banner.png';
		}
		if ( is_shop() || is_product() || is_cart() || is_checkout() || is_account_page() ) {
			$html = '';
		} else {
			$html = '<img src="' . esc_url( $image_placeholder_url ) . '" width="' . (int) $image_placeholder_width . '" height="' . (int) $image_placeholder_height . '" loading="lazy" alt="' . get_the_title( $post_id ) . '" />';
		}
	}
	return $html;
}
add_filter( 'post_thumbnail_html', 'rs_add_fallback_ft_image', 5, 2 );


// Adding customizer to block theme.
add_action( 'customize_register', '__return_true' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function _rs_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Footer', '_rs' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', '_rs' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', '_rs_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function _rs_scripts() {
	wp_enqueue_style( '_rs-style', get_stylesheet_uri(), array(), _RS_VERSION );
	wp_enqueue_script( '_rs-script', get_template_directory_uri() . '/js/script.min.js', array(), _RS_VERSION, true );
	wp_enqueue_script( '_rs-navigation-script', get_template_directory_uri() . '/js/navigation.js', array(), rand(), true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', '_rs_scripts' );

/**
 * Enqueue css block style overrides in editor.
 */
function _rs_admin_scripts() {
	if ( isset( $_GET['post'] ) || isset( $_GET['postId'] ) ) {
		wp_enqueue_style( '_rs-block-editor-style', get_stylesheet_uri(), array(), _RS_VERSION );
	}
}
add_action( 'enqueue_block_editor_assets', '_rs_admin_scripts' );


/**
 * Add the block editor class to TinyMCE.
 *
 * This allows TinyMCE to use Tailwind Typography styles.
 *
 * @param array $settings TinyMCE settings.
 * @return array
 */
function _rs_tinymce_add_class( $settings ) {
	$settings['body_class'] = 'block-editor-block-list__layout';
	return $settings;
}
add_filter( 'tiny_mce_before_init', '_rs_tinymce_add_class' );

/**
 * Adds the main tailwind text class to the body classes.
 *
 *
 * @param array $classes
 * @return array
 */
function _rs_body_classes( $classes ) {
	$classes[] = 'prose';
	return $classes;
}
add_filter( 'body_class', '_rs_body_classes' );


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Functions which enhance the customizer.
 */
require get_template_directory() . '/inc/customizer.php';


/**
 * Functions which add additional Woocommerce support.
 */
// require get_template_directory() . '/inc/woocommerce.php';
