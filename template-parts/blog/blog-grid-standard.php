    <!-- START BLOG AREA -->
    <div class="blog-area blog-sidebar-page section">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <?php if ( have_posts() ) :;
                                /* Start the Loop */
                                while ( have_posts() ) :
                                    the_post();

                                    /*
                                    * Include the Post-Type-specific template for the content.
                                    * If you want to override this in a child theme, then include a file
                                    * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                                    */
                                    get_template_part( 'loop-templates/content-grid-standard', get_post_type() );

                                endwhile;
                            else :
                                get_template_part( 'template-parts/content', 'none' );
                            endif;
                            ?>

                    </div>
                    <?php get_template_part( 'template-parts/blog/pagination' ); ?>
                </div>
                <?php echo get_sidebar(); ?>
            </div>

        </div>
    </div> 
    <!-- END BLOG AREA -->