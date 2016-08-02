<?php get_header(); ?>
<body>
  <header class='header'>
    <?php get_template_part( 'views/header' ); ?>
    <?php get_template_part( 'views/nav' ); ?>
  </header>
  <?php get_template_part( 'views/hero' ); ?>
  <main class='container'>
    <?php
    $args = array(
      'post_type' => 'front_page',
      'post_status' => 'publish',
    );
    $query = new WP_Query( $args );
    if ( $query->have_posts() ) :
      while ( $query->have_posts() ) : $query->the_post(); ?>
        <?php get_template_part( 'views/content', 'half' ); ?>
      <?php endwhile; ?>
    <?php endif;?>
  </main>
  <?php get_footer(); ?>
</body>
</html>
