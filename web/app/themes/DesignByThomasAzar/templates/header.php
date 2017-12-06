<?php use function DesignByThomasAzar\Functions\get_menu; ?>
<?php $frontpage = get_option('page_on_front'); ?>
<?php $image = get_field('image', $frontpage); ?>
<?php $background = $image['sizes']['large']; ?>

<header class="banner" style="background-image: linear-gradient(to bottom, rgba(17,83,115,0.5) 0%,rgba(17,83,115,0.5) 100%), url('<?= $background; ?>');">
  <nav class="banner__nav">
    <?php get_menu('secondary', 'nav-menu nav-menu--secondary'); ?>
    <?php get_menu('primary', 'nav-menu nav-menu--primary'); ?>
  </nav>
  <?php if (is_front_page()) : ?>
    <section class="tagline">
      <h1><?= bloginfo('description'); ?></h1>
      <p>SCTA's vision is to transform the lives<br>of all South Carolinians through theatre</p>
    </section>
  <?php endif; ?>
</header>
