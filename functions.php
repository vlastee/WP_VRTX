<?php

function load_stylesheets()
{

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('style');

   
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function include_jquery()
{
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.4.0.min.js', '', 1, true);
}
add_action('wp_enqueue_scripts', 'include_jquery');

function load_bootstrap()
{
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '', 1, true);
}
add_action('wp_enqueue_scripts', 'load_bootstrap');

function loadjs()
{

    wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
    wp_enqueue_script('customjs');


}
add_action('wp_enqueue_scripts', 'loadjs');



add_theme_support('menus');

add_theme_support('post-thumbnails');


register_nav_menus(
    array(
        'primary' => __('Primary Menu', 'theme'),
        'footer-menu' => __('footer-menu', 'theme'),
    )
);



// Register Custom Navigation Walker
if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
	// file does not exist... return an error.
	return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
	// file exists... require it.
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
