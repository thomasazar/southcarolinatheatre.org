<?php get_header(); ?>
<body>
	<header class='header'>
		<?php get_template_part( 'page-header' ); ?>
		<?php get_template_part( 'nav' ); ?>
	</header>
	<main class='container'>
		<article class='post container' style='float: none;'>
			<h1 class='post__title'>Search Results</h1>
			<?php get_template_part( 'models/loop' ); ?>
			<?php get_template_part( 'views/content', 'search' ); ?>
			<?php get_template_part( 'models/endloop', 'search' ); ?>
		</article>
	</main>
	<?php get_footer(); ?>
</body>
</html>
