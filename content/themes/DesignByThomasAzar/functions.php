<?php
require_once( 'lib/admin/menus.php' );

require_once( 'lib/post-types/divisions.php' );
require_once( 'lib/metabox/divisions.php' );

// Only show uploads for the current user (execpt for Site Admin)
add_filter( 'ajax_query_attachments_args', 'show_current_user_attachments' );
function show_current_user_attachments( $query ) {
	if ( ! current_user_can( 'update_core' ) ){
    	$user_id = get_current_user_id();
		if ( $user_id ) {
			$query['author'] = $user_id;
		}
		return $query;
	}
	else { return $query; }
}

// Include jQuery at bottom of page
function jquery_at_bottom() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), false, NULL, true );
    wp_enqueue_script( 'jquery' );

	wp_register_script( 'main', home_url( '/js/main.js'), false, NULL, true );
}
add_action( 'wp_enqueue_scripts', 'jquery_at_bottom' );

?>
