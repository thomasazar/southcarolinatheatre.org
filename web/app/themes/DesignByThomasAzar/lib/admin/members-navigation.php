<?php

// Add Logout to members_navigation menu
add_filter( 'wp_nav_menu_items', 'scta_members_navigation_logout', 10, 2 );

function scta_members_navigation_logout( $items, $args ) {
  if ($args->theme_location == 'members_navigation') {
    $items .= '<li class="menu-item menu-item--sign-out"><a href="'. wp_logout_url() .'">'. __("Log Out") .'</a></li>';
  }
  return $items;
}

// Redirect all logouts to home page
add_action('wp_logout','scta_go_home');
function scta_go_home() {
  wp_redirect(home_url());
  exit();
}
