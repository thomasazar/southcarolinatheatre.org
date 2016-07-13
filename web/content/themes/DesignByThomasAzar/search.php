<?php get_header(); ?>

<body>
	<header class='header'>

		<?php get_template_part( 'views/header' ); ?>
		<?php get_template_part( 'views/nav' ); ?>

	</header>
	<main class='container'>
		<article class='post'>
			<h1 class='post__title'>Search Results</h1>

			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'views/content', 'search' ); ?>
				<?php endwhile; ?>
			<?php endif;?>

		</article>
	</main>

	<?php get_footer(); ?>

</body>
</html>
