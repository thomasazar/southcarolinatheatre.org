<?php get_header(); ?>
<body>
	<header class='header'>
		<?php get_template_part( 'page-header' ); ?>
		<?php get_template_part( 'nav' ); ?>
	</header>
	<main class='container'>
			<article class='post container' style='float: none;'>
				<h1 class='post-title'>Search Results</h1>
				<?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
						<article class='search-result'>
							<a href='<?php echo get_permalink(); ?>'>
								<strong><?php the_title(); ?></strong>
							</a>
							<?php the_excerpt(); ?>
						</article>
				<?php endwhile; else : ?>
					<p>We couldn't find any results for <strong>'<?php echo get_search_query(); ?>'</strong>.</p>
				<?php endif; ?>
		    </article>
	</main>
	<?php get_footer('search'); ?>
</body>
</html>
