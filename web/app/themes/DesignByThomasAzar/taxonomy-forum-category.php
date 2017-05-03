<article class="post">
    <?php if (!is_user_logged_in()) : ?>
        <h1 class="post__title">You're Not Logged In!</h1>
        <section class="post__content">
            <p>To view this content, you must first login.</p>
        </section>
    <?php else : ?>
        <?php $today = date('Ymd'); ?>
        <h1 class="post__title">
            <p class="breadcrumb">
                <a class="breadcrumb__parent" href="<?= esc_url(get_post_type_archive_link('forum-post')); ?>">Forums</a> »
            </p>
            <?php single_cat_title(); ?>
        </h1>
        <section class="post__content">
            <?php while (have_posts()) : the_post(); ?>
                <?php if (get_field('expires') > $today) : ?>
                    <?php
                    if (get_field('subcategory') && (get_field('forum') != 'Jobs')) {
                        $subcategory = '<strong>' . get_field('subcategory') . ':</strong> ';
                    } else {
                        $subcategory = '';
                    }
                    ?>
                    <a class="forum-post" href="<?php the_permalink(); ?>">
                        <?= $subcategory; ?><?php the_title(); ?> <em>posted by <?php the_author(); ?> on <?php the_date(); ?></em>
                    </a>
                <?php endif; ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <p style="text-align: center; margin-top: 2rem;">
                <a class="download-item" href="<?= admin_url('post-new.php?post_type=forum-post'); ?>">Submit new post</a>
            </p>
        </section>
    <?php endif; ?>
</article>
