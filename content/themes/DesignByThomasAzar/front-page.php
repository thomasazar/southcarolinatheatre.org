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
		<div class='header-logo-container'>
			<img src="/img/scta-logo.jpg" />
			<p class='tagline'>Connect. Create. Cultivate.</p>
			<div id="timer">
				<p>Gilded Gala Countdown</p>
				<div class='timer__box'>
					<span class="timer__days"></span>
					<div class="timer__smalltext">Days</div>
				</div>
				<div class='timer__box'>
					<span class="timer__hours"></span>
					<div class="timer__smalltext">Hours</div>
				</div>
				<div class='timer__box'>
					<span class="timer__minutes"></span>
					<div class="timer__smalltext">Min</div>
				</div>
				<div class='timer__box'>
					<span class="timer__seconds"></span>
					<div class="timer__smalltext">Sec</div>
				</div>
			</div>
		</div>
		<?php get_template_part( 'nav' ); ?>
	</header>
	<main class='container home'>
		<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
		<article class='content post'>
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
