<?php
add_filter( 'rwmb_meta_boxes', 'scta_aside' );
function scta_aside( $meta_boxes ){
    $prefix = 'scta_';

    $meta_boxes[] =
    [
        'id'         => "{$prefix}aside",
        'title'      => 'Sidebar',
        'post_types' => ['page', 'divisions'],
        'context'    => 'normal',
        'priority'   => 'high',
        'autosave'   => true,
        'fields'     => [
            [
                'name' => 'Alignment',
                'id'   => "{$prefix}aside-align",
                'type' => 'radio',
                'std'  => 'left',
                'options' => [
                    'left'  => 'Left',
                    'right' => 'Right',
                ]
            ],
            [
                'name' => 'Uploads',
                'id'   => "{$prefix}aside-uploads",
                'type' => 'file_advanced',
            ],
            [
                'name' => 'Content (keep this brief)',
                'id'   => "{$prefix}aside-content",
                'type' => 'wysiwyg',
                'options' => ['media_buttons' => false],
            ]
        ],
    ];

    return $meta_boxes;
}
?>
