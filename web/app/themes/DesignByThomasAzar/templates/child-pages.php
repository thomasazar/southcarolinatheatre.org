<?php global $post; ?>
<?php $the_query = new WP_Query(['post_parent' => $post->ID, 'orderby' => 'title', 'order' => 'ASC', 'post_type' => 'page', ]); ?>
<?php if ($the_query->have_posts()) : ?>
  <div class="categories">
    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
      <a href="<?= get_permalink(); ?>" class='category'><?php the_title(); ?></a>
      <?php wp_reset_postdata(); ?>
    <?php endwhile;?>
  </div>
<?php endif; ?>
