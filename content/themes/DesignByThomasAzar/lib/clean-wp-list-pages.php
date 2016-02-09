<?php

class Clean_Walker extends Walker_Page {
    function start_lvl (&$output, $depth) {
        $indent = str_repeat("", $depth);
        $output .= "$indent<ul>";
    }
    function start_el (&$output, $page, $depth, $args, $current_page) {
        if ( $depth )
            $indent = str_repeat("", $depth);
        else
            $indent = '';
        extract($args, EXTR_SKIP);
        $class_attr = '';
        if ( is_home($current_page) ) {
            $output = '';
        }
        if ( !empty($current_page) ) {
            $_current_page = get_page( $current_page );
            if ( ($page->ID == $current_page) ) {
                $class_attr = 'current-menu-item';
            }
        } elseif ( (is_single() || is_archive()) && ($page->ID == get_option('page_for_posts')) ) {
            $class_attr = 'current-menu-item';
            echo $current_page;
        }
        if ( $class_attr != '' ) {
            $class_attr = ' class="' . $class_attr . '"';

        }

		$output .= $indent . '<li' . $class_attr . '><a href="' . make_href_root_relative(get_page_link($page->ID)) . '"' . $class_attr . '>' . apply_filters( 'the_title', $page->post_title, $page->ID ) . '</a>';
        if ( !empty($show_date) ) {
            if ( 'modified' == $show_date )
                $time = $page->post_modified;
            else
                $time = $page->post_date;
            $output .= " " . mysql2date($date_format, $time);
        }
    }
}

/*
 *  End clean up of wp_list_pages
 */

/*
 *  Make href root relative
 *  Cleans up hrefs, so that they resemble "/contact/" instead of "http://domain.com/contact/"
 */

function make_href_root_relative($input) {
    return preg_replace('!http(s)?://' . $_SERVER['SERVER_NAME'] . '/!', '/', $input);
}

//  Add make_href_root_relative function to the_permalink
function root_relative_permalinks($input) {
    return make_href_root_relative($input);
}
add_filter( 'the_permalink', 'root_relative_permalinks' );
?>
