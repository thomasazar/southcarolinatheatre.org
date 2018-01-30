<?php use function DesignByThomasAzar\Functions\get_menu; ?>

<header class="banner">
    <section class="mobile-only mobile-menu">
      <?php $svg  = get_template_directory_uri() . '/dist/images/logo-side-text.svg'; ?>
      <a class="logo__link mobile-menu__logo" href="<?= esc_url(home_url('/')); ?>">
        <img class="logo" src="<?= $svg; ?>" alt="SCTA" description="SCTA logo">
      </a>
      <a class="mobile-menu__button">Menu</a>
    </section>
    <section class="banner__menus">
      <?php get_menu('primary', 'nav-menu nav-primary'); ?>
      <?php get_menu('secondary', 'nav-menu nav-secondary'); ?>
    </section>
  <?php if (is_front_page()) : ?>
    <section class="tagline">
      <h1><?= bloginfo('description'); ?></h1>
      <p>SCTA's vision is to transform the lives of all South Carolinians through theatre</p>
    </section>
  <?php endif; ?>
</header>
