<?php

// Register Custom Taxonomy
function dbta_forum_post_categories() {

	$labels = array(
		'name'                       => _x( 'Categories', 'Taxonomy General Name', 'sage' ),
		'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'sage' ),
		'menu_name'                  => __( 'Categories', 'sage' ),
		'all_items'                  => __( 'All Categories', 'sage' ),
		'parent_item'                => __( 'Parent Category', 'sage' ),
		'parent_item_colon'          => __( 'Parent Category:', 'sage' ),
		'new_item_name'              => __( 'New Category Name', 'sage' ),
		'add_new_item'               => __( 'Add New Category', 'sage' ),
		'edit_item'                  => __( 'Edit Category', 'sage' ),
		'update_item'                => __( 'Update Category', 'sage' ),
		'view_item'                  => __( 'View Category', 'sage' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'sage' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'sage' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'sage' ),
		'popular_items'              => __( 'Popular Categories', 'sage' ),
		'search_items'               => __( 'Search Categories', 'sage' ),
		'not_found'                  => __( 'Not Found', 'sage' ),
		'no_terms'                   => __( 'No items', 'sage' ),
		'items_list'                 => __( 'Categories list', 'sage' ),
		'items_list_navigation'      => __( 'Categories list navigation', 'sage' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'forum-category', array( 'forum-post' ), $args );

}
add_action( 'init', 'dbta_forum_post_categories', 0 );
