<?php get_template_part('templates/page', 'header'); ?>
<aside class="aside">
  <?php if (get_post_type() != 'forum') : ?>
  <ul class="aside-list">
    <?php get_template_part('templates/aside', 'archive-children'); ?>
  </ul>
<?php endif; ?>
</aside>
<section class="content">
  <?php get_template_part('templates/content', 'archive'); ?>
</section>
