<?php get_header(); ?>

<body>
	<header class='header'>

		<?php get_template_part( 'views/header' ); ?>
		<?php get_template_part( 'views/nav' ); ?>

	</header>
	<main class='container'>
		<article class='post'>

			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<h1 class='post__title'><?php the_title(); ?></h1>

					<?php if( is_user_logged_in() ) : ?>
						<?php if( $post->post_author == get_current_user_id() ) : ?>

							<h4 class='edit-this-page'><?php edit_post_link( 'Edit this page' ); ?></h4>

						<?php endif; ?>
					<?php endif; ?>
					<?php get_template_part( 'views/aside' ); ?>

					<section class='post__content'>

						<?php get_template_part( 'views/children' ); ?>
						<?php the_content(); ?>

					</section>

				<?php endwhile; ?>
			<?php endif;?>

		</article>
	</main>

	<?php get_footer(); ?>
</body>
</html>
