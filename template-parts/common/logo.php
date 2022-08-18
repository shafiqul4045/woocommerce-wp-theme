<div class="header-logo">
    <?php if ( has_custom_logo() ) {
        the_custom_logo();
    } else {
        ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
           title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><img
                    src="<?php echo esc_url( get_template_directory_uri().'/assets/images/logo.png' ); ?>"
                    alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
        <?php
    }
    ?>
    <div class="menu-btn-sm">
        <i class='bx bx-menu' ></i>
    </div>
</div>