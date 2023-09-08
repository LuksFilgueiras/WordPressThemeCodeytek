<?php
/**
 *  Theme Functions
 * 
 * @package Aquila
 */

if(!defined('AQUILA_DIR_PATH')){
    define('AQUILA_DIR_PATH', untrailingslashit( get_template_directory() ));
}

require_once AQUILA_DIR_PATH . '/inc/helpers/autoloader.php';

function aquila_enqueue_scripts(){
    // Load directly
    // wp_enqueue_style( 'style-global', get_template_directory_uri() . '/style.css', [], filemtime(get_template_directory() . '/style.css'), 'all');
    // wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime(get_template_directory() . '/assets/main.js'), true);
    
    // Register Styles
    wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css', [], false, 'all');
    wp_register_style( 'style-global', get_template_directory_uri() . '/style.css', [], filemtime(get_template_directory() . '/style.css'), 'all');

    // Register Scripts
    wp_register_script( 'main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime(get_template_directory() . '/assets/main.js'), true);
    wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js', ['jquery'], false, true);

    // Enqueue Styles
    wp_enqueue_style( 'style-global');
    wp_enqueue_style( 'bootstrap-css');

    // Enqueue Scripts
    wp_enqueue_script( 'main-js');
    wp_enqueue_script( 'bootstrap-js' );

    
}

add_action( 'wp_enqueue_scripts', 'aquila_enqueue_scripts' );

 ?>