<?php
$this_post_type = $post->post_type;

if (is_post_type_archive($this_post_type)) {
  $post_parent = 0;
} else {
  $post_parent = $post->ID;
}

$exclude = get_page_by_title('General Information', $output = OBJECT, $post_type = $this_post_type);

$args = array(
  'post_type'    => $this_post_type,
  'post_parent'  => $post_parent,
  'post_status'  => 'publish',
  'post__not_in' => [$exclude->ID],
  'orderby'      => 'menu_order',
  'order'        => 'ASC',
);

$query = new WP_Query( $args );
?>
<?php while ($query->have_posts()) : ?>
  <?php $query->the_post(); ?>
  <li class="aside-list__item">
    <a href="<?php the_permalink(); ?>">
      <?php the_title(); ?>
    </a>
  </li>
<?php endwhile; ?>
<?php wp_reset_postdata();
