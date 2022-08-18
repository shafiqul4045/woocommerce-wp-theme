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
            <div class="col-lg-8 col-md-12 col-sm-12">
                <?php
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post();
                        ?>
                        <?php get_template_part( 'loop-templates/content' ); ?>
                        <?php
                    }
                } else {
                    get_template_part( 'loop-templates/content', 'none' );
                }
                ?>
                <?php
                get_template_part( 'template-parts/common/pagination' );
                ?>
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
<!--  Blog Area End -->

<?php
get_footer();
?>
