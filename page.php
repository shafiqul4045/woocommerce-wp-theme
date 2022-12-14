<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package oilbitic
 */

get_header();
?>
<!--  Breadcrumbs Start -->
<?php

if ( ! is_front_page() ) {
    get_template_part( 'template-parts/breadcrumbs/breadcrumb-page' );
}
?>
<!--  breadcrumbs End -->
<div class="page-wrapper">
		<?php
		if ( have_posts() ) {
			the_post();
			get_template_part( 'loop-templates/content', 'page' );
		}
		?>
</div>

<?php
get_footer();
?>

