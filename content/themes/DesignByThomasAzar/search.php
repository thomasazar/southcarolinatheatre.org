<?php get_header(); ?>
<body>
	<header class='header'>
		<?php get_template_part( 'page-header' ); ?>
		<?php get_template_part( 'nav' ); ?>
	</header>
	<main class='container home grid' data-masonry='{ "itemSelector": ".post" }'>
		<?php while (have_posts()) : the_post(); ?>
			<article class='post container' style='float: none;'>
				<h1 class='post-title'>
					<a href='<?php get_permalink(); ?>'>
						<?php the_title(); ?>
					</a>
				</h1>
				<a class='search-result' href='<?php get_permalink(); ?>'>
					<?php the_excerpt(); ?>
				</a>
		    </article>
		<?php endwhile; ?>
	</main>
	<?php get_footer('search'); ?>
</body>
</html>
