<?php $thequery = new WP_Query( [ 'post_type' => 'scta_frontpage', 'posts_per_page' => 2, ] ); ?>
<?php if( $thequery->have_posts() ) : ?>
  <?php while( $thequery-> have_posts() ) : $thequery->the_post(); ?>
    <article class='post half'>
      <h1 class='post__title'><?php the_title(); ?></h1>
      <section class='post__content'>
        <?php the_content(); ?>
      </section>
    </article>
    <?php wp_reset_postdata(); ?>
  <?php endwhile; ?>
<?php endif;?>
