<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        global $post;
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        if (is_front_page()) {
            return;
        }
        if ($archive_link = get_post_type_archive_link(get_post_type($post))) {
            $archive_label = get_post_type_object(get_post_type($post))->label;
            if ($archive_label == 'Posts') { $archive_label = 'News'; }
            echo '<a class="post__categoryLink" href="' . $archive_link . '">' . $archive_label . '</a> &raquo; ';
        }
        if ($parents = get_post_ancestors($post->ID)) { // Post has a parent
            $parents = array_reverse($parents);
            foreach ($parents as $parent) {
                echo '<a class="post__categoryLink" href="' . get_permalink($parent) . '">' . get_the_title($parent) . '</a> &raquo; ';
            }
        }
        return get_the_title();
    }
}
