
<?php
/**
 * Default template for displaying content.
 *
 * @package NordicLiving
 */

get_header();
?>

<main class="site-content">
    <h1><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h1>
    <p><?php echo esc_html( get_bloginfo( 'description' ) ); ?></p>
</main>

<?php
get_footer();
?>
