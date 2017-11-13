<?php
  $args = [
    'posts_per_page' => 1,
    'post_type' => 'scta_hero',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC',
  ];

  $the_query = new WP_Query($args);
?>
<?php if ($the_query->have_posts()) : ?>
  <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
    <article class='hero'>
      <?php $hero__link = rwmb_meta($field_id = 'scta_link-address', $post_id = $the_query->ID); ?>
      <a class="hero__link" href="<?php echo esc_url(get_permalink($hero__link)); ?>">
      <div class='container'>
        <section class='hero__text'>
          <h2 class='hero__headline'><?php the_excerpt(); ?></h2>
        </section>
        <section class='hero__focus'>
          <?php the_post_thumbnail('large', ['class' => 'hero__img',]); ?>
        </section>
      </div>
    </a>
    </article>
    <?php wp_reset_postdata(); ?>
  <?php endwhile; ?>
<?php endif;?>
