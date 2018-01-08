<?php while (have_posts()) : the_post()?>
  <aside class="aside"></aside>
  <section class="content">
    <?php the_content(); ?>
  </section>
<?php endwhile;
