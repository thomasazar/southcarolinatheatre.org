<?php
add_filter( 'rwmb_meta_boxes', 'scta_hero_metaboxes' );
function scta_hero_metaboxes( $meta_boxes ){
    $prefix = 'scta_';

    $meta_boxes[] =
    [
        'id'         => "{$prefix}hero",
        'title'      => 'Hero Image on Front Page',
        'post_types' => ['scta_hero'],
        'context'    => 'normal',
        'priority'   => 'high',
        'autosave'   => true,
        'fields'     => [
            [
                'name' => 'Image',
                'id'   => "{$prefix}hero_image",
                'type' => 'image_advanced',
            ],
            [
                'name' => 'Content (keep this brief)',
                'id'   => "{$prefix}hero_text",
                'type' => 'textarea',
            ],
            [
              'name' => 'Expiration Date',
              'id'   => "{$prefix}expire",
              'type' => 'datetime',
            ]
        ],
    ];

    return $meta_boxes;
}
?>
