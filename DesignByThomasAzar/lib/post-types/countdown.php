<?php
// Register Custom Post Type
function scta_countdown() {

	$labels = array(
		'name'                  => 'Countdowns',
		'singular_name'         => 'Countdown',
		'menu_name'             => 'Countdowns',
		'name_admin_bar'        => 'Countdowns',
		'archives'              => '',
		'parent_item_colon'     => 'Parent Countdown:',
		'all_items'             => 'All Countdowns',
		'add_new_item'          => 'Add New Countdown',
		'add_new'               => 'Add New Countdown',
		'new_item'              => 'New Countdown',
		'edit_item'             => 'Edit Countdown',
		'update_item'           => 'Update Countdown',
		'view_item'             => 'View Countdown',
		'search_items'          => 'Search Countdown',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Countdowns list',
		'items_list_navigation' => 'Countdowns list navigation',
		'filter_items_list'     => 'Filter items list',
	);
	$args = array(
		'label'                 => 'Countdown',
		'description'           => 'Countdowns',
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-clock',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'countdown', $args );

}
add_action( 'init', 'scta_countdown', 0 );
?>
