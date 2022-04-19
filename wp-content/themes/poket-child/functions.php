<?php 

add_action( 'wp_enqueue_scripts', 'poket_enqueue_styles' );
function poket_enqueue_styles() {
    wp_enqueue_style( 'poket-parent-style', get_template_directory_uri() . '/style.css' );

}