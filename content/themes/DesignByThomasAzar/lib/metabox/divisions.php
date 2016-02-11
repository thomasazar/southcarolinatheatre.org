<?php

$prefix = 'scta_';

global $scta_divisions_meta_boxes;

$scta_divisions_meta_boxes = array();
$scta_divisions_meta_boxes[] = array(
	// Meta box id, UNIQUE per meta box. Optional since 4.1.5
	'id' => 'standard',

	// Meta box title - Will appear at the drag and drop handle bar. Required.
	'title' => 'Upload',

	// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
	'pages' => array( 'divisions' ),

	// Where the meta box appear: normal (default), advanced, side. Optional.
	'context' => 'normal',

	// Order of meta box: high (default), low. Optional.
	'priority' => 'high',

	// Auto save: true, false (default). Optional.
	'autosave' => true,

	// List of meta fields
	'fields' => array(
		// TEXT
		array(
			// Field name - Will be used as label
			'name'  => 'CV',
			// Field ID, i.e. the meta key
			'id'    => "{$prefix}cv",
			// Field description (optional)
			'type'  => 'file_advanced',
		),
	),
);

/********************* META BOX REGISTERING ***********************/

/**
 * Register meta boxes
 *
 * @return void
 */
function register_scta_divisions_meta_boxes()
{
	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( !class_exists( 'RW_Meta_Box' ) )
		return;

	global $scta_divisions_meta_boxes;
	foreach ( $scta_divisions_meta_boxes as $meta_box )
	{
		new RW_Meta_Box( $meta_box );
	}
}
// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action( 'admin_init', 'register_scta_divisions_meta_boxes' );
?>
