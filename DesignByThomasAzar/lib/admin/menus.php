<?php
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header' ),
      'extra-menu' => __( 'Extra' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

// Add 'Sign Out' link to extra-menu
add_filter( 'wp_nav_menu_items', 'dbta_loginout_menu_link', 10, 2 );
function dbta_loginout_menu_link( $items, $args ) {
  if ( $args->theme_location == 'extra-menu' && is_user_logged_in() ) {
    $items .= '<li class="menu-item menu-item--sign-out"><a href="'. wp_logout_url( home_url() ) .'">Sign Out</a></li>';
  }
  return $items;
}
?>
