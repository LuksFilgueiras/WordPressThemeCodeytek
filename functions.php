<?php
/**
 *  Theme Functions
 * 
 * @package Aquila
 */

 

function aquila_enqueue_scripts(){
    wp_enqueue_style( 'style-global', get_template_directory_uri() . '/style.css', [], filemtime(get_template_directory() . '/style.css'), 'all');
}

add_action( 'wp_enqueue_scripts', 'aquila_enqueue_scripts' );

 ?>