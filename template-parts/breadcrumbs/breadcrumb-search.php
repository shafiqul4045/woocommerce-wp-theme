<div class="breadcrumbs-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="breadcrumbs-wrapper">
                    <h2><?php printf( esc_html__( 'Search Results for: %s', 'oilbiotic' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
                    <div class="page-links">
                        <ul>
                            <?php if ( function_exists( 'bcn_display' ) ) {
                                echo '<p class="breadcrumb-page" typeof="BreadcrumbList" vocab="http://schema.org/">';
                                bcn_display();
                                echo '</p>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

