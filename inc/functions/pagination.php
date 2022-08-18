<?php
function ob_pagination() {
	global $wp_query;
	$links = paginate_links( array(
		'current'  => max( 1, get_query_var( 'paged' ) ),
		'total'    => $wp_query->max_num_pages,
		'type'     => 'list',
		'mid_size' => apply_filters( "ob_pagination_mid_size", 3 )
	) );
	$links = str_replace( "<ul class='page-numbers'>", "<ul>", $links );
	$links = str_replace( "<li>", "<li>", $links );
	$links = str_replace( "page-numbers", "page-link", $links );

	$links = str_replace( "&laquo; Previous</a>", "&laquo;</a>", $links );
	$links = str_replace( "Next &raquo;</a>", "&raquo;</a>", $links );
	$links = str_replace( "next page-link", "aria-label='Next' page-link", $links );
	$links = str_replace( "prev aria-hidden='true'", "sr-only page-link", $links );

	$links = str_replace( "<li class='page-item'><span", " <li class='page-item active'><span", $links );


	echo wp_kses_post( $links );
}

remove_action( "term_description", "wpautop" );

function pagination_mid_size( $size ) {
	return 2;
}

add_filter( "ob_pagination_mid_size", "pagination_mid_size" );

