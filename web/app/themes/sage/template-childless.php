<?php
/**
 * Template Name: Childless Page
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'convention'); ?>
<?php endwhile; ?>
