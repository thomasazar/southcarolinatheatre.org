<?php while (have_posts()) : the_post(); ?>
  <article class="post">
    <h1 class="post__title"><?php the_title(); ?></h1>
    <section class="post__content">
      <?php the_content(); ?>
    </section>
  </article>
<?php endwhile; ?>
