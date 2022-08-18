<?php
if ( class_exists( 'woocommerce' ) ) {
    ?>
    <div class="header-cart-btn">
        <i class="bx bx-cart-alt"></i>
        <span class="mini-cart-product-quantity"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
    </div>
    <div class="cart-sidebar">

        <?php woocommerce_mini_cart(); ?>
    </div>
    <?php
}
?>

