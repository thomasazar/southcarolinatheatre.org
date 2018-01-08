<?php if (have_rows('attachments_repeater')): ?>
  <ul class="aside-list">
    <?php while (have_rows('attachments_repeater')) : the_row(); ?>
      <?php $file = get_sub_field('attachments'); ?>
      <li class="aside-list__item">
        <a href="<?= $file['url']; ?>"><?= $file['title']; ?></a>
      </li>
    <?php endwhile; ?>
  </ul>
<?php endif;
