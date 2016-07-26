<?php use Roots\Sage\Titles; ?>

<article class="post">
  <h1 class="post__title"><?= Titles\title(); ?></h1>
  <?php woocommerce_content(); ?>
</article>
