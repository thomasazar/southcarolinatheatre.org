<?php
/**
* Sage includes
*
* The $sage_includes array determines the code library included in your theme.
* Add or remove files to the array as needed. Supports child theme overrides.
*
* Please note that missing files will produce a fatal error.
*
* @link https://github.com/roots/sage/pull/1042
*/
$sage_includes = [
  'lib/assets.php',     // Scripts and stylesheets
  'lib/extras.php',     // Custom functions
  'lib/setup.php',      // Theme setup
  'lib/titles.php',     // Page titles
  'lib/wrapper.php',    // Theme wrapper class
  'lib/customizer.php', // Theme customizer

  'lib/functions.php',  // Custom functions for this theme
  'lib/menus.php',      // Add custom items to menus
  'lib/shortcodes.php', // Custom shortcodes
  'lib/wp_head.php',    // Clean up <head> depending on shortcode usage

  // Custom Post Types
  'lib/post-types/convention.php',
  'lib/post-types/divisions.php',
  'lib/post-types/events.php',
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

if (!current_user_can('manage_categories')) {
  add_filter('show_admin_bar', '__return_false');
}

add_filter( 'wpcf7_form_elements', 'remove_attr_size' );
function remove_attr_size( $content ) {
  $content = preg_replace('/ size=".*?"/i', '', $content);
  return $content;
}

/**
 * Remove Contact Form 7 scripts + styles unless we're on the contact page
 *
 */
add_action( 'wp_enqueue_scripts', 'ac_remove_cf7_scripts' );

function ac_remove_cf7_scripts() {
	wp_deregister_style( 'contact-form-7' );
	wp_deregister_script( 'contact-form-7' );
}

// Remove automatic <p> and <br> from forms
add_filter( 'wpcf7_autop_or_not', '__return_false' );
