<?php

$theme_includes = [
  'lib/admin/menus.php',
  'lib/admin/hide-admin-bar.php',
  'lib/admin/soil-options.php',

  'lib/functions/aside.php',

  'lib/metabox/aside.php',
  'lib/metabox/countdown.php',
  'lib/metabox/hero.php',

  'lib/post-types/countdown.php',
  'lib/post-types/divisions.php',
  'lib/post-types/front-page.php',
  'lib/post-types/hero.php',

	'lib/myfunctions.php',
	'lib/readmore.php',
	'lib/scripts.php',
];

foreach ($theme_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf( 'Error locating %s for inclusion', $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

?>
