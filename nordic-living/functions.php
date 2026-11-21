<?php

function nordic_living_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');

    register_nav_menus(array(
        'primary' => 'Huvudmeny',
    ));
}
add_action('after_setup_theme', 'nordic_living_setup');

function nordic_living_styles() {
    wp_enqueue_style(
        'nordic-living-style',
        get_stylesheet_uri(),
        array(),
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'nordic_living_styles');