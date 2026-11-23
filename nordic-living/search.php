<?php
/**
 * Template for displaying search results.
 *
 * @package NordicLiving
 */

get_header();
?>

<main class="search-page">
	<h1>
		Sökresultat för:
		<?php echo esc_html( get_search_query() ); ?>
	</h1>

	<?php if ( have_posts() ) : ?>
		<?php
		// Display each matching search result.
		while ( have_posts() ) :
			the_post();
			?>
			<article>
				<h2>
					<a href="<?php echo esc_url( get_permalink() ); ?>">
						<?php echo esc_html( get_the_title() ); ?>
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

<?php
get_footer();
?>
