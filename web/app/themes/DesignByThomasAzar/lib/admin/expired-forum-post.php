<?php

function dbta_filter_expired_posts( $query ) {

    // doesn't affect admin screens
    if ( is_admin() )
        return;
    // check for main query
    if ( $query->is_main_query() ) {

        //filter out expired posts
        $today = date('Ymd');
        $metaquery = array(
            array(
                 'key' => 'expires',
                 'value' => $today,
                 'compare' => '>',
                 'type' => 'DATE',
            )
        );
        $query->set( 'meta_query', $metaquery );
    }
}
add_action( 'pre_get_posts', 'dbta_filter_expired_posts' );
