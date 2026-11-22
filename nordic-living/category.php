<?php get_header(); ?>

<main class="category-page">
    <h1><?php single_cat_title(); ?></h1>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article>
                <h2>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>

                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>">Läs mer</a>
            </article>
        <?php endwhile; ?>

        <?php the_posts_pagination(); ?>
    <?php else : ?>
        <p>Inga inlägg hittades.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>