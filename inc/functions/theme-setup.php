<?php
/**
 * Theme basic setup.
 *
 * @package oilbiotic
 */


// Set the content width based on the theme's design and stylesheet.
if ( ! isset( $content_width ) ) {
	$content_width = 1350; /* pixels */
}

if ( ! function_exists( 'oilbiotic_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function oilbiotic_setup() {

		load_theme_textdomain( 'oilbiotic' );

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

		// Support HTML5, Script & Style
		add_theme_support( 'html5', [ 'script', 'style' ] );

		/*
		 * Adding Thumbnail basic support
		 */
		add_theme_support( 'post-thumbnails' );

		/*
		 * Adding Custom blog Thumbnail image size
		 */
		//add_image_size( 'oilbiotic-blog-thumb', 475, 350 );

		// Set up the WordPress Theme logo feature.
		$logo_defaults = array(
			'height'      => 60,
			'width'       => 230,
			'flex-height' => true,
			'flex-width'  => true,

		);

		add_theme_support( 'custom-logo', $logo_defaults );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		//Add search form
		add_theme_support( 'html5', array( 'search-form', 'comment-list' ) );

		add_theme_support( "responsive-embeds" );
		
		add_editor_style();


		add_theme_support( 'woocommerce' );
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );
	}
}
add_action( 'after_setup_theme', 'oilbiotic_setup' );

function oilbiotic_menu() {
	$location = array(
		'main_menu' => esc_html__( 'Main Menu', 'oilbiotic' ),
		'top_bar_menu' => esc_html__( 'Top Bar Menu', 'oilbiotic' ),
	);
	register_nav_menus( $location );
}

add_action( 'init', "oilbiotic_menu" );

