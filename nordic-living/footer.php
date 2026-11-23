<?php
/**
 * The template for displaying the footer.
 *
 * @package NordicLiving
 */

?>

<footer class="site-footer">
	<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
		<div class="footer-widgets">
			<?php dynamic_sidebar( 'footer-widgets' ); ?>
		</div>
	<?php endif; ?>

	<p>
		&copy; <?php echo esc_html( wp_date( 'Y' ) ); ?>
		Nordic Living. Alla rättigheter förbehållna.
	</p>
</footer>

<?php wp_footer(); ?>
</body>
</html>
