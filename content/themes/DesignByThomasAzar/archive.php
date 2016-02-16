<?php get_header(); ?>
<body>
	<header class='header'>
		<?php get_template_part( 'page-header' ); ?>
		<?php get_template_part( 'nav' ); ?>
	</header>
	<main class='container'>
		<article class='post container'>
			<?php
			$post_type = get_post_type();
			$obj = get_post_type_object( $post_type );
			$category_name = $obj->labels->name;
			?>
			<h1 class='post-title'><?php echo $category_name; ?></h1>
			<section class='post__content'>
				<div class='download'>
					<?php
					$args = array(
						'post_type'        => $post_type,
						'post_status'      => 'publish',
					);
					$posts_array = get_posts( $args );
					foreach ( $posts_array as $category ) {
						$href  = get_permalink($category->ID);
						$title = $category->post_title;
						echo "<a class='button category' href='$href'>$title</a></li>";
					}
					?>
				</div>
			</section>
		</article>
	</main>
	<?php get_footer(); ?>
</body>
</html>
