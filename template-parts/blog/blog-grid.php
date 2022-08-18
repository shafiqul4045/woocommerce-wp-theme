  <!-- START BLOG AREA -->
  <div class="blog-area section">
        <div class="container">
            <div class="row inner-blog-boxs">
            <?php  if ( have_posts() ) {
                while ( have_posts() ) { the_post();?>
                <div class="col-lg-4 col-md-6 col-sm-12 text-center">
                    <div class="blog-box">
                        <div class="blog-img">
                        <?php if ( has_post_thumbnail() ) { ?>
                         <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'post-thumbnail', array( 'class' => 'img-fluid' ) ); ?> </a>
                         <?php } ?>
                            <div class="rebon">
                                <a href="<?php echo get_day_link( get_post_time( 'Y' ), get_post_time( 'm' ), get_post_time( 'j' ) ); ?>">
                                <i class='bx bx-time'></i><?php echo get_the_date(); ?></a>
                            </div>
                        </div>
                        <div class="blog-content">
                            <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4> </a>
                            <p><?php
                            echo excerpt(20);
                            ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn readMore_btn"><?php echo esc_html__( 'Read More ', 'oilbiotic' ) ?></a>
                        </div>
                    </div>
                </div>
                <?php } ?>
				<?php } ?>
            </div>
            <?php get_template_part( 'template-parts/blog/pagination' ); ?>
        </div>
    </div> 
    <!-- END BLOG AREA -->