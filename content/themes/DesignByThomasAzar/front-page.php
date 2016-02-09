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
	<main class='container home'>
		<article class='content post'>
			<h1 class='post-title'>Latest News &amp; Updates</h1>
			<section class='post__content'>
				<h1>Mark Your Calendars</h1>
				<h2>May 14, 2016</h2>
				<img src='/img/gala.jpg' />
			</section>
		</article>
		<article class='content post'>
			<h1 class='post-title'>Thank You!</h1>
			<section class='post__content'>
				<img src='/img/scta-convention-2015.jpg' />
				<h1>Thank you to everyone who participated!</h1>
				<img src='/img/scta-convention-2015-keynotes.jpg' />
				<h2>Congratulations to</h2>
				<p>Wild Hare Productions<br/>SETC Community Theatre State Selection</p>
 				<p>Blythewood High School &amp; Sumter High School<br/>SETC Secondary Festival State Selections</p>
			</section>
		</article>
	</main>
	<?php get_footer(); ?>
</body>
</html>
