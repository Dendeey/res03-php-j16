<?php

add_theme_support('post-thumbnails');

// Nous avons déclaré un menu qui s'appellera "Menu de navigation".

function register_my_menus() 
{ 
    register_nav_menus( array( 
    'header-menu' => __( 'Menu de navigation' ))); 
}

add_action( 'init', 'register_my_menus' );

?>