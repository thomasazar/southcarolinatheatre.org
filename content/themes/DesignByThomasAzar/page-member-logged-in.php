<?php

if ( !is_user_logged_in() ) :
	auth_redirect();
else:
get_header();
?>
<body>
	<header class='header'>
		<?php get_template_part( 'page-header' ); ?>
		<?php get_template_part( 'nav' ); ?>
	</header>
	<main class='container'>
		<article class='post container'>
			<?php while ( have_posts() ) : the_post(); ?>
			<h1 class='post__title'>Welcome, <?php echo $current_user->first_name; ?>!</h1>
			<section class='post__content'>
				<?php
				$child_pages = get_pages( array( 'parent' => $post->ID, 'sort_column' => 'menu_order' ) );
				if ( $child_pages ){
					$output = '<div class=\'download\'>';
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
<?php endif; ?>
