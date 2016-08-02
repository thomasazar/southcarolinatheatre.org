<?php while (have_posts()) : the_post(); ?>
  <article class="post">
    <?php get_template_part('templates/page', 'header'); ?>
    <section class="post__content">
      <?php the_content(); ?>
    </section>
  </article>
<?php endwhile; ?>
