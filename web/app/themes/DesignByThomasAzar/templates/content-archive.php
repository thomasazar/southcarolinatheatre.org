<?php
$this_post_type = $post->post_type;

$archive = get_page_by_title('General Information', $output = OBJECT, $post_type = $this_post_type);

$args = array(
  'p'           => $archive->ID,
  'post_type'   => $this_post_type,
  'post_status' => 'publish',
);

$query = new WP_Query( $args );

while ($query->have_posts()) : $query->the_post();
  the_content();
endwhile;
