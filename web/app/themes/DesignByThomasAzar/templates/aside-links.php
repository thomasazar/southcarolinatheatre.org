<?php if (have_rows('links')) : ?>
  <ul class="aside-list">
  <?php while (have_rows('links')) : the_row(); ?>
    <?php $post_id = get_sub_field('link', false, false); ?>
    <li class="aside-list__item">
      <a href="<?= get_the_permalink($post_id); ?>"><?= get_the_title($post_id); ?></a>
    </li>
  <?php endwhile; ?>
  </ul>
<?php endif;
