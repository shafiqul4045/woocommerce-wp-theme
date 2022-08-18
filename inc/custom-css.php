<?php
function obCustomStyling() {
    $custom_style    = '';

    $topbarbgcolor = get_theme_mod('top_bar_color', '#699432');

    $custom_style .= '.header-top{background: '.$topbarbgcolor.' !important}';


    $primarycolor = get_theme_mod('primary_color_setting', '#699432').' !important';
    $secondarycolor = get_theme_mod('secondary_color_setting', '#353535').' !important';

    $footerbgcolor = get_theme_mod('footer_background_color_setting', '#dfeee1').' !important';
    $footercolor = get_theme_mod('footer_text_color_setting', '#5a5a5a').' !important';

    $breadcrumbs_bg_img  =  get_theme_mod( 'breadcrumbs_bg_img' );
    if(!empty($breadcrumbs_bg_img)){
        $custom_style = '.breadcrumbs-area{
            background: -webkit-gradient(linear, left top, left bottom, color-stop(100%, rgba(39, 39, 43, 0.8)), to(rgba(39, 39, 43, 0.8))), url('.esc_url( $breadcrumbs_bg_img ).') !important;
            background: linear-gradient(rgba(39, 39, 43, 0.8) 100%, rgba(39, 39, 43, 0.8) 100%), url('.esc_url( $breadcrumbs_bg_img ).') !important;
        }';
    }


    $custom_style .= '.header-wrapper .main-wrapper .main-menu ul li.current-menu-item > a{color: '.$primarycolor.'}';
    $custom_style .= '.header-wrapper .main-wrapper .main-menu ul li a:hover{color: '.$primarycolor.'}';
    $custom_style .= '.header-wrapper .main-header .menu-btn-sm i{color: '.$primarycolor.'}';
    $custom_style .= '.mobile-menu .mobile-menu-area .menu-close-icon{background: '.$primarycolor.'}';
    $custom_style .= '.header-wrapper .main-wrapper .main-menu ul li ul.sub-menu{border-color: '.$primarycolor.'}';
    $custom_style .= '.header-wrapper .main-wrapper .main-menu ul li ul.sub-menu li a:hover{background: '.$primarycolor.'; color:#fff !important}';
    $custom_style .= '.header-wrapper .main-header .header-search .input-group{border: 1px solid '.$primarycolor.'}';
    $custom_style .= '.header-wrapper .main-header .header-search .header-cart-btn i::before{color:'.$primarycolor.'}';
    $custom_style .= '.header-wrapper .main-header .header-search .input-group .input-group-append button span::before{color:'.$primarycolor.'}';
    $custom_style .= '.header-wrapper .main-header .header-search .header-cart-btn .mini-cart-product-quantity{background:'.$primarycolor.'; border: 1px solid '.$primarycolor.'}';
    $custom_style .= '.single-banner .offer-content .banner-btn a{background:'.$primarycolor.'; }';
    $custom_style .= '.product-wrapper-item .ribbon{background:'.$primarycolor.'; }';
    $custom_style .= '.product-wrapper-item .product-cart a{background:'.$primarycolor.'; }';
    $custom_style .= 'span.woocommerce-Price-amount.amount{color:'.$primarycolor.'; }';
    $custom_style .= '.review-area .review-slider.owl-carousel .owl-nav button:hover{background:'.$primarycolor.'; }';
    $custom_style .= '.product-area .product-slider.owl-carousel .owl-nav button{color:'.$primarycolor.'; border-color:'.$primarycolor.' }';
    $custom_style .= '.blog-area .blog-warpper .blog-info h5 a:hover{color:'.$primarycolor.';}';
    $custom_style .= '.button-primary{background:'.$primarycolor.';}';
    $custom_style .= '.elementor-widget-container .membership-area .membership-content h3{color:'.$primarycolor.';}';
    $custom_style .= '.footer-area h4.footer-title{color:'.$primarycolor.';}';
    $custom_style .= '.footer-area .footer-info .footer-social h5{color:'.$primarycolor.';}';
    $custom_style .= '.footer-area .copyright-area p a{color:'.$primarycolor.';}';
    $custom_style .= '.footer-area ul li a:hover{color:'.$primarycolor.';}';
    $custom_style .= '.footer-area .footer-contact h5{color:'.$primarycolor.';}';
    $custom_style .= '.footer-area .footer-contact .contact-box .contact-address a:hover{color:'.$primarycolor.';}';
    $custom_style .= '.footer-area .footer-contact .contact-box:hover i{color:'.$primarycolor.';}';
    $custom_style .= '.service-area .service-content{background:'.$primarycolor.';}';
    $custom_style .= '.breadcrumbs-area .breadcrumbs-wrapper .page-links span a span:hover{color:'.$primarycolor.';}';
    $custom_style .= 'nav.woocommerce-MyAccount-navigation ul li a{background:'.$primarycolor.';}';
    $custom_style .= 'nav.woocommerce-MyAccount-navigation ul li.is-active a{background:'.$secondarycolor.';}';
    $custom_style .= 'nav.woocommerce-MyAccount-navigation ul li a:hover{background:'.$secondarycolor.';}';
    $custom_style .= '.woocommerce-MyAccount-content a{color:'.$primarycolor.';}';
    $custom_style .= '.woocommerce-info{border-top-color:'.$primarycolor.';}';
    $custom_style .= '.woocommerce-info::before{border-top-color:'.$primarycolor.';color:'.$primarycolor.';}';
    $custom_style .= '.woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit{background-color:'.$primarycolor.'; color:#fff !important}';
    $custom_style .= '.quantity .quantity-field-wc{border-color:'.$primarycolor.';}';
    $custom_style .= '.quantity .quantity-field-wc span.minus{border-color:'.$primarycolor.';}';
    $custom_style .= '.quantity .quantity-field-wc span.plus{border-color:'.$primarycolor.';}';
    $custom_style .= '.cart-sidebar .cart-small-item .cart-close{background:'.$primarycolor.';}';
    $custom_style .= '.cart-sidebar .cart-small-item ul li .cart-small-product-info a h5{color:'.$primarycolor.';}';
    $custom_style .= '.cart-sidebar .cart-small-item ul li .cart-small-product-info a h5{color:'.$primarycolor.';}';
    $custom_style .= '.cart-sidebar .cart-small-item ul li .cart-small-delete a i{color:'.$primarycolor.';}';
    $custom_style .= '.cart-sidebar .cart-sidebe-checkout-btn a{background:'.$primarycolor.';border-color:'.$primarycolor.';}';
    $custom_style .= '.cart-sidebar .cart-sideber-cartpage-btn a{border-color:'.$primarycolor.';color: '.$primarycolor.';}';
    $custom_style .= '.cart-sidebar .cart-sidebe-checkout-btn a:hover{background:#fff !important;color: '.$primarycolor.';}';
    $custom_style .= '.cart-sidebar .cart-sideber-cartpage-btn a:hover{color:#fff !important;background: '.$primarycolor.';}';
    $custom_style .= '.product-details-wrapper .shop-details .product-price p{color:'.$primarycolor.';}';
    $custom_style .= '.product_meta ul li a{color:'.$primarycolor.';}';
    $custom_style .= '.woocommerce div.product .stock{color:'.$primarycolor.';}';
    $custom_style .= '.woocommerce div.product .woocommerce-tabs ul.tabs li.active a{color:'.$primarycolor.';}';
    $custom_style .= '.woocommerce div.product p.price, .woocommerce div.product span.price{color:'.$primarycolor.';}';
    $custom_style .= '.woocommerce div.product form.cart .reset_variations{background:'.$primarycolor.';}';
    $custom_style .= '.woo-variation-swatches .variable-items-wrapper .variable-item:not(.radio-variable-item).selected, .woo-variation-swatches .variable-items-wrapper .variable-item:not(.radio-variable-item).selected:hover{box-shadow: 0 0 0 2px '.$primarycolor.';}';
    $custom_style .= '.woo-variation-swatches .variable-items-wrapper .variable-item:not(.radio-variable-item):hover{box-shadow: 0 0 0 2px '.$primarycolor.';}';
    $custom_style .= '.product-details-wrapper .shop-details .product-price p span{color:'.$primarycolor.';}';
    $custom_style .= '.woocommerce div.product .woocommerce-tabs ul.tabs li.active a{color:'.$primarycolor.';}';
    $custom_style .= 'input[type=text], input[type=number], input[type=tel], input[type=email], input[type=phone], input[type=password], select, textarea{border-color:'.$primarycolor.'}';
    $custom_style .= '.footer-area .footer-contact .contact-box:hover .contact-address p{color:'.$primarycolor.';}';
    $custom_style .= '.contact-wrapper-form input.wpcf7-form-control.wpcf7-submit{background:'.$primarycolor.';}';
    $custom_style .= '.sidebar-widget-area .wp-block-search .wp-block-search__button{background:'.$primarycolor.';}';
    $custom_style .= '.sidebar-widget-area .wp-block-search .wp-block-search__input{border-color:'.$primarycolor.';}';
    $custom_style .= '.blog-sidebar .leatest-post ul li .post-info .post-date a{color:'.$primarycolor.';}';
    $custom_style .= '.blog-sidebar .leatest-post ul li .post-info p a:hover{color:'.$primarycolor.';}';
    $custom_style .= '.sidebar-widget-area ul li:hover{color:'.$primarycolor.';}';
    $custom_style .= '.sidebar-widget-area ul li:hover a{color:'.$primarycolor.';}';
    $custom_style .= '.pagination ul li span.page-link.current{background:'.$primarycolor.';border-color:'.$primarycolor.';}';
    $custom_style .= '.pagination ul li a{color:'.$primarycolor.';border-color:'.$primarycolor.';}';
    $custom_style .= '.pagination ul li a:hover{background:'.$primarycolor.';color:#fff !important;}';
    $custom_style .= '.select2-container--default .select2-selection--single{border-color:'.$primarycolor.';}';
    $custom_style .= '#loader:before{border-top-color:'.$primarycolor.';}';
    $custom_style .= '#loader:after{border-top-color:'.$primarycolor.';}';
    $custom_style .= 'p.wp-block-tag-cloud a{color:'.$primarycolor.';}';
    $custom_style .= 'p.logged-in-as a{color:'.$primarycolor.';}';
    $custom_style .= 'form#commentform input#submit{background:'.$primarycolor.';}';
    $custom_style .= '.comment-area .comment-author a{color:'.$primarycolor.';}';
    $custom_style .= '.comment-area .comment-metadata a{color:'.$primarycolor.';}';
    $custom_style .= '.comment-area .reply a{color:'.$primarycolor.';}';
    $custom_style .= '.error-wrapper .error-content .error-info h2{color:'.$primarycolor.';}';
    $custom_style .= '.membership-area .membership-content .subscribe-input button{background:'.$primarycolor.';}';
    $custom_style .= '.membership-area .membership-content .subscribe-input input[type="email"]:focus{border-color:'.$primarycolor.';}';
    $custom_style .= '.footer-area{background:'.$footerbgcolor.';}';
    $custom_style .= '.footer-area .footer-contact .contact-box .contact-address{color:'.$footercolor.';}';
    $custom_style .= '.footer-area .footer-contact .contact-box .contact-address a{color:'.$footercolor.';}';
    $custom_style .= '.footer-area .footer-contact .contact-box i{color:'.$footercolor.';}';
    $custom_style .= '.footer-area ul li a{color:'.$footercolor.';}';
    $custom_style .= '.footer-area .footer-info p{color:'.$footercolor.';}';
    $custom_style .= 'a.woocommerce-review-link{color:'.$primarycolor.';}';
    $custom_style .= '#top-bottom-scroll i{background:'.$primarycolor.';}';
    $custom_style .= '.product-area .product-slider.owl-carousel .owl-nav button:hover{background:'.$primarycolor.'; color:#fff !important}';
    $custom_style .= 'p.woocommerce-LostPassword.lost_password a{color:'.$primarycolor.';}';
    $custom_style .= '.button-secondary{background:'.$primarycolor.';}';
    $custom_style .= '.wp-block-button__link{background-color:'.$primarycolor.';}';
    $custom_style .= '.shop-flitering .wc-block-product-categories.is-list ul li:hover a{color:'.$primarycolor.';}';
    $custom_style .= '.mc4wp-alert a{color:'.$primarycolor.';}';

    wp_register_style( 'oilbiotic-stylesheet', false );
    wp_enqueue_style( 'oilbiotic-stylesheet', false );
    wp_add_inline_style( 'oilbiotic-stylesheet', $custom_style, true );
}


add_action( 'wp_enqueue_scripts', 'obCustomStyling' );
