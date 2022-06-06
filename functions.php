<?php

function resorttheme_menus(){
    $menu_locations = array(
        'top' => 'Top Menu',
        'bottom' => 'Bottom Menu'
    );

    register_nav_menus($menu_locations);
}

function resorttheme_register_styles(){
    wp_enqueue_style('resorttheme-style', get_template_directory_uri() . '/style.css');
}

add_action('init', 'resorttheme_menus');
add_action('wp_enqueue_scripts', 'resorttheme_register_styles');

?>