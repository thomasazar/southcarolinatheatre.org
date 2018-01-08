<?php $show_only = ['convention', 'divisions', 'events', 'page' ]; ?>
<aside class="aside">
  <?php if (in_array(get_post_type(), $show_only)) : ?>
    <?php get_template_part('templates/aside', 'attachments'); ?>
    <?php get_template_part('templates/aside', 'children'); ?>
    <?php get_template_part('templates/aside', 'links'); ?>
  <?php endif; ?>
</aside>
