<?php

function amit_enqueue_assets() {
    wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '1.0' );
}
add_action( 'wp_enqueue_scripts', 'amit_enqueue_assets' );

function amit_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    register_nav_menus( array(
        'primary' => 'Primary Menu',
    ) );
}
add_action( 'after_setup_theme', 'amit_setup' );

function amit_register_services() {
    register_post_type( 'service', array(
        'labels'      => array(
            'name'          => 'Services',
            'singular_name' => 'Service',
        ),
        'public'      => true,
        'has_archive' => true,
        'supports'    => array( 'title', 'editor', 'thumbnail' ),
        'menu_icon'   => 'dashicons-hammer',
    ) );
}
add_action( 'init', 'amit_register_services' );

function amit_register_service_type() {
    register_taxonomy( 'service_type', 'service', array(
        'labels'       => array(
            'name'          => 'Service Types',
            'singular_name' => 'Service Type',
        ),
        'hierarchical' => true,
        'show_in_rest' => true,
    ) );
}
add_action( 'init', 'amit_register_service_type' );