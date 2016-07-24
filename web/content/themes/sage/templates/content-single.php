<?php while (have_posts()) : the_post(); ?>
  <article class="post">
    <h1 class="post__title"><?php the_title(); ?></h1>
    <?php if( is_user_logged_in() && ( $post->post_author == get_current_user_id() ) ) : ?>
      <h4 class='edit-this-page'><?php edit_post_link( 'Edit this page' ); ?></h4>
    <?php endif; ?>
    <section class="post__content">
      <?php get_template_part('templates/aside'); ?>
      <?php if ( has_post_thumbnail() ) : ?>
        <section class="byline">
          <?php the_post_thumbnail('thumbnail', ['class' => 'byline__image',]); ?>
          <p class="byline__author"><?php echo get_post(get_post_thumbnail_id())->post_title; //The Title ?></p>
        </section>
      <?php endif; ?>
      <?php the_content(); ?>
    </section>
  </article>
<?php endwhile; ?>
