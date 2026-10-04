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
    $style_file = get_stylesheet_directory() . '/style.css';
    $main_file  = get_stylesheet_directory() . '/assets/css/main.css';
    $js_file    = get_stylesheet_directory() . '/assets/js/main.js';

    wp_enqueue_style(
        'colverde-style',
        get_stylesheet_directory_uri() . '/style.css',
        [],
        file_exists($style_file) ? filemtime($style_file) : '1.0.2'
    );

    wp_enqueue_style(
        'colverde-main',
        get_stylesheet_directory_uri() . '/assets/css/main.css',
        ['colverde-style'],
        file_exists($main_file) ? filemtime($main_file) : '1.0.2'
    );

    wp_enqueue_script(
        'colverde-main',
        get_stylesheet_directory_uri() . '/assets/js/main.js',
        [],
        file_exists($js_file) ? filemtime($js_file) : '1.0.2',
        true
    );
}
add_action('wp_enqueue_scripts', 'colverde_assets', 20);

/*
 * Fallback per la vecchia installazione WordPress Colverde:
 * se hosting/cache impediscono il caricamento del CSS esterno,
 * il foglio principale viene inserito anche inline.
 */
function colverde_css_fallback() {
    $main_file = get_stylesheet_directory() . '/assets/css/main.css';
    if (is_readable($main_file)) {
        echo "<style id=\"colverde-css-fallback\">\n";
        echo file_get_contents($main_file);
        echo "\n</style>\n";
    }
}
add_action('wp_head', 'colverde_css_fallback', 99);
