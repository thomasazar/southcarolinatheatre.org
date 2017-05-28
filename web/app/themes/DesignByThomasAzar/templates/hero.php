<?php $image = get_field('image'); ?>
<article class="hero">
    <a class="hero__link" href="<?php the_field('link'); ?>">
        <div class="container">
            <section class="hero__text">
                <h2 class="hero__headline"><?php the_field('text'); ?></h2>
            </section>
            <section class="hero__focus">
                <img src="<?= $image['sizes']['large']; ?>" class="hero__img">
            </section>
        </div>
    </a>
</article>
