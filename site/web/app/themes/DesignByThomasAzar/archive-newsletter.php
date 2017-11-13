<?php

$lastpost  = strtotime(get_lastpostdate());
$lastmonth = date('m', $lastpost);
$lastyear  = date('Y', $lastpost);
$count     = 1;

$args = [
    'post_type'      => 'newsletter',
    'post_status'    => 'publish',
    'year'           => $lastyear,
    'monthnum'       => $lastmonth,
    'order'          => 'ASC',
    'posts_per_page' => -1,
];

$the_query = new WP_Query($args);

?>

<article class="post">
    <h1 class="post__title">
        <p class="breadcrumb">
            <a class="breadcrumb__parent" href="https://southcarolinatheatre.org/about-scta">About SCTA</a>  »
        </p>
        SC Curtain Call
    </h1>
    <h2 style="text-align: center;"><?= date('F', $lastpost) . ', ' . $lastyear; ?></h2>
    <section class="post__content">
        <p>In this issue...</p>
        <ul>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <li><a href="#article_<?= $count++; ?>"><?php the_title(); ?></a></li>
            <?php endwhile; ?>
            <?php $count = 1; ?>
        </ul>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <h3 id="article_<?= $count++; ?>"><?php the_title(); ?></h3>
            <?php the_content(); ?>
        <?php endwhile; ?>
    </section>
</article>
