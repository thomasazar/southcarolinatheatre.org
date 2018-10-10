<?php
/*
Plugin Name:        Custom Post Types - southcarolinatheatre.org
Description:        A collection of custom post types for SCTA's website.
Version:            1.0.0
Author:             Design by Thomas Azar
Author URI:         https://design.thomasazar.net/
*/

$post_type_includes = [
  'post-types/convention.php',
  'post-types/divisions.php',
  'post-types/events.php',
];

foreach ($post_type_includes as $file) {
  require_once $file;
}