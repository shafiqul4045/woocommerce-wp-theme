<div class="blog-warpper blog-warpper-single">
    <div class="blog-thumb">
        <?php
        if ( ! empty( the_post_thumbnail() ) ) {

            ?>
            <a href="<?php the_permalink(); ?>"><img alt="<?php the_title();?>"
                                                     src=" <?php the_post_thumbnail( 'thumbnail', array( 'class' => 'img-fluid' ) ); ?>"></a>
            <?php
        }
        ?>
    </div>
    <div class="blog-info">
        <?php
        $author_url = get_author_posts_url( get_the_author_meta( "ID" ) );
        ?>
        <div class="blog-date">
            <div class="author">
                <i class='bx bx-user'></i>
                <a href="<?php echo esc_url( $author_url ) ?>">By <?php the_author(); ?></a>
            </div>
            <div class="blog-time">
                <i class='bx bx-calendar'></i>
                <a href="<?php echo get_day_link(get_post_time('Y'), get_post_time('m'), get_post_time('j'));  ?>">
                    <?php the_date(); ?>
                </a>
            </div>
            <div class="blog-comments">
                <i class='bx bx-message-square-detail'></i>
                <a href="#"><?php echo wp_kses_post( get_comments_number() . ' Comment' ); ?></a>
            </div>
        </div>
        <h5><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
        <?php
        the_excerpt();
        ?>
        <div class="blog-btn">
            <a href="<?php the_permalink();?>" class="button-primary"><?php echo esc_html('View More', 'oilbiotic')?></a>
        </div>
    </div>
</div>