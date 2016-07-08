<?php get_header(); ?>
<body>
  <header class='header'>
    <?php get_template_part( 'views/header' ); ?>
    <?php get_template_part( 'views/nav' ); ?>
  </header>
  <?php get_template_part( 'views/hero' ); ?>
  <main class='container'>
    <?php get_template_part( 'models/loop', 'front-page' ); ?>
    <?php get_template_part( 'views/content', 'half' ); ?>
    <?php get_template_part( 'models/endloop' ); ?>
  </main>
  <?php get_footer(); ?>
</body>
</html>
