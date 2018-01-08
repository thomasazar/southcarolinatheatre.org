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
  } elseif (bbp_is_single_topic()) {
    return '<a class="post__categoryLink" href="/forums/">Forums</a> &raquo; <a href="' . bbp_get_forum_permalink() . '">' . bbp_get_forum_title() . '</a> &raquo;' . get_the_title();
  } else {
    if ($archive_link = get_post_type_archive_link(get_post_type($post))) {
      $archive_label = get_post_type_object(get_post_type($post))->label;
      if ($archive_label == 'Posts') { $archive_label = 'News'; }
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
