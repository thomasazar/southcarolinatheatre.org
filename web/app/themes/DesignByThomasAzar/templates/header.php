<?php use function DesignByThomasAzar\Functions\get_menu; ?>

<header class="banner">
  <nav class="banner__nav">
    <?php get_menu('secondary', 'nav-menu nav-menu--secondary'); ?>
    <?php get_menu('primary', 'nav-menu nav-menu--primary'); ?>
    <?php if (is_front_page()) : ?>
      <section class="tagline">
        <h1><?= bloginfo('description'); ?></h1>
        <p>SCTA's vision is to transform the lives<br>of all South Carolinians through theatre</p>
      </section>
    <?php endif; ?>
  </nav>
</header>
