
<?php
/**
 * Template Name: Om oss
 * Description: Sidmall för företagets Om oss-sida.
 *
 * @package NordicLiving
 */

get_header();
?>

<main class="about-page">
    <?php
    // Display the page title and content.
    while ( have_posts() ) :
        the_post();
        ?>
        <h1><?php echo esc_html( get_the_title() ); ?></h1>

        <?php the_content(); ?>
    <?php endwhile; ?>
</main>

<?php
get_footer();
?>
