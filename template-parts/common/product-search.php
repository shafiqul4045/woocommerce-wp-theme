<?php
if ( class_exists( 'woocommerce' ) ) {
	?>
    <form role="search" method="get" class="woocommerce-product-search input-group" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
        <input type="search" class="form-control" placeholder="<?php echo esc_attr_x( 'Search Products&hellip;', 'placeholder', 'oilbiotic' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'oilbiotic' ); ?>" />
        <input type="hidden" name="post_type" value="product" />
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit"><span class="flaticon-loupe"></span></button>
        </div>
    </form>
    <?php
}

?>
