<?php

// Register Custom Post Type
function dbta_forum_post() {

	$labels = array(
		'name'                  => _x( 'Forum Posts', 'Forum Post General Name', 'sage' ),
		'singular_name'         => _x( 'Forum Post', 'Forum Post Singular Name', 'sage' ),
		'menu_name'             => __( 'Forum Posts', 'sage' ),
		'name_admin_bar'        => __( 'Forum Post', 'sage' ),
		'archives'              => __( 'Item Archives', 'sage' ),
		'attributes'            => __( 'Item Attributes', 'sage' ),
		'parent_item_colon'     => __( 'Parent Item:', 'sage' ),
		'all_items'             => __( 'All Items', 'sage' ),
		'add_new_item'          => __( 'Add New Item', 'sage' ),
		'add_new'               => __( 'Add New', 'sage' ),
		'new_item'              => __( 'New Item', 'sage' ),
		'edit_item'             => __( 'Edit Item', 'sage' ),
		'update_item'           => __( 'Update Item', 'sage' ),
		'view_item'             => __( 'View Item', 'sage' ),
		'view_items'            => __( 'View Items', 'sage' ),
		'search_items'          => __( 'Search Item', 'sage' ),
		'not_found'             => __( 'Not found', 'sage' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'sage' ),
		'featured_image'        => __( 'Featured Image', 'sage' ),
		'set_featured_image'    => __( 'Set featured image', 'sage' ),
		'remove_featured_image' => __( 'Remove featured image', 'sage' ),
		'use_featured_image'    => __( 'Use as featured image', 'sage' ),
		'insert_into_item'      => __( 'Insert into item', 'sage' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'sage' ),
		'items_list'            => __( 'Items list', 'sage' ),
		'items_list_navigation' => __( 'Items list navigation', 'sage' ),
		'filter_items_list'     => __( 'Filter items list', 'sage' ),
	);
	$rewrite = array(
		'slug'                  => 'forum',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Forum Post', 'sage' ),
		'description'           => __( 'Forum Post', 'sage' ),
		'labels'                => $labels,
		'supports'              => array( 'title', ),
		'taxonomies'            => array(  ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-status',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'forum',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
	);
	register_post_type( 'forum-post', $args );

}
add_action( 'init', 'dbta_forum_post', 0 );
