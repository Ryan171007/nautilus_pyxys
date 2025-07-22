<?php

// Theme functions here

add_action('after_setup_theme', function () {
    
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'header_menu' => 'Header Menu',
        'footer_menu' => 'Footer Menu',
        'menu_mobile' => 'Menu Mobile'
    ));
});

// Carregar a estilização (CSS)

function adicionar_css(){
    wp_enqueue_style(
        'estilo-principal',
        get_template_directory_uri() . '/css/header_brand.css',
    );
}

add_action('wp_enqueue_scripts', 'adicionar_css');
