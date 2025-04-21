<?php
add_action('wp_enqueue_scripts', 'mytheme_enqueue_assets');
function mytheme_enqueue_assets()
{
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


function mytheme_setup()
{
  add_theme_support('custom-logo', array(
    'height' => 100,
    'width' => 300,
    'flex-height' => true,
    'flex-width' => true,
  ));

}

function register_my_menus()
{
  register_nav_menus(
    array(
      'header-menu' => __('Меню в шапці')
    )
  );
}
add_action('init', 'register_my_menus');


function modify_nav_menu_link_classes($atts, $item, $args)
{
  // Базовый класс
  $class = 'site-nav__link';

  // Добавляем активный, если элемент текущий
  if (in_array('current-menu-item', $item->classes)) {
    $class .= ' site-nav__link--current';
  }

  // Обновляем или создаём атрибут class
  $atts['class'] = trim($class);
  return $atts;
}
add_filter('nav_menu_link_attributes', 'modify_nav_menu_link_classes', 10, 3);


function add_line_class_to_menu_item($classes, $item, $args)
{
  $classes[] = 'line'; //класс line на посилання в меню
  return $classes;
}
add_filter('nav_menu_css_class', 'add_line_class_to_menu_item', 10, 3);


class Mobile_Nav_Walker extends Walker_Nav_Menu
{
  function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
  {
    $classes = 'mobile-nav__item';
    $link_class = 'mobile-nav__link';

    if (in_array('current-menu-item', $item->classes)) {
      $link_class .= ' mobile-nav__link--current';
    }

    $output .= '<li class="' . $classes . '">';
    $output .= '<a href="' . esc_attr($item->url) . '" class="' . $link_class . '">';
    $output .= esc_html($item->title);
    $output .= '</a></li>';
  }
}

function theme_customize_register($wp_customize)
{
  // Секція Контакти
  $wp_customize->add_section('contact_section', array(
    'title' => 'Контактна інформація',
    'priority' => 30,
  ));

  // Поле Email
  $wp_customize->add_setting('contact_email', array(
    'default' => 'info@devstudio.com', 
    'sanitize_callback' => 'sanitize_email',
  ));

  $wp_customize->add_control('contact_email', array(
    'label' => 'Email',
    'section' => 'contact_section',
    'type' => 'email',
  ));

  // Поле Телефон
  $wp_customize->add_setting('contact_phone', array(
    'default' => '+380961111111', 
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control('contact_phone', array(
    'label' => 'Телефон',
    'section' => 'contact_section',
    'type' => 'text',
  ));

  $wp_customize->add_section('hero_section', array(
    'title' => 'Секция Hero',
    'priority' => 20,
  ));

  // Поле Текст на кнопці в секції Hero
  $wp_customize->add_setting('hero_button_text', array(
    'default' => 'Замовити послугу', 
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control('hero_button_text', array(
    'label' => 'Текст кнопки в секции Hero',
    'section' => 'hero_section',
    'type' => 'text',
  ));

  $wp_customize->add_setting('hero_title_text', array(
    'default' => 'Ефективні рішення для вашого бізнесу',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  
  $wp_customize->add_control('hero_title_text', array(
    'label' => 'Заголовок секції Hero',
    'section' => 'hero_section',
    'type' => 'text',
  ));
}

add_action('customize_register', 'theme_customize_register');


add_action('after_setup_theme', 'mytheme_setup');