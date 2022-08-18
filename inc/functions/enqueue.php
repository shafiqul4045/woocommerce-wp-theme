<?php
/**
 * Oil Biotic enqueue scripts
 *
 * @package oilbiotic
 */


if ( ! function_exists( 'oil_biotic_scripts' ) ) {

	function oil_biotic_scripts() {
		// Get the theme data.
		$the_theme = wp_get_theme();

		//Fonts
		wp_enqueue_style( 'font-arizonia', '//fonts.googleapis.com/css2?family=Arizonia&display=swap', array(), $the_theme->get( 'Version' ), 'all' );
		wp_enqueue_style( 'font-rubik', '//fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap', array(), $the_theme->get( 'Version' ), 'all' );
		wp_enqueue_style( 'font-poppins', '//fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap', array(), $the_theme->get( 'Version' ), 'all' );

		// Styles
		wp_enqueue_style( 'boxicons', get_template_directory_uri() . '/assets/css/boxicons.min.css', array(), $the_theme->get( 'Version' ), 'all' );
		wp_enqueue_style( 'fontawesome-all.min', get_template_directory_uri() . '/assets/css/fontawesome-all.min.css', array(), $the_theme->get( 'Version' ), 'all' );
		wp_enqueue_style( 'owl_carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), $the_theme->get( 'Version' ), 'all' );
		wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), $the_theme->get( 'Version' ), 'all' );
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), $the_theme->get( 'Version' ), 'all' );
		wp_enqueue_style( 'oilbiotic-woocommerce', get_template_directory_uri() . '/assets/css/custom-woocommerce.css', array(), $the_theme->get( 'Version' ), 'all' );
		wp_enqueue_style( 'oilbiotic-stylesheet', get_stylesheet_uri() );
		wp_enqueue_style( 'oilbiotic-main', get_template_directory_uri() . '/assets/css/main.css', array(), $the_theme->get( 'Version' ), 'all' );
		wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), $the_theme->get( 'Version' ), 'all' );


		// Scripts
		wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), true );
		wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), $the_theme->get( 'Version' ), true );
		wp_enqueue_script( 'owl_carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array( 'jquery' ), $the_theme->get( 'Version' ), true );
		wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array( 'jquery' ), $the_theme->get( 'Version' ), true );
		wp_enqueue_script( 'oilbiotic-main', get_template_directory_uri() . '/assets/js/script.js', array(), $the_theme->get( 'Version' ), true );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'biotic_scripts' ).

add_action( 'wp_enqueue_scripts', 'oil_biotic_scripts' );
