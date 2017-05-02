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
  // Admin stuff
  'lib/admin/editor-styles.php',      // Custom styles for TinyMCE Editor
  'lib/admin/expired-forum-post.php',      // Custom styles for TinyMCE Editor
  'lib/admin/hide-admin-bar.php',     // Hide admin menu unless user is at least an Editor
  'lib/admin/maps-shortcode.php',     // Add Logout to members_navigation
  'lib/admin/members-navigation.php', // Add Logout to members_navigation
  'lib/admin/remove-menu-pages.php', // Add Logout to members_navigation
  'lib/admin/wpcf7-date.php',         // Enable JS date and number fallbacks

  // Classes
  'lib/class/frontend.php', // Frontend stuff (Boxes, Hero image)

  // Custom Post Types
  'lib/post-types/divisions.php',  // Divisions
  'lib/post-types/forum-post.php', // Forum posts
  'lib/post-types/front-page.php', // Home page news items
  'lib/post-types/hero.php',       // Front page Hero

  // Metaboxes
  'lib/metabox/divisions.php', // Divisions
  'lib/metabox/hero.php',      // Hero Image

  // Taxonomies
  'lib/taxonomies/forum-post-categories.php', // Forum post Categories

  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);
