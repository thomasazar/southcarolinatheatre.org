<?php get_template_part('templates/page', 'header'); ?>
<aside class="aside">
  <?php get_template_part('templates/page', 'attachments'); ?>
  <?php get_template_part('templates/page', 'children'); ?>
</aside>
<section class="content">
  <?php the_content(); ?>
</section>
