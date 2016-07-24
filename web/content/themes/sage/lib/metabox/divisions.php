<?php
add_filter( 'rwmb_meta_boxes', 'scta_divisions_meta_boxes' );
function scta_divisions_meta_boxes( $meta_boxes ){
    $prefix = 'scta_';

    $meta_boxes[] =
    [
        'id'         => 'upload',
        'title'      => 'Attachments',
        'post_types' => 'divisions',
        'context'    => 'normal',
        'priority'   => 'high',
        'autosave'   => true,
        'fields'     => [
            [
                'name' => 'Uploads',
                'id'   => "{$prefix}uploads",
                'type' => 'file_advanced',
            ],
        ],
    ];

    $meta_boxes[] =
    [
        'id'         => 'contact',
        'title'      => 'Division Chair',
        'post_types' => 'divisions',
        'context'    => 'normal',
        'priority'   => 'high',
        'autosave'   => true,
        'fields'     => [
            [
                'name' => 'Name',
                'id'   => "{$prefix}division-chair-name",
                'type' => 'text',
            ],
            [
                'name' => 'Email',
                'id'   => "{$prefix}division-chair-email",
                'type' => 'email',
            ],
            [
                'name' => 'Phone',
                'id'   => "{$prefix}division-chair-phone",
                'type' => 'text',
            ],
        ],
    ];
    return $meta_boxes;
}
?>
