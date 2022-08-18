<?php
/**
 * TGMPA Plugin support.
 */
require_once get_template_directory() . '/inc/tgm/tgm-init.php';

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/functions/theme-setup.php';

/**
 * Style Enqueue.
 */
require get_template_directory() . '/inc/functions/enqueue.php';

/**
 * Pagination.
 */
require get_template_directory() . '/inc/functions/pagination.php';
/**
 * Excerpt.
 */
require get_template_directory() . '/inc/functions/excerpt.php';

/**
 * Widgets.
 */
require get_template_directory() . '/inc/functions/footer-widget.php';

/**
 * Woocommerce.
 */
require get_template_directory() . '/inc/functions/woocommerce.php';


/**
 * Sidebar widgets.
 */
require get_template_directory() . '/inc/functions/sidebar-widgets.php';

/**
 * Theme Customizer
 */
require get_template_directory() . '/inc/functions/theme-customizer.php';

/**
 * Custom CSS
 */
require get_template_directory() . '/inc/custom-css.php';