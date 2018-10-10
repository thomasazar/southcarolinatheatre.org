<?php

// Register Custom Post Type
function dbta_divisions() {

	$labels = array(
		'name'                  => _x( 'Divisions', 'Post Type General Name', 'sage' ),
		'singular_name'         => _x( 'Division', 'Post Type Singular Name', 'sage' ),
		'menu_name'             => __( 'Divisions', 'sage' ),
		'name_admin_bar'        => __( 'Division', 'sage' ),
		'archives'              => __( 'Division Archives', 'sage' ),
		'attributes'            => __( 'Division Attributes', 'sage' ),
		'parent_item_colon'     => __( 'Parent Division:', 'sage' ),
		'all_items'             => __( 'All Divisions', 'sage' ),
		'add_new_item'          => __( 'Add New Division', 'sage' ),
		'add_new'               => __( 'Add New', 'sage' ),
		'new_item'              => __( 'New Division', 'sage' ),
		'edit_item'             => __( 'Edit Division', 'sage' ),
		'update_item'           => __( 'Update Division', 'sage' ),
		'view_item'             => __( 'View Division', 'sage' ),
		'view_items'            => __( 'View Divisions', 'sage' ),
		'search_items'          => __( 'Search Divisions', 'sage' ),
		'not_found'             => __( 'Not found', 'sage' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'sage' ),
		'featured_image'        => __( 'Featured Image', 'sage' ),
		'set_featured_image'    => __( 'Set featured image', 'sage' ),
		'remove_featured_image' => __( 'Remove featured image', 'sage' ),
		'use_featured_image'    => __( 'Use as featured image', 'sage' ),
		'insert_into_item'      => __( 'Insert into Division', 'sage' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Division', 'sage' ),
		'items_list'            => __( 'Divisions list', 'sage' ),
		'items_list_navigation' => __( 'Divisions list navigation', 'sage' ),
		'filter_items_list'     => __( 'Filter Divisions list', 'sage' ),
	);
	$args = array(
		'label'                 => __( 'Division', 'sage' ),
		'description'           => __( 'Divisions', 'sage' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'page-attributes'),
		'taxonomies'            => array(),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-networking',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'divisions', $args );

}
add_action( 'init', 'dbta_divisions', 0 );
