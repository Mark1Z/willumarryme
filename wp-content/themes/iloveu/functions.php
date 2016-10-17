<?php
/**
 * Theme's functions.php
 */

/**
 * Settings
 */
show_admin_bar(false);

/**
 * Register css and js
 */
function registerScripts()
{
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js');
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/resources/bootstrap/js/bootstrap.min.js');
    wp_enqueue_script('bootstrap');

    wp_register_style('bootstrap', get_template_directory_uri() . '/resources/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap');
    wp_register_style('bootstrap-theme', get_template_directory_uri() . '/resources/bootstrap/css/bootstrap-theme.min.css');
    wp_enqueue_style('bootstrap-theme');
    wp_register_style('styles', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('styles');
}

add_action('wp_enqueue_scripts', 'registerScripts');

/**
 * Filters
 */
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes()
{
    return 'class="btn btn-success"';
}