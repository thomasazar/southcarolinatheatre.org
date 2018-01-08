<?php
/**
* Template Name: My Profile
*/
?>

<?php $current_user = wp_get_current_user(); ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <aside class="aside">
    <ul class="aside-list">
      <?php get_template_part('templates/page', 'attachments'); ?>
      <?php get_template_part('templates/page', 'children'); ?>
    </ul>
  </aside>
  <section class="content">
    <?php the_content(); ?>
  </section>
<?php endwhile;
