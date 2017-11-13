<?php $aside_uploads = rwmb_meta( 'scta_aside-uploads', 'type=file' ); ?>
<?php $aside_content = rwmb_meta( 'scta_aside-content'); ?>

<?php if ($aside_uploads or $aside_content){ ?>
  <aside class="aside">
  <?php foreach ( $aside_uploads as $file ) { ?>
    <a class="download-item" href="<?= $file['url']; ?>" title=<?= $file['title']; ?>><?= $file['title']; ?></a>
  <?php } ?>
  <?= apply_filters( 'the_content', $aside_content ); ?>
  </aside>
<?php } ?>
