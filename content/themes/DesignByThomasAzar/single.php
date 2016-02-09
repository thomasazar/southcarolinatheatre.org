<?php get_header(); ?>
<body>
	<header class='header'>
		<div class='header-logo-container'>
			<img src="/img/scta-logo.jpg" />
			<p class='tagline'>Create. Connect. Cultivate.</p>
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
	<main class='container'>
		<article class='content post'>
			<?php while ( have_posts() ) : the_post(); ?>
			<h1 class='post-title'><?php the_title(); ?></h1>
			<section class='post__content'>
				<?php the_content(); ?>
			</section>
			<?php endwhile; ?>
		</article>
	</main>
	<?php get_footer(); ?>
</body>
</html>
