<?php get_header(); ?>
<body>
	<header class='header'>
		<?php get_template_part( 'page-header' ); ?>
		<?php get_template_part( 'nav' ); ?>
	</header>
	<main class='container'>
		<article class='post container' style='float: none;'>
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
