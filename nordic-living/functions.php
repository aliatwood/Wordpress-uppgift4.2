<?php
/**
 * Theme functions and definitions.
 *
 * @package NordicLiving
 */

/**
 * Set up theme features and navigation menus.
 */
function nordic_living_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo' );

	register_nav_menus(
		array(
			'primary' => 'Huvudmeny',
		)
	);
}
add_action( 'after_setup_theme', 'nordic_living_setup' );

/**
 * Enqueue the theme stylesheet.
 */
function nordic_living_styles() {
	wp_enqueue_style(
		'nordic-living-style',
		get_template_directory_uri() . '/assets/css/main.css',
		array(),
		'1.0'
	);
}
add_action( 'wp_enqueue_scripts', 'nordic_living_styles' );

/**
 * Register the footer widget area.
 */
function nordic_living_widgets() {
	register_sidebar(
		array(
			'name'          => 'Sidfot',
			'id'            => 'footer-widgets',
			'before_widget' => '<div class="footer-widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'nordic_living_widgets' );

/**
 * Require a message in the contact form.
 *
 * @param int   $field_id     The field ID.
 * @param mixed $field_submit The submitted field value.
 * @param array $form_data    The form data.
 */
function nordic_living_require_message( $field_id, $field_submit, $form_data ) {
	if ( absint( $form_data['id'] ) !== 45 ) {
		return;
	}

	$value = is_array( $field_submit )
		? implode( '', array_map( 'strval', $field_submit ) )
		: (string) $field_submit;

	if ( '' === trim( $value ) ) {
		wpforms()->process->errors[ $form_data['id'] ][ $field_id ] =
			'This field is required.';
	}
}
add_action(
	'wpforms_process_validate_textarea',
	'nordic_living_require_message',
	10,
	3
);
