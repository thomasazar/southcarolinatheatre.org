<?php get_header(); ?>
<body>
	<header class='header'>
		<?php get_template_part( 'page-header' ); ?>
		<?php get_template_part( 'nav' ); ?>
	</header>
	<main class='container'>
		<article class='post container'>
			<?php while ( have_posts() ) : the_post(); ?>
			<section class='post__content'>
				<?php
				if ( is_user_logged_in() ) : ?>
          <div class='categories'>
            <a href='/member-login/my-information' class='category'>My Information</a>
          </div>
				<?php endif; ?>
				<?php the_content(); ?>
			</section>
			<?php endwhile; ?>
		</article>
	</main>
	<?php get_footer(); ?>
</body>
</html>
