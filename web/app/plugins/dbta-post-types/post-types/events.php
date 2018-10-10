<?php

// Register Custom Post Type
function dbta_event() {

	$labels = array(
		'name'                  => _x( 'Events', 'Post Type General Name', 'sage' ),
		'singular_name'         => _x( 'Event', 'Post Type Singular Name', 'sage' ),
		'menu_name'             => __( 'Events', 'sage' ),
		'name_admin_bar'        => __( 'Event Item', 'sage' ),
		'archives'              => __( 'Events Archives', 'sage' ),
		'attributes'            => __( 'Events Attributes', 'sage' ),
		'parent_item_colon'     => __( 'Parent Event:', 'sage' ),
		'all_items'             => __( 'All Event', 'sage' ),
		'add_new_item'          => __( 'Add New Event', 'sage' ),
		'add_new'               => __( 'Add New', 'sage' ),
		'new_item'              => __( 'New Event Item', 'sage' ),
		'edit_item'             => __( 'Edit Event Item', 'sage' ),
		'update_item'           => __( 'Update Event Item', 'sage' ),
		'view_item'             => __( 'View Event Item', 'sage' ),
		'view_items'            => __( 'View Event Items', 'sage' ),
		'search_items'          => __( 'Search Event Items', 'sage' ),
		'not_found'             => __( 'Not found', 'sage' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'sage' ),
		'featured_image'        => __( 'Featured Image', 'sage' ),
		'set_featured_image'    => __( 'Set featured image', 'sage' ),
		'remove_featured_image' => __( 'Remove featured image', 'sage' ),
		'use_featured_image'    => __( 'Use as featured image', 'sage' ),
		'insert_into_item'      => __( 'Insert into Event', 'sage' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Event', 'sage' ),
		'items_list'            => __( 'Event list', 'sage' ),
		'items_list_navigation' => __( 'Event list navigation', 'sage' ),
		'filter_items_list'     => __( 'Filter Event list', 'sage' ),
	);
	$rewrite = array(
		'slug'                  => 'event',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Event', 'sage' ),
		'description'           => __( 'Event', 'sage' ),
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
		'rewrite'								=> $rewrite,
		'capability_type'       => 'post',
	);
	register_post_type( 'events', $args );

}
add_action( 'init', 'dbta_event', 0 );
