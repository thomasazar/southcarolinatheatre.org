<?php get_template_part('templates/page', 'header'); ?>
<aside class="aside">
  <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/news', 'posts'); ?>
  <?php endwhile; ?>
</aside>
<section class="content">
  Check out the latest news from the South Carolina Theatre Association!
</section>
