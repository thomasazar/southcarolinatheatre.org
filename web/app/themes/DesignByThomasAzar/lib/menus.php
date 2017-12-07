<?php

add_filter( 'wp_nav_menu_items', 'dbta_add_menu_item', 10, 2 );

function dbta_add_menu_item ( $items, $args ) {
  if ($args->theme_location == 'primary') {
    $href = esc_url(home_url('/'));
    $svg  = get_template_directory_uri() . '/dist/images/logo-side-text.svg';
    $logo = "<a class='logo__link desktop-only' href='$href'><object class='logo logo--nav' type='image/svg+xml' data='$svg'>SCTA</object></a>";
    $items = $logo . $items;
  }

  if ($args->theme_location == 'secondary') {
    if (is_user_logged_in()) {
      $href = get_permalink(get_page_by_title('My Profile'));
      $login = '<li class="menu-item menu-login"><a href="' . $href . '">My Profile</a></li>';
      $items .= $login;
    }
    else {
      $href = get_permalink(get_page_by_title('Login'));
      $login = '<li class="menu-item menu-login"><a href="' . $href . '">Login</a></li>';
      $items .= $login;
    }
  }
  return $items;
}
