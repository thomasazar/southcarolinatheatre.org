<article class="post">
  <h1 class="post__title">Divisions</h1>
  <section class="post__content">
    <div class="categories">
      <?php $thequery = new WP_Query(['post_type' => 'divisions']); ?>
      <?php if ($thequery->have_posts()) : ?>
        <?php while ($thequery->have_posts()) : $thequery->the_post(); ?>
          <a class="category" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          <?php wp_reset_postdata(); ?>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </section>
</article>
