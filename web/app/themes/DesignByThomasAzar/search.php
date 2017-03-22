<article class="post">
  <?php get_template_part('templates/page', 'header'); ?>
  <section class="post__content">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/content', 'search'); ?>
      <?php endwhile; ?>
      <?php the_posts_pagination(['screen_reader_text' => 'Search Results']); ?>
    <?php else : ?>
      <p>Sorry, no results were found.</p>
      <?php get_search_form(); ?>
    <?php endif; ?>
  </section>
</article>
