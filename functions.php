<?php
add_action('wp_enqueue_scripts', 'mytheme_enqueue_assets');
function mytheme_enqueue_assets() {
    // Стили
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/main.min.css');

    // Скрипты
    wp_enqueue_script('modal-js', get_template_directory_uri() . '/js/modal1.js');
    wp_enqueue_script('menu-js', get_template_directory_uri() . '/js/menu1.js');

    wp_enqueue_script(
        'body-scroll-lock',
        'https://cdnjs.cloudflare.com/ajax/libs/body-scroll-lock/3.1.5/bodyScrollLock.min.js'
    );
}


function mytheme_setup() {
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'mytheme_setup');