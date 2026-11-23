<?php
/**
 * The template for displaying the header.
 *
 * @package NordicLiving
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo">
		Nordic Living
	</a>

	<nav class="main-navigation" aria-label="Huvudmeny">
		<?php
		// Display the primary navigation menu.
		wp_nav_menu(
			array(
				'theme_location' => 'primary',
				'container'      => false,
			)
		);
		?>
	</nav>
</header>
