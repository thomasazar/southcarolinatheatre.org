<?php get_header(); ?>
<body>
	<header class='header'>
		<?php get_template_part( 'page-header' ); ?>
		<?php get_template_part( 'nav' ); ?>
	</header>
	<main class='container'>
		<article class='post'>
			<?php while ( have_posts() ) : the_post(); ?>
			<h1 class='post__title'><?php the_title(); ?></h1>
            <?php echo get_scta_aside(); ?>
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
			<?php endwhile; ?>
		</article>
	</main>
	<?php get_footer(); ?>
</body>
</html>
