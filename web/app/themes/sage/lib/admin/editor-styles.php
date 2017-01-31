<?php

/*
  Custom editor styles
*/

// Callback function to insert 'styleselect' into the $buttons array
function dbta_buttons( $buttons ) {
	array_push( $buttons, 'styleselect' );
	return $buttons;
}
// Register our callback to the appropriate filter
add_filter( 'mce_buttons', 'dbta_buttons' );

// Callback function to filter the MCE settings
function dbta_before_init_insert_formats( $init_array ) {
	// Define the style_formats array
	$style_formats = array(
		// Each array child is a format with it's own settings
		[
			'title' => 'Title',
			'block' => 'h1',
			'classes' => 'post__title',
			'wrapper' => true,
		],
	);
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = json_encode( $style_formats );

	return $init_array;

}
// Attach callback to 'tiny_mce_before_init'
add_filter( 'tiny_mce_before_init', 'dbta_before_init_insert_formats' );
