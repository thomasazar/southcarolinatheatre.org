<?php

namespace Roots\Sage\Titles;

/**
* Page titles
*/
function title() {
  if (is_home()) {
    if (get_option('page_for_posts', true)) {
      return get_the_title(get_option('page_for_posts', true));
    } else {
      return __('Latest Posts', 'sage');
    }
  } elseif (is_archive()) {
    return get_the_archive_title();
  } elseif (is_search()) {
    return sprintf(__('Search Results for %s', 'sage'), get_search_query());
  } elseif (is_404()) {
    return __('Not Found', 'sage');
  } elseif (is_singular('divisions')){
    return '<div class="breadcrumb"><a class="breadcrumb__parent" href="'. get_post_type_archive_link('divisions') . '">Divisions</a> » </div>' . get_the_title();
  } else {
    global $post;
    $title = '<div class="breadcrumb">';
    // If there is a parent, display the link.
    $parent_title = get_the_title( $post->post_parent );
    if ( $parent_title != the_title( ' ', ' ', false ) ) {
      $title .= '<a class="breadcrumb__parent" href="' . esc_url(get_permalink($post->post_parent)) . '" alt="' . esc_attr($parent_title) . '">' . $parent_title . '</a> »';
    }
    // Then go on to the current page link.
    $title .= '</div>' . get_the_title();
    return $title;
  }
}
