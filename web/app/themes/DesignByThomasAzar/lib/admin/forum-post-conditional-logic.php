<?php

/*
* https://support.advancedcustomfields.com/forums/topic/conditional-logic-using-taxonomy-field/page/3/
*/

function change_post_taxonomy( $post_id ) {
    // bail if no ACF data
    if ( empty($_POST['acf']) ) {
        return;
    }

    // Limit to certain post types if needed
    if(get_post_type($post_id) == 'forum-post') {

	    // get term id from $post_id
	    $stored_role = wp_get_post_terms($post_id, 'forum-category');

	    // get submitted value from acf form by field key
	    $posted_role = $_POST['acf']['field_5908f6aa6901d'];

		$term = get_term_by( 'name', $posted_role, 'forum-category' );
		$term_id = $term->term_id;

	    // if stored value(s) is/are not equal to posted value(s), then update terms
	    if ( $stored_role != $posted_role ) {
	        wp_set_object_terms( $post_id, $term_id, 'forum-category' );
	    }
    }
}
add_action('acf/save_post', 'change_post_taxonomy', 20);
