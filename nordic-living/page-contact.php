<?php
/**
 * Template Name: Kontakt
 * Description: Sidmall för kontaktformuläret.
 *
 * @package NordicLiving
 */

get_header();
?>

<main class="contact-page">
	<?php
	// Display the page title and contact form content.
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
