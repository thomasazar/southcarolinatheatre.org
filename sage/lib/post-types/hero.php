<?php
// Register Custom Post Type
function scta_hero() {

	$labels = array(
		'name'                  => 'Hero Images',
		'singular_name'         => 'Hero Image',
		'menu_name'             => 'Hero Image',
		'name_admin_bar'        => 'Hero Image',
		'archives'              => 'Hero Image Archives',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Hero Images',
		'add_new_item'          => 'Add New Hero Image',
		'add_new'               => 'Add New',
		'new_item'              => 'New Hero Image',
		'edit_item'             => 'Edit Hero Image',
		'update_item'           => 'Update Hero Image',
		'view_item'             => 'View Hero Image',
		'search_items'          => 'Search Item',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Items list',
		'items_list_navigation' => 'Items list navigation',
		'filter_items_list'     => 'Filter items list',
	);
	$args = array(
		'label'                 => 'Hero Image',
		'description'           => 'Hero Image',
		'labels'                => $labels,
		'supports'              => array( 'title', 'excerpt', 'thumbnail'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-format-image',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'scta_hero', $args );

}
add_action( 'init', 'scta_hero', 0 );
?>
