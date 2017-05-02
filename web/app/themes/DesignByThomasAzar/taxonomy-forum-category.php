<?php $today = date('Ymd'); ?>
<article class="post">
    <h1 class="post__title">
        <p class="breadcrumb">
            <a class="breadcrumb__parent" href="<?= esc_url(get_post_type_archive_link('forum-post')); ?>">Forums</a> »
        </p>
        <?php single_cat_title(); ?>
    </h1>
    <section class="post__content">
        <?php while (have_posts()) : the_post(); ?>
            <?php if (get_field('expires') > $today) : ?>
                <a class="forum-post" href="<?php the_permalink(); ?>">
                    <?php the_title(); ?> <em>posted by <?php the_author(); ?> on <?php the_date(); ?></em>
                </a>
            <?php endif; ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <p style="text-align: center; margin-top: 2rem;">
            <a class="download-item" href="<?= admin_url('post-new.php?post_type=forum-post'); ?>">Submit new post</a>
        </p>
    </section>
</article>
