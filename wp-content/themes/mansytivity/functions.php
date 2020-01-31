<?php

// Function to Enqueue CSS and JS

function mansytivity_script_enqueue() {
    // Include CSS files in the header
    wp_enqueue_style( 'normalizestyle', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1', 'all' );
    wp_enqueue_style( 'simplescrollbar', get_template_directory_uri() . '/css/simple-scrollbar.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'offcanvass', get_template_directory_uri() . '/css/offcanvas.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/css/mansytivity.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'googlewebfonts', 'https://fonts.googleapis.com/css?family=Open+Sans|Roboto' );
    // Include the JS files in the footer
    wp_enqueue_script('jqueryscript', get_template_directory_uri() . '/js/jquery-3.4.1.min.js', array(), '3.4.1', true);
    wp_enqueue_script('simplescrollbarcript', get_template_directory_uri() . '/js/simple-scrollbar.js', array(), '1.0.0', true);
    wp_enqueue_script('offcanvassscript', get_template_directory_uri() . '/js/offcanvas.js', array(), '1.0.0', true);
    wp_enqueue_script('customscript', get_template_directory_uri() . '/js/mansytivity.js', array(), '1.0.0', true);
}

add_action( 'wp_enqueue_scripts', 'mansytivity_script_enqueue' );

// Function to Setup Theme

function mansytivity_theme_setup() {
    add_theme_support('menus');
    // Create a Custom Menu
    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('secondary', 'Footer Navigation');

}

add_action('init', 'mansytivity_theme_setup');