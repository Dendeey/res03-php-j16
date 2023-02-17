<?php

add_theme_support('post-thumbnails');

// Nous avons déclaré un menu qui s'appellera "Menu de navigation".

function register_my_menus() 
{ 
    register_nav_menus( array(
        'header-menu' => __( 'Menu de navigation' ))); 
}

add_action( 'init', 'register_my_menus' );


// Fonction qui nous permet de récupérer les éléments de notre menu et de les afficher.

function getNavigationMenu() {  
    $items = wp_get_nav_menu_items('Navigation');  
  
    return $items;  
}

// Créer une fonction qui nous permet de récupérer et préparer les données dont nous avons besoin sur la page 

function getHomepageData()  
{  
    $data = [];  
    $data["a-propos"] = [];  
    $data["a-propos"]["titre"] = get_field("titre_a_propos");  
    $data["a-propos"]["contenu"] = get_field("contenu_a_propos");  
  
    return $data;  
}
?>