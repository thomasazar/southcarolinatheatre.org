<article class="post">
<?php if (!is_user_logged_in()) : ?>
    <h1 class="post__title">You're Not Logged In!</h1>
    <section class="post__content">
        <p>To view this content, you must first login.</p>
    </section>
<?php else : ?>
    <h1 class="post__title">Forums</h1>
    <section class="post__content">
        <?php $categories = get_categories(['taxonomy' => 'forum-category']); ?>
        <div class="categories">
            <?php foreach ($categories as $category) : ?>
                <a class="category" href="<?= esc_url(get_category_link($category->term_id)); ?>"><?= $category->name; ?></a>
            <?php endforeach; ?>
        </div>
        <p style="text-align: center;">
            <a class="download-item" href="<?= admin_url('post-new.php?post_type=forum-post'); ?>">Submit new post</a>
        </p>
    </section>
<?php endif; ?>
</article>
