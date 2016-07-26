<?php

$args = array(
  'post_type' => 'front_page',
  'post_status' => 'publish',
);
$query = new WP_Query( $args );

if ( $query->have_posts() ) :
  while ( $query->have_posts() ) :
    $query->the_post();

    ?>
