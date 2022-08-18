<?php
function addToCartText( $text ) {
	return '<i class="bx bx-cart-alt"></i>';
}
add_filter( 'woocommerce_product_add_to_cart_text', 'addToCartText' );


add_filter( 'woocommerce_add_to_cart_fragments', 'misha_add_to_cart_fragment' );

function misha_add_to_cart_fragment( $fragments ) {

    global $woocommerce;

    $fragments['.misha-cart'] = '<a href="' . wc_get_cart_url() . '" class="misha-cart">Cart (' . $woocommerce->cart->cart_contents_count . ')</a>';
    return $fragments;

}

/*
 * Mini cart AJAX part
 */

add_filter( 'woocommerce_add_to_cart_fragments', function ( $fragments ) {

	ob_start();
	?>
    <span class="item-count"><?php echo wc()->cart->get_cart_contents_count(); ?></span>
	<?php $fragments['span.item-count'] = ob_get_clean();

	return $fragments;
} );

add_filter( 'woocommerce_add_to_cart_fragments', function ( $fragments ) {

	ob_start();
	?>
    <div class="header-quickcart">
		<?php woocommerce_mini_cart(); ?>
    </div>
	<?php $fragments['div.header-quickcart'] = ob_get_clean();

	return $fragments;
} );

add_filter( 'woocommerce_add_to_cart_fragments', function ( $fragments ) {
	global $woocommerce;

	ob_start();
	?>
    <div class="your-class-name">
		<?php echo sprintf( _n( '%d ITEM IN YOUR CART', '%d ITEMS IN YOUR CART', $woocommerce->cart->cart_contents_count, 'oilbiotic' ),
			$woocommerce->cart->cart_contents_count ); ?> -
		<?php echo wp_kses_post( $woocommerce->cart->get_cart_total() ); ?>
    </div>
	<?php $fragments['div.your-class-name'] = ob_get_clean();

	return $fragments;
} );

function woocommerce_template_loop_product_title() {
	echo wp_kses_post( '<h4 class="product-name">' . get_the_title() . '</h4>' );
}

if ( class_exists( 'Woocommerce' ) ) {
	function add_loginout_link( $items, $args ) {
		if ( is_user_logged_in() && $args->theme_location == 'woo_menu' ) {
			$items .= '<li><a href="' . wp_logout_url( get_permalink( wc_get_page_id( 'myaccount' ) ) ) . '">Log Out</a></li>';
		} elseif ( ! is_user_logged_in() && $args->theme_location == 'woo_menu' ) {
			$items .= '<li><a href="' . get_permalink( wc_get_page_id( 'myaccount' ) ) . '">Log In/Register</a></li>';
		}

		return $items;
	}

	add_filter( 'wp_nav_menu_items', 'add_loginout_link', 10, 2 );
}