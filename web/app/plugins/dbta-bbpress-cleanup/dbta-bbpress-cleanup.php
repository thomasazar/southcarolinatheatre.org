<?php
/*
Plugin Name: bbPress adjustments
Plugin URI: https://gist.github.com/ntwb/8662354
Description: Clean up the look of bbPress posts
Version: 0.1
Author: Design by Thomas Azar
Author URI: https://design.thomasazar.net
*/

// Remove 'Protected:' from titles
add_filter('protected_title_format', 'ntwb_remove_protected_title');
function ntwb_remove_protected_title($title) {
	return '%s';
}

// Remove 'Private:' from titles
add_filter('private_title_format', 'ntwb_remove_private_title');
function ntwb_remove_private_title($title) {
	return '%s';
}

// Disable bbPress breadcrumbs, since the theme uses its own breadcrumbs
function bm_bbp_no_breadcrumb ($param) {
  return true;
}
add_filter ('bbp_no_breadcrumb', 'bm_bbp_no_breadcrumb');
