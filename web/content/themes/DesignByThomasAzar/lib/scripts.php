<?php
// Include jQuery and main.js at bottom of page
add_action( 'wp_enqueue_scripts', function () {
  wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), false, NULL, true );
  wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'main', home_url( '/js/main.js'), ['jquery'], NULL, true );
} );
?>
