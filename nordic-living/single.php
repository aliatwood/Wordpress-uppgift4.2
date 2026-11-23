
<?php
/**
 * Template for displaying individual blog posts.
 *
 * @package NordicLiving
 */

get_header();
?>

<main class="single-post">
    <?php
    // Display the full content of the current post.
    while ( have_posts() ) :
        the_post();
        ?>
        <article>
            <h1><?php echo esc_html( get_the_title() ); ?></h1>

            <p>
                <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
                    <?php echo esc_html( get_the_date() ); ?>
                </time>
            </p>

            <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'large' ); ?>
            <?php endif; ?>

            <div class="post-content">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; ?>
</main>

<?php
get_footer();
?>
