<?php
get_header();
$args = array(
    'category_name' => 'home-page',
    'post_status' => 'publish',
);
$query = new WP_Query( $args );
?>
<body>
    <header class='header'>
        <?php get_template_part( 'page-header' ); ?>
        <?php get_template_part( 'nav' ); ?>
    </header>
    <article class='hero'>
      <?php
      $args = array(
      	'numberposts' => 1,
      	'post_type' => 'scta_hero',
      	'post_status' => 'publish',
      	'orderby' => 'menu_order',
      	'order' => 'ASC',
      );

      $heroes = get_posts( $args );

      foreach ( $heroes as $hero ) {
        $hero_text  = $hero->scta_hero_text;
        $hero_text  = apply_filters( 'the_content', $hero_text );
        $hero_image = $hero->scta_hero_image;
        $hero_image = rwmb_meta( 'scta_hero_image', 'type=image&size=large', $post_id = $hero->ID );
        $hero_image = array_values( $hero_image );
      }
      ?>

      <div class='container'>
        <section class='hero__text'>
          <h2 class='hero__headline'><?php echo $hero_text; ?></h2>
        </section>
        <section class='hero__focus'>
          <img class='hero__img' src='<?php echo $hero_image[0]['url'];?>' />
        </section>
      </div>
    </article>
    <main class='container'>
    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
        <article class='post half'>
            <h1 class='post__title'><?php the_title(); ?></h1>
            <section class='post__content'>
                <?php the_content(); ?>
            </section>
        </article>
        <?php wp_reset_postdata(); endwhile; endif; ?>
    </main>
    <?php get_footer(); ?>
</body>
</html>
