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
    } elseif (is_singular('forum-post')) {
        $categories = get_the_terms(get_the_ID(), 'forum-category');
        return '<p class="breadcrumb"> <a class="breadcrumb__parent" href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a> » </p>' . get_the_title();
    } elseif (is_singular('divisions')){
        global $post;
        return '<div class="breadcrumb"><a class="breadcrumb__parent" href="'. get_post_type_archive_link('divisions') . '">Divisions</a> » </div>' . get_the_title();
    } else {
        global $post;
        $title = '<div class="breadcrumb">';
        // If there is a parent, display the link.
        $parent_title = get_the_title( $post->post_parent );
        if ( $parent_title !== get_the_title() ) {
            return '<p class="breadcrumb"> <a class="breadcrumb__parent" href="' . esc_url(get_permalink($post->post_parent)) . '">' . $parent_title . '</a> » </p>' . get_the_title();
        }
        else {
            return get_the_title();
        }
    }
}
?>
