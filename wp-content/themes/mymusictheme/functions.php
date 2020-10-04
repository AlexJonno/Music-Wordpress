<?php

// Adds dynamic title tag support through wp_head() function
function alex_theme_support(){
    add_theme_support("title-tag");
    add_theme_support("custom-logo");
    add_theme_support("post-thumbnails");
};
add_action('after_setup_theme', 'alex_theme_support');

function alex_menus(){
    $locations = array(
        'primary' => 'Desktop primary header',
        'footer' => 'Footer Menu Items'
    );
    register_nav_menus($locations);
}
add_action('init', 'alex_menus');


function alex_register_styles(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('alex-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css", array(), '4.5.0', 'all');
    wp_enqueue_style('alex-fontawesome', "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", array(), '4.7.0', 'all');
    wp_enqueue_style('alex-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
}
add_action('wp_enqueue_scripts', 'alex_register_styles');

function alex_register_scripts(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_script('alex-jq', "https://code.jquery.com/jquery-3.5.1.min.js", array(), '3.5.1', 'all', true);
    wp_enqueue_script('alex-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '2.4.4', 'all');
    wp_enqueue_script('alex-js', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '4.4.1', 'all');
    wp_enqueue_style('alex-customjs', get_template_directory_uri() . "/assets/js/main.js", array(), $version, 'all');
}
add_action('wp_enqueue_scripts', 'alex_register_scripts');

?>