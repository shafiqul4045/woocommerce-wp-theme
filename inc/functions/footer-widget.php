<?php
function oilbiotic_footer_widgets() {
	register_sidebar( array(
		'name'          => __( 'FOOTER-1', 'oilbiotic' ),
		'id'            => 'footer-1',
		'description'   => __( 'FOOTER-1', 'oilbiotic' ),
		'before_widget' => '<div class="footer-1">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'FOOTER-2', 'oilbiotic' ),
		'id'            => 'footer-2',
		'description'   => __( 'FOOTER-2', 'oilbiotic' ),
		'before_widget' => '<div class="footer-2">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-title" >',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'FOOTER-3', 'oilbiotic' ),
		'id'            => 'footer-3',
		'description'   => __( 'FOOTER-3', 'oilbiotic' ),
		'before_widget' => '<div class="footer-2">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'FOOTER-4', 'oilbiotic' ),
		'id'            => 'footer-4',
		'description'   => __( 'FOOTER-4', 'oilbiotic' ),
		'before_widget' => '<div  class="footer-2">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-title">',
		'after_title'   => '</h4>',
	) );
}

add_action( 'widgets_init', 'oilbiotic_footer_widgets' );