
<?php
/**
 * Template Name: Nyheter
 * Description: Sidmall som visar webbplatsens senaste nyheter.
 *
 * @package NordicLiving
 */

get_header();
?>

<main class="news-archive">
    <?php
    // Display the page title.
    while ( have_posts() ) :
        the_post();
        ?>
        <h1><?php echo esc_html( get_the_title() ); ?></h1>
    <?php endwhile; ?>

    <?php
    // Retrieve the ten latest news posts.
    $news = new WP_Query(
        array(
            'post_type'      => 'post',
            'posts_per_page' => 10,
        )
    );

    if ( $news->have_posts() ) :
        while ( $news->have_posts() ) :
            $news->the_post();
            ?>
            <article class="news-item">
                <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail( 'medium' ); ?>
                <?php endif; ?>

                <h2>
                    <a href="<?php echo esc_url( get_permalink() ); ?>">
                        <?php echo esc_html( get_the_title() ); ?>
                    </a>
                </h2>

                <?php the_excerpt(); ?>

                <a href="<?php echo esc_url( get_permalink() ); ?>">
                    Läs mer
                </a>
            </article>
            <?php
        endwhile;

        // Restore the original page query.
        wp_reset_postdata();
    else :
        ?>
        <p>Inga nyheter ännu.</p>
        <?php
    endif;
    ?>
</main>

<?php
get_footer();
?>
