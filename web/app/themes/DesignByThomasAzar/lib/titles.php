<?php

namespace Roots\Sage\Titles;

/**
 * Page titles
 */
function title() {
  global $post;
  if (is_home()) {
    if (get_option('page_for_posts', true)) {
      return get_the_title(get_option('page_for_posts', true));
    } else {
      return __('Latest Posts', 'sage');
    }
  } elseif (is_category()) {
    return single_cat_title('', false);
  } elseif (is_archive()) {
    return post_type_archive_title('', false);
  } elseif (is_search()) {
    return sprintf(__('Search Results for %s', 'sage'), get_search_query());
  } elseif (is_404()) {
    return __('Not Found', 'sage');
  } else {
    if ($archive_link = get_post_type_archive_link(get_post_type($post))) {
      $archive_label = get_post_type_object(get_post_type($post))->label;
      echo '<a class="post__categoryLink" href="' . $archive_link . '">' . $archive_label . '</a> &raquo; ';
    }
    $parents = get_post_ancestors($post->ID);
    $parents = array_reverse($parents);
    if ($parents) {
      foreach ($parents as $parent) {
        echo '<a class="post__categoryLink" href="' . get_permalink($parent) . '">' . get_the_title($parent) . '</a> &raquo; ';
      }
    }

    return get_the_title();
  }
}
