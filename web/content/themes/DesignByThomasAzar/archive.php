<?php get_header(); ?>
<body>
	<header class='header'>
		<?php get_template_part( 'page-header' ); ?>
		<?php get_template_part( 'nav' ); ?>
	</header>
	<main class='container'>
		<article class='post'>
			<section class='post__content'>
				<?php

				$defaults = array( 'theme_location' => 'header-menu', 'level' => 2, 'child_of' => $post->ID, );

				wp_nav_menu( $defaults );

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
	</main>
	<?php get_footer(); ?>
</body>
</html>
