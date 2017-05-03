<article class="post">
    <?php if (!is_user_logged_in()) : ?>
        <h1 class="post__title">You're Not Logged In!</h1>
        <section class="post__content">
            <p>To view this content, you must first login.</p>
        </section>
    <?php else : ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('templates/page', 'header'); ?>
            <section class="post__content">
                <?php the_field('description'); ?>
                <section class="post__contact">
                    <h3>Contact Information:</h3>
                    <p><?php the_author(); ?></p>
                    <p><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></p>
                </section>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>
</article>
