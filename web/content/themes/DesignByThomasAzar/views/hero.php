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
