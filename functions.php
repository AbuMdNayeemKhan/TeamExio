<?php

add_theme_support( 'menus' );
add_theme_support( 'widgets' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'post-thumbnails' );

// Menu Register

// register_nav_menu('header menu', 'Header Menu');

register_nav_menus( 
    array (
        'header menu' => 'Header Menu',
        'footer menu' => 'Footer Menu',
        'sidebar menu' => 'Sidebar Menu'
    )
);

?>