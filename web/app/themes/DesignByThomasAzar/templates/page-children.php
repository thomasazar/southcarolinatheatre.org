<?php
$args = [
  'post_type'   => 'page',
  'post_parent' => $post->ID,
  'post_status' => 'publish',
  'order'       => 'ASC',
  'orderby'     => 'menu_order',
];
$children = new WP_Query($args);

while ($children->have_posts()) : $children->the_post(); ?>
  <li class="aside-list__item">
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </li>
<?php endwhile;
wp_reset_postdata();
