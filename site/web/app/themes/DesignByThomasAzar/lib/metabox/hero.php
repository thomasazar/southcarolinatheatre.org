<?php
add_filter( 'rwmb_meta_boxes', 'hero_metabox' );
function hero_metabox( $meta_boxes ){
    $prefix = 'scta_';

    $meta_boxes[] =
    [
        'id'         => "{$prefix}link",
        'title'      => 'Link',
        'post_types' => ['scta_hero'],
        'context'    => 'normal',
        'priority'   => 'high',
        'autosave'   => true,
        'fields'     => [
            [
                'name' => 'Address',
                'id'   => "{$prefix}link-address",
                'type' => 'post',
                'post_type' => ['page', 'divisions'],
            ],
        ],
    ];

    return $meta_boxes;
}
