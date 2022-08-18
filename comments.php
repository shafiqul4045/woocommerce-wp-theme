<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package oilbiotic
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
    return;
}
?>
<div class="row blog-padding comment-page">
    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-12">
        <div class="comment-area">
            <?php
            // You can start editing here -- including this comment!
            if ( have_comments() ) : ?>
                <h3 class="comments-title"><?php comments_number( esc_html__('0 Comments', 'oilbiotic'), esc_html__('1 Comment', 'oilbiotic'), esc_html__(  '% Comments', 'oilbiotic') ); ?></h3>
                <?php wp_list_comments(); ?>
                <?php
                the_comments_navigation();

                // If comments are closed and there are comments, let's leave a little note, shall we?
                if ( ! comments_open() ) :
                    ?>
                    <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'oilbiotic' ); ?></p>
                <?php
                endif;

            endif; // Check for have_comments().
            ?>
        </div>
    </div>
    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-12">
        <?php

        // Custom comments_args here: https://codex.wordpress.org/Function_Reference/comment_form
        $commenter = wp_get_current_commenter();
        $req = get_option( 'require_name_email' );
        $aria_req = ( $req ? " aria-required='true'" : '' );

        $comments_args = array(
            'title_reply'   => esc_html__('Leave a comment', 'oilbiotic'),
            'comment_field' => ' <div class="mb-4 comment-form-comment"><label for="comment" class="mb-3">'.esc_attr__('Comment', 'oilbiotic').'</label><textarea class="form-control text__area" id="comment" name="comment" cols="45" rows="8" '.$aria_req.'placeholder="'. esc_attr__( 'Share a Comment here', 'oilbiotic' ) .'"></textarea></div>',
            'fields'     => apply_filters( 'comment_form_default_fields', array(

                'author' => '<div class="form-group input_area row"><div class="mb-4 col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12"> <label for="your-name" class="mb-3">'.esc_attr__('Name', 'oilbiotic').'</label><input id="author" name="author" type="text"class="form-control" value="'.esc_attr($commenter['comment_author'])
                    .'" placeholder="'.esc_attr__('Full Name', 'oilbiotic').'" '.$aria_req.'></div>',

                'email' => '<div class="mb-4 col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12"> <label for="your-email" class="mb-3">'.esc_attr__('Email', 'oilbiotic').'</label><input  class="form-control"  id="email" name="email" type="email"  value="'.esc_attr($commenter['comment_author_email'])
                    .'" placeholder="'.esc_attr__('Email Here', 'oilbiotic').'" '.$aria_req.'></div></div>',

                'website' => '<div class="mb-4 comment-form-url"> <label for="website" class="mb-3">'.esc_attr__('Website', 'oilbiotic').'</label><input class="form-control id="website" name="website" type="text" placeholder="'.esc_attr__('Website(optional)', 'oilbiotic').'" /></div>',
            )),
            'class_submit' => 'btn btn-submit',
            'label_submit' => esc_html__( 'Submit Now', 'oilbiotic' ),
            'format'       => 'xhtml'
        );
        comment_form( $comments_args );
        ?>
    </div>

</div><!-- #comments -->