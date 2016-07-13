<?php get_header(); ?>
<body>
	<header class='header'>
		<?php get_template_part( 'views/header' ); ?>
		<?php get_template_part( 'views/nav' ); ?>
	</header>
	<main class='container'>
		<article class='post container'>
			<?php while ( have_posts() ) : the_post(); ?>
			<section class='post__content'>
				<?php
				if ( $current_user->user_firstname ) {
					$greeting = 'Welcome, ' . $current_user->user_firstname . '!';
				} else {
					$greeting = 'Welcome!';
				}
				?>
				<h1 class='post__title'><?= $greeting; ?></h1>
				<?php
				if ( is_user_logged_in() ) :
          get_template_part( 'views/children' );
				endif; ?>
				<?php the_content(); ?>
			</section>
			<?php endwhile; ?>
		</article>
	</main>
	<?php get_footer(); ?>
</body>
</html>
