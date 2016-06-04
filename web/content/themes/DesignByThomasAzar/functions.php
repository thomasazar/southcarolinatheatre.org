<?php

$theme_includes = [
  'lib/admin/menus.php',
  'lib/admin/soil-options.php',
  'lib/functions/aside.php',
  'lib/metabox/hero.php',
	'lib/metabox/aside.php',
  'lib/post-types/hero.php',
  'lib/shortcodes/timer.php',
	'lib/myfunctions.php',
];

foreach ($theme_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf( 'Error locating %s for inclusion', $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

// Include jQuery and main.js at bottom of page
add_action( 'wp_enqueue_scripts', function () {
  wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), false, NULL, true );
  wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'main', home_url( '/js/main.js'), ['jquery'], NULL, true );
} );

/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */

add_filter( 'excerpt_more', function ( $more ) {
    return sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( ' [read more...]', 'textdomain' )
    );
} );

add_filter( 'excerpt_length', function ( $length ) { return 20; }, 999 );

// Hide Toolbar for logged in users (except admin)
add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
	if (!current_user_can('administrator') && !is_admin()) {
	  show_admin_bar(false);
  }
}

?>
