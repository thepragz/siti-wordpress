<?php

function siti_script_enqueue() {

wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/css/siti.css', array(), '1.0.0', 'all' );

wp_enqueue_script( 'customjs', get_template_directory_uri() . '/js/siti.js', array(), '1.0.0' , true);

}

add_action('wp_en_scripts', 'siti_script_enqueue');

function siti_theme_setup() {

add_theme_support( 'menus' );

register_nav_menu( 'primary', 'Primary Header Navigation' );
register_nav_menu( 'secondary', 'Footer Navigation' );

}


add_action( 'init', 'siti_theme_setup' );
