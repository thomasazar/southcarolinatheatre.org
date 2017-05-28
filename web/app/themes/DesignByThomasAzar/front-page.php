<?php $boxes = ['first_box', 'second_box']; ?>
<?php foreach ($boxes as $box) : ?>
    <article class="post half">
        <section class="post__content">
            <?php the_field($box); ?>
        </section>
    </article>
<?php endforeach;
