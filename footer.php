<?php
    wp_footer();
?>

    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <?php
                    if ( is_active_sidebar( 'footer-1' ) ) {
                        dynamic_sidebar( 'footer-1' );
                    }
                    ?>

                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <?php
                    if ( is_active_sidebar( 'footer-2' ) ) {
                        dynamic_sidebar( 'footer-2' );
                    }
                    ?>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <?php
                    if ( is_active_sidebar( 'footer-3' ) ) {
                        dynamic_sidebar( 'footer-3' );
                    }
                    ?>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <?php
                    if ( is_active_sidebar( 'footer-4' ) ) {
                        dynamic_sidebar( 'footer-4' );
                    }
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-area">
                        <p><?php echo esc_html( get_theme_mod('footer_copyright_text_setting')); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php 
        $backToTop =  get_theme_mod( 'backtotopscroll_setting', 'yes' ); 
        if($backToTop === 'yes'){
            ?>
                <div id="top-bottom-scroll"><i class='bx bx-chevrons-up bx-fade-up'></i></div>
            <?php 
        }
    ?>
    
</body>
</html>