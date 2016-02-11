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

?>
