<article class="post">
    <h1 class="post__title">
        <p class="breadcrumb">
            <a class="breadcrumb__parent" href="<?= esc_url(get_post_type_archive_link('forum-post')); ?>">Forums</a> »
        </p>
        <?php single_cat_title(); ?>
    </h1>
    <section class="post__content">
        <?php while (have_posts()) : the_post(); ?>
            <a class="forum-post" href="<?php the_permalink(); ?>">
                <?php the_title(); ?> <em>posted by <?php the_author(); ?> on <?php the_date(); ?></em>
            </a>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </section>
</article>
