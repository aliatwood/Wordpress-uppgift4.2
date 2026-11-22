<?php get_header(); ?>

<main class="search-page">
    <h1>Sökresultat för: <?php echo esc_html(get_search_query()); ?></h1>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article>
                <h2>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>
                <?php the_excerpt(); ?>
            </article>
        <?php endwhile; ?>

        <?php the_posts_pagination(); ?>
    <?php else : ?>
        <p>Inga resultat hittades.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>