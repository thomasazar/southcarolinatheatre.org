<article class="post">
    <h1 class="post__title">Forums</h1>
    <section class="post__content">
        <?php $categories = get_categories(['taxonomy' => 'forum-category']); ?>
        <div class="categories">
            <?php foreach ($categories as $category) : ?>
                <a class="category" href="<?= esc_url(get_category_link($category->term_id)); ?>"><?= $category->name; ?></a>
            <?php endforeach; ?>
        </div>
    </section>
</article>
