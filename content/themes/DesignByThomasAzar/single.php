<?php get_header(); ?>
<body>
	<header class='header'>
		<?php get_template_part( 'page-header' ); ?>
		<?php get_template_part( 'nav' ); ?>
	</header>
	<main class='container'>
		<article class='content post'>
			<?php while ( have_posts() ) : the_post(); ?>
			<h1 class='post-title'><?php the_title(); ?></h1>
			<section class='post__content'>
				<div class='download'>
					<?php
					$files = rwmb_meta( 'scta_cv', 'type=file' );
					foreach ( $files as $info ) {
						echo "<a class='button download-item' href='{$info['url']}' title='{$info['title']}'>{$info['title']}</a>";
					}
					?>
				</div>
				<?php the_content(); ?>
			</section>
			<?php endwhile; ?>
		</article>
	</main>
	<?php get_footer(); ?>
</body>
</html>
