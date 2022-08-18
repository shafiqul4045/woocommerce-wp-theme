<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package oilbiotic
 */

get_header();
?>
<?php
if ( ! is_front_page() ) {
    get_template_part( 'template-parts/breadcrumbs/breadcrumb-page' );
}
?>
    <main id="primary" class="site-main">
        <div class="error-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="error-content">
                            <div class="error-illustration">
                                <img src="<?php echo esc_url(get_template_directory_uri().'/assets/images/404.png'); ?>" alt="404" class="img-fluid">
                            </div>

                            <div class="error-info">
                                <h2>
                                    <?php
                                        echo esc_html__( 'OOOPPS.! THAT PAGE CAN’T BE FOUND.', 'oilbiotic' );
                                    ?>
                                </h2>
                                <h5>
                                    <?php
                                        echo esc_html__( 'It looks like nothing was found at this location.', 'oilbiotic' );
                                    ?>
                                </h5>

                                <div class="error-btn">
                                    <a href="<?php echo esc_url(home_url());?>" class="button-primary"><?php echo esc_html('GO TO HOME', 'oilbiotic')?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- #main -->
<?php
get_footer();