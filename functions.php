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

/**
 * Create the Sponsor page once when the updated theme is first loaded.
 * Existing Sponsor pages are preserved as-is.
 */
function colverde_ensure_sponsor_page() {
    if (get_option('colverde_sponsor_page_v1')) {
        return;
    }
    $existing = get_page_by_path('sponsor', OBJECT, 'page');
    if ($existing) {
        update_option('colverde_sponsor_page_v1', (int) $existing->ID, false);
        return;
    }
    $created = wp_insert_post([
        'post_type'     => 'page',
        'post_title'    => 'Sponsor',
        'post_name'     => 'sponsor',
        'post_status'   => 'publish',
        'post_content'  => '',
        'page_template' => 'page-sponsor.php',
    ], true);
    if (!is_wp_error($created) && $created) {
        update_option('colverde_sponsor_page_v1', (int) $created, false);
    }
}
add_action('init', 'colverde_ensure_sponsor_page', 20);

function colverde_sponsor_assets() {
    if (is_page('sponsor') || is_page_template('page-sponsor.php')) {
        wp_enqueue_style(
            'colverde-sponsor',
            get_template_directory_uri() . '/assets/css/sponsor.css',
            ['colverde-main'],
            '1.0.0'
        );
    }
}
add_action('wp_enqueue_scripts', 'colverde_sponsor_assets', 20);
