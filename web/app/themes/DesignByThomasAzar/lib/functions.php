<?php

namespace DesignByThomasAzar\Functions;

function get_menu($menu_name, $menu_class = '', $echo = 'true', $items_wrap = '<ul id="%1$s" class="%2$s">%3$s</ul>') {
  if (has_nav_menu($menu_name)) {
    return wp_nav_menu(['theme_location' => $menu_name, 'menu_class' => $menu_class, 'echo' => $echo, 'items_wrap' => $items_wrap]);
  }
}
