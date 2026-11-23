<?php
/**
 * Template for displaying post archives.
 *
 * @package NordicLiving
 */

get_header();
?>

<main class="news-archive">
	<h1>Nyheter</h1>

	<?php if ( have_posts() ) : ?>
		<?php
		// Display each post in the archive.
		while ( have_posts() ) :
			the_post();
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

				<a href="<?php echo esc_url( get_permalink() ); ?>">Läs mer</a>
			</article>
		<?php endwhile; ?>

		<?php the_posts_pagination(); ?>
	<?php else : ?>
		<p>Inga nyheter ännu.</p>
	<?php endif; ?>
</main>

<?php
get_footer();
?>
