<?php get_header(); ?>
<body>
	<header class='header'>
		<?php get_template_part( 'page-header' ); ?>
		<?php get_template_part( 'nav' ); ?>
	</header>
	<main class='container'>
		<article class='post container'>
			<?php while ( have_posts() ) : the_post(); ?>
			<h1 class='post-title'><?php the_title(); ?></h1>
            <aside class='aside'>
                <?php // Get any uploads for division
				$files = rwmb_meta( 'scta_uploads', 'type=file' );
				foreach ( $files as $info ) {
					echo "<a class='download-item' href='{$info['url']}' title='{$info['title']}'>{$info['title']}</a>";
				}
				$contact_name  = rwmb_meta( 'scta_division-chair-name' );
				$contact_email = rwmb_meta( 'scta_division-chair-email' );
				$contact_phone = rwmb_meta( 'scta_division-chair-phone' );
                if ( $contact_name ): ?>
                    <h3 class='aside-title'>Division Chair</h3>
                    <p><?php echo $contact_name; ?></p>
                    <p><a href='mailto:<?php echo $contact_email;?>'><?php echo $contact_email; ?></a></p>
                    <p><?php foreach ( $contact_phone as $phone ) { echo "<p>$phone</p>"; } ?></p>
                <?php endif; ?>
				</aside>
			<section class='post__content'>
				<?php the_content(); ?>
			</section>
			<?php endwhile; ?>
		</article>
	</main>
	<?php get_footer(); ?>
</body>
</html>
