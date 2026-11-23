
<?php
/**
 * Template for displaying the homepage.
 *
 * @package NordicLiving
 */

get_header();
?>

<main class="home-page">
    <section class="hero">
        <h1>Välkommen till Nordic Living</h1>
        <p>Skandinavisk design för ett harmoniskt hem.</p>

        <img
            src="<?php echo esc_url('https://nordicliving.infinityfree.me/wp-content/uploads/2026/11/start-1.avif'); ?>"
            alt="Skandinaviskt vardagsrum med naturliga material"
        >
    </section>

    <section class="latest-news">
        <h2>Senaste nyheterna</h2>

        <?php
        // Retrieve the three latest news posts.
        $news = new WP_Query(
            array(
                'post_type'      => 'post',
                'posts_per_page' => 3,
            )
        );

        if ($news->have_posts()) :
            while ($news->have_posts()) :
                $news->the_post();
                ?>
                <article>
                    <h3>
                        <a href="<?php echo esc_url(get_permalink()); ?>">
                            <?php echo esc_html(get_the_title()); ?>
                        </a>
                    </h3>

                    <?php the_excerpt(); ?>

                    <a href="<?php echo esc_url(get_permalink()); ?>">
                        Läs mer
                    </a>
                </article>
                <?php
            endwhile;

            // Restore the original post query.
            wp_reset_postdata();
        else :
            ?>
            <p>Inga nyheter ännu.</p>
            <?php
        endif;
        ?>
    </section>
</main>

<?php
get_footer();
?>
