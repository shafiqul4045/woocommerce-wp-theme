<?php
function oil_biotic_excerpt_more( $more ) {
	return;
}
add_filter( 'excerpt_more', 'oil_biotic_excerpt_more' );


function custom_excerpt_length( $length ) {
    return 18;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
