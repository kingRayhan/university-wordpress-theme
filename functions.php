<?php

function theme_files(){
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('theme-style', get_stylesheet_uri() , null, microtime());

    /**
     * Scripts
     */
    wp_enqueue_script('theme-js', get_template_directory_uri() . '/js/scripts-bundled.js', array(), microtime(), true);

}
add_action('wp_enqueue_scripts', 'theme_files');



function theme_support(){
    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support('title-tag');

    add_theme_support('automatic-feed-links');
}
add_action('after_setup_theme', 'theme_support');