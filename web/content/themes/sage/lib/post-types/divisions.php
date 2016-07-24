<?php
// Register Custom Post Type
function scta_division() {

	$labels = array(
		'name'                  => 'Divisions',
		'singular_name'         => 'Division',
		'menu_name'             => 'Divisions',
		'name_admin_bar'        => 'Divisions',
		'archives'              => '',
		'parent_item_colon'     => 'Parent Division:',
		'all_items'             => 'All Divisions',
		'add_new_item'          => 'Add New Division',
		'add_new'               => 'Add New Division',
		'new_item'              => 'New Division',
		'edit_item'             => 'Edit Division',
		'update_item'           => 'Update Division',
		'view_item'             => 'View Division',
		'search_items'          => 'Search Division',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Divisions list',
		'items_list_navigation' => 'Divisions list navigation',
		'filter_items_list'     => 'Filter items list',
	);
	$args = array(
		'label'                 => 'Division',
		'description'           => 'Divisions',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-page',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'divisions', $args );

}
add_action( 'init', 'scta_division', 0 );
?>
