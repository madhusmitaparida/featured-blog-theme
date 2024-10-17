<?php
// Add theme support for featured images
function featured_blog_theme_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'featured_blog_theme_setup');

// Enqueue the theme styles
function featured_blog_enqueue_styles() {
    wp_enqueue_style('theme-styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'featured_blog_enqueue_styles');

function register_my_menus() {
    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'featured-blog-theme'),
        )
    );
}
add_action('init', 'register_my_menus');

?>
