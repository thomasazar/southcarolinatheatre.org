<article class='post'>
  <?php get_template_part('templates/page', 'header'); ?>
  <section class='post__content'>
    <?php
    $child_pages = get_pages( array( 'parent' => $post->ID, 'sort_column' => 'menu_order' ) );
    if ( $child_pages ){
      $output = '<div class=\'categories\'>';
      foreach ( $child_pages as $child_page ) {
        $title = $child_page->post_title;
        $href  = get_permalink( $child_page->ID );
        $output .= "<a href='$href' class='category'>$title</a>";
      }
      $output .= '</div>';
      echo $output;
    }
    ?>
    <?php the_content(); ?>
  </section>
</article>
