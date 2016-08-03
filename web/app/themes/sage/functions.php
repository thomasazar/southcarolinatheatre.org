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
  'lib/admin/hide-admin-bar.php',     // Hide admin menu unless user is at least an Editor
  'lib/admin/members-navigation.php', // Add Logout to members_navigation

  // Custom Post Types
  'lib/post-types/divisions.php',  // Divisions
  'lib/post-types/front-page.php', // Home page news items
  'lib/post-types/hero.php',       // Front page Hero

  // Metaboxes
  'lib/metabox/divisions.php', // Divisions

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