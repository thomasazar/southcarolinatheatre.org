<article class='post container'>
    <?php while ( have_posts() ) : the_post(); ?>
        <section class='post__content'>
            <?php
            if (is_user_logged_in()) :
                if ( $current_user->user_firstname ) {
                    $greeting = 'Welcome, ' . $current_user->user_firstname . '!';
                } else {
                    $greeting = 'Welcome!';
                }
                ?>
                <h1 class='post__title'><?= $greeting; ?></h1>
                <?php get_template_part('templates/child-pages'); ?>
                <?php if (is_user_logged_in()) : ?>
                    <div class="categories"><a class="category" href="/forum">SCTA Member Forums</a></div>
                <?php endif; ?>
            <?php endif; ?>
            <?php the_content(); ?>
        </section>
    <?php endwhile; ?>
</article>
