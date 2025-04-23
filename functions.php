<?php
add_action('wp_enqueue_scripts', 'mytheme_enqueue_assets');
function mytheme_enqueue_assets()
{
  // Стилі
  wp_enqueue_style('main-style', get_stylesheet_uri());
  wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/main.min.css');

  // Скрипти
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

add_theme_support('post-thumbnails');

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
  $class = 'site-nav__link';

  if (in_array('current-menu-item', $item->classes)) {
    $class .= ' site-nav__link--current';
  }

  $atts['class'] = trim($class);
  return $atts;
}
add_filter('nav_menu_link_attributes', 'modify_nav_menu_link_classes', 10, 3);


function add_line_class_to_menu_item($classes, $item, $args)
{
  $classes[] = 'line';
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
  $wp_customize->add_section('contact_section', array(
    'title' => 'Контактна інформація',
    'priority' => 30,
  ));

  $wp_customize->add_setting('contact_email', array(
    'default' => 'info@devstudio.com',
    'sanitize_callback' => 'sanitize_email',
  ));

  $wp_customize->add_control('contact_email', array(
    'label' => 'Email',
    'section' => 'contact_section',
    'type' => 'email',
  ));

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

  $wp_customize->add_setting('contact_address', array(
    'default' => 'м. Київ, пр-т Лесі Українки, 26',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control('contact_address', array(
    'label' => 'Адреса',
    'section' => 'contact_section',
    'type' => 'text',
  ));

  $wp_customize->add_setting('contact_map_link', array(
    'default' => 'https://goo.gl/maps/CPtrU1FHBa2aNyZL9',
    'sanitize_callback' => 'esc_url_raw',
  ));

  $wp_customize->add_control('contact_map_link', array(
    'label' => 'Посилання на Google Maps',
    'section' => 'contact_section',
    'type' => 'url',
  ));

  $wp_customize->add_section('benefits_section', array(
    'title' => 'Секція "Наші переваги"',
    'priority' => 35,
  ));

  $wp_customize->add_setting('benefits_section_title', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control('benefits_section_title', array(
    'label' => 'Заголовок секції',
    'section' => 'benefits_section',
    'type' => 'text',
  ));

  for ($i = 1; $i <= 4; $i++) {
    $wp_customize->add_setting('benefits_icon_' . $i, array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('benefits_icon_' . $i, array(
      'label' => 'Іконка для переваги ' . $i . ' (id іконки зі спрайту)',
      'description' => 'Наприклад: icon-antenna, icon-clock, icon-diagram, icon-astronaut',
      'section' => 'benefits_section',
      'type' => 'text',
    ));

    $wp_customize->add_setting('benefits_title_' . $i, array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('benefits_title_' . $i, array(
      'label' => 'Заголовок для переваги ' . $i,
      'section' => 'benefits_section',
      'type' => 'text',
    ));

    $wp_customize->add_setting('benefits_text_' . $i, array(
      'default' => '',
      'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('benefits_text_' . $i, array(
      'label' => 'Текст для переваги ' . $i,
      'section' => 'benefits_section',
      'type' => 'textarea',
    ));
  }


  $wp_customize->add_section('work_section', array(
    'title' => 'Секція "Чим ми займаємося"',
    'priority' => 30,
  ));

  $wp_customize->add_setting('work_section_title', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control('work_section_title', array(
    'label' => 'Заголовок секції',
    'section' => 'work_section',
    'type' => 'text',
  ));

  $wp_customize->add_setting('work_card1_text', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control('work_card1_text', array(
    'label' => 'Текст першої картки',
    'section' => 'work_section',
    'type' => 'text',
  ));

  $wp_customize->add_setting('work_card1_image', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'work_card1_image', array(
    'label' => 'Зображення першої картки',
    'section' => 'work_section',
  )));

  $wp_customize->add_setting('work_card1_image_2x', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'work_card1_image_2x', array(
    'label' => 'Зображення першої картки (2x)',
    'section' => 'work_section',
  )));

  $wp_customize->add_setting('work_card2_text', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control('work_card2_text', array(
    'label' => 'Текст другої картки',
    'section' => 'work_section',
    'type' => 'text',
  ));

  $wp_customize->add_setting('work_card2_image', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'work_card2_image', array(
    'label' => 'Зображення другої картки',
    'section' => 'work_section',
  )));

  $wp_customize->add_setting('work_card2_image_2x', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'work_card2_image_2x', array(
    'label' => 'Зображення другої картки (2x)',
    'section' => 'work_section',
  )));

  $wp_customize->add_setting('work_card3_text', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control('work_card3_text', array(
    'label' => 'Текст третьої картки',
    'section' => 'work_section',
    'type' => 'text',
  ));

  $wp_customize->add_setting('work_card3_image', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'work_card3_image', array(
    'label' => 'Зображення третьої картки',
    'section' => 'work_section',
  )));

  $wp_customize->add_setting('work_card3_image_2x', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'work_card3_image_2x', array(
    'label' => 'Зображення третьої картки (2x)',
    'section' => 'work_section',
  )));

  $wp_customize->add_section('team_section', array(
    'title' => 'Секція "Наша команда"',
    'priority' => 40,
  ));


  $wp_customize->add_setting('team_section_title', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control('team_section_title', array(
    'label' => 'Заголовок секції',
    'section' => 'team_section',
    'type' => 'text',
  ));

  for ($i = 1; $i <= 4; $i++) {
    $wp_customize->add_setting('team_member_name_' . $i, array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('team_member_name_' . $i, array(
      'label' => 'Ім\'я члена команди ' . $i,
      'section' => 'team_section',
      'type' => 'text',
    ));

    $wp_customize->add_setting('team_member_position_' . $i, array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('team_member_position_' . $i, array(
      'label' => 'Посада члена команди ' . $i,
      'section' => 'team_section',
      'type' => 'text',
    ));

    $wp_customize->add_setting('team_member_photo_' . $i, array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'team_member_photo_' . $i, array(
      'label' => 'Фото члена команди ' . $i . ' (desktop)',
      'section' => 'team_section',
    )));

    $wp_customize->add_setting('team_member_photo_2x_' . $i, array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'team_member_photo_2x_' . $i, array(
      'label' => 'Фото 2x члена команди ' . $i . ' (desktop)',
      'section' => 'team_section',
    )));

    $wp_customize->add_setting('team_member_photo_768_' . $i, array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'team_member_photo_768_' . $i, array(
      'label' => 'Фото члена команди ' . $i . ' (tablet)',
      'section' => 'team_section',
    )));

    $wp_customize->add_setting('team_member_photo_768_2x_' . $i, array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'team_member_photo_768_2x_' . $i, array(
      'label' => 'Фото 2x члена команди ' . $i . ' (tablet)',
      'section' => 'team_section',
    )));

    $wp_customize->add_setting('team_member_photo_480_' . $i, array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'team_member_photo_480_' . $i, array(
      'label' => 'Фото члена команди ' . $i . ' (mobile)',
      'section' => 'team_section',
    )));

    $wp_customize->add_setting('team_member_photo_480_2x_' . $i, array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'team_member_photo_480_2x_' . $i, array(
      'label' => 'Фото 2x члена команди ' . $i . ' (mobile)',
      'section' => 'team_section',
    )));

    $social_networks = array('instagram', 'twitter', 'facebook', 'linkedin');

    foreach ($social_networks as $network) {
      $wp_customize->add_setting('team_member_' . $network . '_' . $i, array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
      ));

      $wp_customize->add_control('team_member_' . $network . '_' . $i, array(
        'label' => ucfirst($network) . ' для члена команди ' . $i,
        'section' => 'team_section',
        'type' => 'url',
      ));
    }
  }

}

add_action('customize_register', 'theme_customize_register');


add_action('after_setup_theme', 'mytheme_setup');