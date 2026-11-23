
<?php
/**
 * Template for displaying category archives.
 *
 * @package NordicLiving
 */

get_header();
?>

<main class="category-page">
    <h1><?php echo esc_html(single_cat_title('', false)); ?></h1>

    <?php if (have_posts()) : ?>
        <?php
        // Display posts belonging to the current category.
        while (have_posts()) :
            the_post();
        ?>
            <article>
                <h2>
                    <a href="<?php echo esc_url(get_permalink()); ?>">
                        <?php echo esc_html(get_the_title()); ?>
                    </a>
                </h2>

                <?php the_excerpt(); ?>

                <a href="<?php echo esc_url(get_permalink()); ?>">Läs mer</a>
            </article>
        <?php endwhile; ?>

        <?php the_posts_pagination(); ?>
    <?php else : ?>
        <p>Inga inlägg hittades.</p>
    <?php endif; ?>
</main>

<?php
get_footer();
?>
