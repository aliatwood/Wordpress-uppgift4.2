<?php get_header(); ?>

<main class="home-page">
    <section class="hero">
        <h1>Välkommen till Nordic Living</h1>
        <p>Skandinavisk design för ett harmoniskt hem.</p>
    </section>

    <section class="latest-news">
        <h2>Senaste nyheterna</h2>

        <?php
        $news = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 3,
        ));

        if ($news->have_posts()) :
            while ($news->have_posts()) :
                $news->the_post();
        ?>
                <article>
                    <h3>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h3>
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
    </section>
</main>

<?php get_footer(); ?>