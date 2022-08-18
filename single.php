<?php
    get_header();
?>
<?php
if ( ! is_front_page() ) {
    get_template_part( 'template-parts/breadcrumbs/breadcrumb-noTitle' );
}
?>
<div class="blog-area section-gap-85">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="blog-details-wrapper">
                    <?php
                    while ( have_posts() ) {
                        the_post();
                        get_template_part( 'loop-templates/content', 'single' );
                    } ?>

                    <?php
                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                    ?>
                </div>
            </div>

            <div class="col-md-4">
                <div class="blog-sidebar">
                    <?php
                    if ( is_active_sidebar( 'right_sidebar' ) ) {
                        dynamic_sidebar( 'right_sidebar' );
                    }
                    ?>
                </div>
            </div>

        </div>
    </div>
</div>
<?php
get_footer();
?>