<div class="blog-details-wrapper">
    <?php
    if ( ! empty( get_the_post_thumbnail_url() ) ) {
        ?>

        <div class="blog-details-img">
            <img src="<?php echo get_the_post_thumbnail_url( '', 'large' ); ?>" class="img-fluid"
                 alt="<?php bloginfo( 'name' ); ?>">
        </div>

        <?php
    }
    ?>
    <div class="blog-details-info">
        <div class="blog-date">
            <?php
                $author_url = get_author_posts_url( get_the_author_meta( "ID" ) );
            ?>

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
        <?php the_content(); ?>
        <div class="d-flex justify-content-between">
            <div class="tag">
                <?php the_tags();?>
            </div>
            <div class="post-cat">
                <p>Categories: </p>
                <?php the_category();?>
            </div>
        
        </div>
        
    </div>

</div>

<?php
wp_link_pages( array(
	'before'      => '<div class="page-links">',
	'after'       => '</div>',
	'link_before' => '<span>',
	'link_after'  => '</span>',
) );
?>
