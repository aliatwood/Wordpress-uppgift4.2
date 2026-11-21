<?php get_header(); ?>

<main class="single-post">
    <?php
    while (have_posts()) :
        the_post();
    ?>
        <article>
            <h1><?php the_title(); ?></h1>

            <p><?php echo get_the_date(); ?></p>

            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('large'); ?>
            <?php endif; ?>

            <div class="post-content">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>