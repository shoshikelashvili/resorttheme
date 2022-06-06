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
    wp_enqueue_style('resorttheme-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css");
    wp_enqueue_style('resorttheme-font', "db.onlinewebfonts.com/c/924ee4158324c02e3e0d62e54cafd14f?family=Gotham+Book");
}

add_action('init', 'resorttheme_menus');
add_action('wp_enqueue_scripts', 'resorttheme_register_styles');

function resorttheme_register_scripts(){
    wp_enqueue_script('resorttheme-jquery', "https://code.jquery.com/jquery-3.2.1.slim.min.js", array(), false, true);
    wp_enqueue_script('resorttheme-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js", array(), false, true);
    wp_enqueue_script('resorttheme-bootstrapjs', "https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js", array(), false, true);
}

add_action('wp_enqueue_scripts', 'resorttheme_register_scripts');

?>
