<?php while (have_posts()) : the_post(); ?>
    <article class="post">
        <?php get_template_part('templates/page', 'header'); ?>
        <section class="post__content">
            <?php the_field('description'); ?>
            <section class="post__contact">
                <h3>Contact Information:</h3>
                <p><?php the_author(); ?></p>
                <p><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></p>
            </section>
        </section>
    </article>
<?php endwhile; ?>
