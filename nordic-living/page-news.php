<?php
/*
Template Name: Nyheter
*/

get_header();
?>

<main class="news-archive">
    <h1><?php the_title(); ?></h1>

    <?php
    $news = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 10,
    ));

    if ($news->have_posts()) :
        while ($news->have_posts()) :
            $news->the_post();
    ?>
            <article class="news-item">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('medium'); ?>
                <?php endif; ?>

                <h2>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>

                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>">Läs mer</a>
            </article>
    <?php
        endwhile;
        wp_reset_postdata();
    else :
        echo '<p>Inga nyheter ännu.</p>';
    endif;
    ?>
</main>

<?php get_footer(); ?>