<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <aside class="aside">
    <ul class="aside-list">
      <?php if ($post->post_type == 'divisions') { get_template_part('templates/division', 'links'); } ?>
      <?php get_template_part('templates/page', 'attachments'); ?>
      <?php get_template_part('templates/archive', 'pages'); ?>
    </ul>
  </aside>
  <section class="content">
    <?php the_content(); ?>
  </section>
<?php endwhile;
