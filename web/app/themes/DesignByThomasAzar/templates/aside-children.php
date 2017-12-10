<?php
$args = [
  'post_type'   => 'any',
  'post_parent' => $post->ID,
  'post_status' => 'publish',
  'order'       => 'ASC',
  'orderby'     => 'menu_order',
];
$children = new WP_Query($args);
?>

<?php if ($children->have_posts()) : ?>
  <?php while ($children->have_posts()) : $children->the_post(); ?>
    <li class="aside-list__item">
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </li>
  <?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata();
