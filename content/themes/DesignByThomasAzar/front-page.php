<?php
get_header();
$args = array(
	'category_name' => 'home-page',
	'post_status' => 'publish',
);
$query = new WP_Query( $args );
?>
<body>
	<header class='header'>
		<?php get_template_part( 'page-header' ); ?>
		<?php get_template_part( 'nav' ); ?>
	</header>
	<main class='container home'>
		<?php get_search_form(); ?>
		<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
		<article class='post container'>
			<h1 class='post-title'><?php the_title(); ?></h1>
			<section class='post__content'>
				<?php the_content(); ?>
			</section>
		</article>
		<?php wp_reset_postdata(); endwhile; endif; ?>
	</main>
	<?php get_footer(); ?>
</body>
</html>
