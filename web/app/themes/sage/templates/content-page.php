<article class='post'>
  <?php get_template_part('templates/page', 'header'); ?>
  <section class='post__content'>
    <?php get_template_part('templates/child-pages'); ?>
    <?php the_content(); ?>
  </section>
</article>