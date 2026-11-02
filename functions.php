<?php
add_theme_support( 'title-tag' );

function amit_enqueue_assets() {
    wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '1.0' );
}
add_action( 'wp_enqueue_scripts', 'amit_enqueue_assets' );