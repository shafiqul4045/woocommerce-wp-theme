<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
    return;
}
?>

<?php

$permalink = $product->get_permalink();
?>

<div <?php wc_product_class( 'product-wrapper', $product ); ?>>
    <div class="product-wrapper-item">
        <div class="product-img">
            <?php
            woocommerce_template_loop_product_thumbnail();
            ?>
        </div>
        <div class="product-info">
            <a href="<?php echo esc_url($permalink); ?>"><?php woocommerce_template_loop_product_title(); ?> </a>
            <div class="product-price"><?php woocommerce_template_loop_price(); ?></div>
        </div>
        <div class="product-cart">
            <a href="<?php echo esc_url($permalink); ?>" class="has-before"><i class="bx bx-search-alt"></i></a>
            <?php woocommerce_template_loop_add_to_cart(); ?>
        </div>
        <?php
        if(!empty(woocommerce_show_product_loop_sale_flash())){
            woocommerce_show_product_loop_sale_flash();
        }
        ?>

    </div>

</div>

