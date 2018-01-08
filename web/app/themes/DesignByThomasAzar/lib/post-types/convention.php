<?php

// Register Custom Post Type
function dbta_convention() {

	$labels = array(
		'name'                  => _x( 'Convention', 'Post Type General Name', 'sage' ),
		'singular_name'         => _x( 'Convention', 'Post Type Singular Name', 'sage' ),
		'menu_name'             => __( 'Convention', 'sage' ),
		'name_admin_bar'        => __( 'Convention Item', 'sage' ),
		'archives'              => __( 'Convention Archives', 'sage' ),
		'attributes'            => __( 'Convention Attributes', 'sage' ),
		'parent_item_colon'     => __( 'Parent Convention:', 'sage' ),
		'all_items'             => __( 'All Convention', 'sage' ),
		'add_new_item'          => __( 'Add New Convention', 'sage' ),
		'add_new'               => __( 'Add New', 'sage' ),
		'new_item'              => __( 'New Convention Item', 'sage' ),
		'edit_item'             => __( 'Edit Convention Item', 'sage' ),
		'update_item'           => __( 'Update Convention Item', 'sage' ),
		'view_item'             => __( 'View Convention Item', 'sage' ),
		'view_items'            => __( 'View Convention Items', 'sage' ),
		'search_items'          => __( 'Search Convention Items', 'sage' ),
		'not_found'             => __( 'Not found', 'sage' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'sage' ),
		'featured_image'        => __( 'Featured Image', 'sage' ),
		'set_featured_image'    => __( 'Set featured image', 'sage' ),
		'remove_featured_image' => __( 'Remove featured image', 'sage' ),
		'use_featured_image'    => __( 'Use as featured image', 'sage' ),
		'insert_into_item'      => __( 'Insert into Convention', 'sage' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Convention', 'sage' ),
		'items_list'            => __( 'Convention list', 'sage' ),
		'items_list_navigation' => __( 'Convention list navigation', 'sage' ),
		'filter_items_list'     => __( 'Filter Convention list', 'sage' ),
	);
	$args = array(
		'label'                 => __( 'Convention', 'sage' ),
		'description'           => __( 'Convention', 'sage' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'page-attributes'),
		'taxonomies'            => array(),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'convention', $args );

}
add_action( 'init', 'dbta_convention', 0 );
