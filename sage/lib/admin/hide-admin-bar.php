<?php
// Hide Toolbar for logged in users (except admin)
add_action( 'after_setup_theme', 'remove_admin_bar' );

function remove_admin_bar() {
	if ( !current_user_can( 'edit_others_pages' ) && !is_admin() ) {
	  show_admin_bar( false );
  }
}
