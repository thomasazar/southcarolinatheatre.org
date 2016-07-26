<?php
add_filter( 'rwmb_meta_boxes', 'scta_countdown_metabox' );
function scta_countdown_metabox( $meta_boxes ){
    $prefix = 'scta_';

    $meta_boxes[] =
    [
        'id'         => "{$prefix}aside",
        'title'      => 'Sidebar',
        'post_types' => ['countdown'],
        'context'    => 'normal',
        'priority'   => 'high',
        'autosave'   => true,
        'fields'     => [
            [
                'name' => 'Countdown Date and Time',
                'id'   => "{$prefix}countdown-datetime",
                'type' => 'datetime',
                'options' => [
                  'inline' => true,
                ],
            ],
        ],
    ];

    return $meta_boxes;
}
?>
