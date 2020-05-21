<?php

function pardazish_theme_style() {

    wp_enqueue_style( 'bootstrap_min_css', get_template_directory_uri() . '/css/bootstrap.min.css' );

    wp_enqueue_style( 'bootstrap_slider_min_css', get_template_directory_uri() . '/css/bootstrap-slider.min.css' );

    wp_enqueue_style( 'fontawesome_all_min_css', get_template_directory_uri() . '/css/fontawesome-all.min.css' );


    wp_enqueue_style( 'slick_css', get_template_directory_uri() . '/css/slick.css' );

    wp_enqueue_style( 'style_css', get_template_directory_uri() . '/style.css' );
    
    wp_enqueue_style( 'rtl_css', get_template_directory_uri() . '/css/rtl.css' );
    
    wp_enqueue_style( 'custom_css', get_template_directory_uri() . '/css/custom.css' );

}

add_action( 'wp_enqueue_scripts', 'pardazish_theme_style' );


function pardazish_theme_js() {

    wp_enqueue_script( 'jquery_min_js', get_template_directory_uri() . '/js/jquery.min.js', 1, 1, 1 );

    wp_enqueue_script( 'bootstrap_min_js', get_template_directory_uri() . '/js/bootstrap.min.js', 1, 1, 1 );

    wp_enqueue_script( 'bootstrap_slider_min_js', get_template_directory_uri() . '/js/bootstrap-slider.min.js', 1, 1, 1 );

    wp_enqueue_script( 'slick_min_js', get_template_directory_uri() . '/js/slick.min.js', 1, 1, 1 );

    wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.js', 1, 1, 1 );

}

add_action( 'wp_enqueue_scripts', 'pardazish_theme_js' );


function packs() {

    /**
     * Post Type: مقالات.
     */

    $labels = array(
        "name" => __( "package", "Pardazish" ),
    );

    $args = array(
        "label" => __( "package", "Pardazish" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => false,
        "rest_base" => "",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        'menu_icon' => 'dashicons-cart',
        "hierarchical" => false,
        "rewrite" => array( "slug" => "package", "with_front" => true ),
        "query_var" => true,
        "supports" => array( "title", "editor", "thumbnail" ),
    );

    register_post_type( "pack", $args );
}

add_action( 'init', 'packs' );

function Team() {

    /**
     * Post Type: مقالات.
     */

    $labels = array(
        "name" => __( "Team", "Pardazish" ),
    );

    $args = array(
        "label" => __( "Team", "Pardazish" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => false,
        "rest_base" => "",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        'menu_icon' => 'dashicons-admin-users',
        "hierarchical" => false,
        "rewrite" => array( "slug" => "Team", "with_front" => true ),
        "query_var" => true,
        "supports" => array( "title", "editor", "thumbnail" ),
    );

    register_post_type( "Team", $args );
}

add_action( 'init', 'Team' );


add_theme_support( 'menus' );

function register_theme_menus() {
    register_nav_menus( array(
            'primary-menu'      => __( 'Primary Menu' ),
            'footer-menu-right' => __( 'Footer Menu Right' ),
            'footer-menu-left'  => __( 'Footer Menu Left' )
        )
    );
}
add_action('init', 'register_theme_menus');