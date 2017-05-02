<article class="post">
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
</article>
