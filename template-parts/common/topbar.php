<!-- ================ Navbar area start =============== -->
<div class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-4 col-sm-12">
                <div class="topbar-support screen-xl">
                    <i class='bx bxs-phone' ></i>
                    <p>
                        <?php
                            echo esc_html( get_theme_mod('top_bar_phone_number_setting') );
                        ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-8 col-sm-12">
                <?php wp_nav_menu(
                    array(
                        'theme_location'  => 'top_bar_menu',
                        'container_class' => 'topbar-links',
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

            </div>
        </div>
    </div>
</div>
<!-- ================ Navbar area end =============== -->