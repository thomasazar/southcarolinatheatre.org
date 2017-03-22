<?php
// Register Custom Post Type
function scta_front_page() {

	$labels = array(
		'name'                  => 'Home Page items',
		'singular_name'         => 'Home Page item',
		'menu_name'             => 'Home Page',
		'name_admin_bar'        => 'Home Page items',
		'archives'              => '',
		'parent_item_colon'     => 'Parent item:',
		'all_items'             => 'All items',
		'add_new_item'          => 'Add New item',
		'add_new'               => 'Add New item',
		'new_item'              => 'New item',
		'edit_item'             => 'Edit item',
		'update_item'           => 'Update item',
		'view_item'             => 'View item',
		'search_items'          => 'Search item',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Home Page items list',
		'items_list_navigation' => 'Home Page items list navigation',
		'filter_items_list'     => 'Filter items list',
	);
	$args = array(
		'label'                 => 'Home Page item',
		'description'           => 'Home Page items',
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
	register_post_type( 'front_page', $args );

}
add_action( 'init', 'scta_front_page', 0 );
