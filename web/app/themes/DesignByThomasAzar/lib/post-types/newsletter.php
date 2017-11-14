<?php

// Register Custom Post Type
function dbat_newsletter() {

	$labels = array(
		'name'                  => _x( 'Newsletter Articles', 'Post Type General Name', 'sage' ),
		'singular_name'         => _x( 'Newsletter Article', 'Post Type Singular Name', 'sage' ),
		'menu_name'             => __( 'Newsletter Articles', 'sage' ),
		'name_admin_bar'        => __( 'Newsletter Article', 'sage' ),
		'archives'              => __( 'Newsletter Archives', 'sage' ),
		'attributes'            => __( 'Newsletter Article Attributes', 'sage' ),
		'parent_item_colon'     => __( 'Parent Item:', 'sage' ),
		'all_items'             => __( 'All Newsletter Articles', 'sage' ),
		'add_new_item'          => __( 'Add New Newsletter Article', 'sage' ),
		'add_new'               => __( 'Add New', 'sage' ),
		'new_item'              => __( 'New Newsletter Article', 'sage' ),
		'edit_item'             => __( 'Edit Newsletter Article', 'sage' ),
		'update_item'           => __( 'Update Newsletter Article', 'sage' ),
		'view_item'             => __( 'View Newsletter Article', 'sage' ),
		'view_items'            => __( 'View Newsletter Articles', 'sage' ),
		'search_items'          => __( 'Search Newsletter Article', 'sage' ),
		'not_found'             => __( 'Not found', 'sage' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'sage' ),
		'featured_image'        => __( 'Featured Image', 'sage' ),
		'set_featured_image'    => __( 'Set featured image', 'sage' ),
		'remove_featured_image' => __( 'Remove featured image', 'sage' ),
		'use_featured_image'    => __( 'Use as featured image', 'sage' ),
		'insert_into_item'      => __( 'Insert into Newsletter Article', 'sage' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Newsletter Article', 'sage' ),
		'items_list'            => __( 'Newsletter Articles list', 'sage' ),
		'items_list_navigation' => __( 'Newsletter Articles list navigation', 'sage' ),
		'filter_items_list'     => __( 'Filter Newsletter Articles list', 'sage' ),
	);
	$args = array(
		'label'                 => __( 'Newsletter Article', 'sage' ),
		'description'           => __( 'Newsletter', 'sage' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', ),
		'taxonomies'            => array( 'category', 'tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'newsletter', $args );

}
add_action( 'init', 'dbat_newsletter', 0 );
