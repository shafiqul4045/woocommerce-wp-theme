<?php
/**
 * Single Product Meta
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;

?>
<div class="product_meta">

	<?php do_action( 'woocommerce_product_meta_start' ); ?>

    <ul>
        <li>
            <?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>

                <div class="sku_wrapper"><p><?php esc_html_e( 'SKU', 'oilbiotic' ); ?></p> <span class="sku"><?php echo esc_html(  $sku = $product->get_sku()  ) ? $sku : esc_html__( 'N/A', 'oilbiotic' ); ?></span></div>

            <?php endif; ?>
        </li>
        <li>
            <?php 
                $stockName = '';
                $className = '';
                if ( method_exists( $product, 'get_stock_status' ) ) {
                    if($product->get_stock_status() == 'instock'){
                        $stockName = __( 'In Stock', 'oilbiotic' );
                        $className = 'stock';
                    }elseif ($product->get_stock_status() == 'outofstock'){
                        $stockName = __( 'Out of stock', 'oilbiotic' );
                        $className = 'out-of-stock';
                    }elseif ($product->get_stock_status() == 'onbackorder'){
                        $stockName = __( 'On backorder', 'oilbiotic' );
                        $className = 'stock';
                    }
                    ?>
                        <div class="stockwrapper"><p><?php esc_html_e( 'Stock', 'oilbiotic' ); ?></p> <span class="<?php echo esc_html( $className );?>"><?php echo esc_html($stockName); ?></span></div>
                    <?php 
                } 
            ?>
            
        </li>
        <li>
            <?php echo wc_get_product_category_list( $product->get_id(), ', ', '<div class="posted_in">' . _n( '<p>Category</p>', 'Categories:', count( $product->get_category_ids() ), 'oilbiotic' ) . ' ', '</span>' ); ?>
        </li>
        <li>
            <?php echo wc_get_product_tag_list( $product->get_id(), ', ', '<div class="tagged_as">' . _n( '<p>Tag</p>', 'Tags:', count( $product->get_tag_ids() ), 'oilbiotic' ) . ' ', '</span>' ); ?>
        </li>
    </ul>






	<?php do_action( 'woocommerce_product_meta_end' ); ?>

</div>
