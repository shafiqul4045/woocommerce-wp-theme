<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	 <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php
	wp_head();
	?>
</head>
<body <?php body_class(); ?> >
<?php wp_body_open(); ?>
    <?php
    $preloader = get_theme_mod('preloader_setting', 'all');
    if($preloader === 'all'){
    ?>
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <?php }elseif(is_front_page() && $preloader === 'front'){
    ?>
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <?php
    } ?>


    <?php
        $top_bar = get_theme_mod('top_bar_show', 'yes');
        if($top_bar === 'yes'){
            get_template_part( 'template-parts/common/topbar' );
        }
    ?>

    <!-- ================ Header area start=============== -->
    <header class="header-wrapper">
        <div class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-12 col-sm-12 d-flex align-items-center">
                        <?php
                            get_template_part( 'template-parts/common/logo' );
                        ?>
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-12">
                        <nav class="main-wrapper">
                            <?php wp_nav_menu(
                                array(
                                    'theme_location'  => 'main_menu',
                                    'container_class' => 'main-menu',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'after'           => '<i class=\'bx bx-chevron-down\'></i>',
                                    'container_id'    => '',
                                    'menu_class'      => 'ul',
                                    'fallback_cb'     => '',
                                    'menu_id'         => '',
                                    'depth'           => 4
                                )
                            ); ?>
                        </nav>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12">
                        <div class="header-search">
                            <?php
                                get_template_part( 'template-parts/common/product-search' );
                            ?>
                            <?php
                                get_template_part( 'template-parts/common/cartandmenu' );
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- mobil menu -->

        <nav class="mobile-menu" >
            <div class="mobile-menu-area">
                <button class="menu-close-icon"><i class='bx bx-right-arrow-alt bx-flip-horizontal' ></i></button>
                <?php if ( has_custom_logo() ) {
                    the_custom_logo();
                } else {
                    ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                       title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><img
                                src="<?php echo esc_url(get_template_directory_uri().'/assets/images/logo.png'); ?>"
                                alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
                    <?php
                }
                ?>
                <?php wp_nav_menu(
                    array(
                        'theme_location'  => 'main_menu',
                        'container_class' => 'mobile-menu-items',
                        'link_before'     => '',
                        'link_after'      => '',
                        'after'           => '<i class=\'bx bx-chevron-down\'></i>',
                        'container_id'    => '',
                        'container' => 'ul',
                        'menu_class'      => 'mobile-menu-items',
                        'fallback_cb'     => '',
                        'menu_id'         => '',
                        'depth'           => 4
                    )
                ); ?>
                <div class="topbar-support topbar-support-mini">
                    <i class='bx bxs-phone' ></i>
                    <p>
                    <?php
                        echo esc_html( get_theme_mod('top_bar_phone_number_setting') );
                    ?>
                    </p>
                </div>
            </div>

        </nav>
    </header>
    <!-- ================ Header area end================= -->


