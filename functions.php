<?php
if (!defined('ABSPATH')) exit;

function colverde_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');

    register_nav_menus([
        'primary' => __('Menu principale', 'polisportiva-colverde'),
        'footer'  => __('Menu footer', 'polisportiva-colverde'),
    ]);
}
add_action('after_setup_theme', 'colverde_setup');

function colverde_assets() {
    wp_enqueue_style('colverde-style', get_stylesheet_uri(), [], '1.0.0');
    wp_enqueue_style('colverde-main', get_template_directory_uri() . '/assets/css/main.css', ['colverde-style'], '1.0.0');
    wp_enqueue_script('colverde-main', get_template_directory_uri() . '/assets/js/main.js', [], '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'colverde_assets');
