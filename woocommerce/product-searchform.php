<?php
/**
 * The template for displaying product search form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/product-searchform.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

<div class="col-sm-5 order-xs-2 col-md-6 col-lg-6">
    <form class="searchbox" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
        <input type="search" placeholder="Search Products ...." name="s" class="searchbox-input" value="<?php echo get_search_query(); ?>">
        <button class="searchbox-submit" type="submit"><i class="bx bx-search-alt"></i></button>
        <input type="hidden" value="product" name="post_type" id="post_type"/>
    </form>
</div>
