<?php use function DesignByThomasAzar\Functions\get_menu; ?>
<?php $hero = get_field('hero'); ?>
<?php $background = $hero['image']['sizes']['large']; ?>

<header class="banner" style="background-image: linear-gradient(to bottom, rgba(0,103,140,0.75) 0%, rgba(61,170,213,0.5) 100%), url('<?= $background; ?>');">
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
  <section class="tagline">
    <h1><?= bloginfo('description'); ?></h1>
    <p>SCTA's vision is to transform the lives of all South Carolinians through theatre</p>
  </section>
  <?php if ($hero['link_text']) : ?>
    <section class="photo-credit">
      <a class="photo-credit__link" href="<?= $hero['image']['sizes']['large']; ?>" data-caption="<?= $hero['caption']; ?>">
        <?= $hero['link_text']; ?>
      </a>
    </section>
  <?php endif; ?>
</header>