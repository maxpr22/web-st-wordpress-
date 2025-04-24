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

}
 // Реєстрація типу запису "Послуги"
 function register_services_post_type() {
  $labels = array(
      'name'               => 'Послуги',
      'singular_name'      => 'Послуга',
      'menu_name'          => 'Послуги',
      'add_new'            => 'Додати нову',
      'add_new_item'       => 'Додати нову послугу',
      'edit_item'          => 'Редагувати послугу',
      'new_item'           => 'Нова послуга',
      'view_item'          => 'Переглянути послугу',
      'search_items'       => 'Шукати послуги',
      'not_found'          => 'Послуги не знайдено',
      'not_found_in_trash' => 'В кошику послуг не знайдено',
  );

  $args = array(
      'labels'             => $labels,
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => array('slug' => 'services'),
      'capability_type'    => 'post',
      'has_archive'        => true,
      'hierarchical'       => false,
      'menu_position'      => 5,
      'menu_icon'          => 'dashicons-hammer',
      'supports'           => array('title', 'thumbnail'),
  );

  register_post_type('services', $args);
}
add_action('init', 'register_services_post_type');

// Додаємо метабокс для тексту картки
function services_meta_boxes() {
  add_meta_box(
      'service_card_text',
      'Текст картки',
      'service_card_text_callback',
      'services',
      'normal',
      'high'
  );
}
add_action('add_meta_boxes', 'services_meta_boxes');

// Callback функція для метабоксу тексту
function service_card_text_callback($post) {
  wp_nonce_field(basename(__FILE__), 'service_text_nonce');
  $service_text = get_post_meta($post->ID, '_service_text', true);
  ?>
  <p>
      <input type="text" name="service_text" value="<?php echo esc_attr($service_text); ?>" style="width:100%;" placeholder="Введіть текст, який буде відображатися на картці" />
  </p>
  <?php
}

// Зберігаємо метадані
function save_service_meta($post_id) {
  // Перевіряємо nonce для текстового поля
  if (!isset($_POST['service_text_nonce']) || !wp_verify_nonce($_POST['service_text_nonce'], basename(__FILE__))) {
      return $post_id;
  }
  
  // Перевіряємо чи не автозбереження
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
      return $post_id;
  }
  
  // Перевіряємо права користувача
  if ('services' == $_POST['post_type'] && !current_user_can('edit_post', $post_id)) {
      return $post_id;
  }
  
  // Зберігаємо текст картки
  if (isset($_POST['service_text'])) {
      update_post_meta($post_id, '_service_text', sanitize_text_field($_POST['service_text']));
  }
}


// Реєстрація типу запису "Команда"
function register_team_post_type() {
  $labels = array(
      'name'               => 'Команда',
      'singular_name'      => 'Член команди',
      'menu_name'          => 'Команда',
      'add_new'            => 'Додати нового',
      'add_new_item'       => 'Додати нового члена команди',
      'edit_item'          => 'Редагувати члена команди',
      'new_item'           => 'Новий член команди',
      'view_item'          => 'Переглянути члена команди',
      'search_items'       => 'Шукати членів команди',
      'not_found'          => 'Членів команди не знайдено',
      'not_found_in_trash' => 'В кошику членів команди не знайдено',
  );

  $args = array(
      'labels'             => $labels,
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => array('slug' => 'team'),
      'capability_type'    => 'post',
      'has_archive'        => true,
      'hierarchical'       => false,
      'menu_position'      => 6,
      'menu_icon'          => 'dashicons-groups',
      'supports'           => array('title', 'thumbnail'),
  );

  register_post_type('team', $args);
}
add_action('init', 'register_team_post_type');

// Додаємо метабокси для члена команди
function team_meta_boxes() {
  add_meta_box(
      'team_member_position',
      'Посада',
      'team_member_position_callback',
      'team',
      'normal',
      'high'
  );
  
  add_meta_box(
      'team_member_social',
      'Соціальні мережі',
      'team_member_social_callback',
      'team',
      'normal',
      'high'
  );
}
add_action('add_meta_boxes', 'team_meta_boxes');

// Callback функція для метабоксу посади
function team_member_position_callback($post) {
  wp_nonce_field(basename(__FILE__), 'team_position_nonce');
  $position = get_post_meta($post->ID, '_team_position', true);
  ?>
  <p>
      <input type="text" name="team_position" value="<?php echo esc_attr($position); ?>" style="width:100%;" placeholder="Наприклад: Product Designer" />
  </p>
  <?php
}

// Callback функція для метабоксу соціальних мереж
function team_member_social_callback($post) {
  wp_nonce_field(basename(__FILE__), 'team_social_nonce');
  $instagram = get_post_meta($post->ID, '_team_instagram', true);
  $twitter = get_post_meta($post->ID, '_team_twitter', true);
  $facebook = get_post_meta($post->ID, '_team_facebook', true);
  $linkedin = get_post_meta($post->ID, '_team_linkedin', true);
  ?>
  <p>
      <label for="team_instagram">Instagram:</label>
      <input type="url" name="team_instagram" id="team_instagram" value="<?php echo esc_url($instagram); ?>" style="width:100%;" placeholder="https://instagram.com/username" />
  </p>
  <p>
      <label for="team_twitter">Twitter:</label>
      <input type="url" name="team_twitter" id="team_twitter" value="<?php echo esc_url($twitter); ?>" style="width:100%;" placeholder="https://twitter.com/username" />
  </p>
  <p>
      <label for="team_facebook">Facebook:</label>
      <input type="url" name="team_facebook" id="team_facebook" value="<?php echo esc_url($facebook); ?>" style="width:100%;" placeholder="https://facebook.com/username" />
  </p>
  <p>
      <label for="team_linkedin">LinkedIn:</label>
      <input type="url" name="team_linkedin" id="team_linkedin" value="<?php echo esc_url($linkedin); ?>" style="width:100%;" placeholder="https://linkedin.com/in/username" />
  </p>
  <?php
}

// Зберігаємо метадані члена команди
function save_team_meta($post_id) {
  // Перевіряємо nonce для поля посади
  if (!isset($_POST['team_position_nonce']) || !wp_verify_nonce($_POST['team_position_nonce'], basename(__FILE__))) {
      return $post_id;
  }
  
  // Перевіряємо nonce для поля соціальних мереж
  if (!isset($_POST['team_social_nonce']) || !wp_verify_nonce($_POST['team_social_nonce'], basename(__FILE__))) {
      return $post_id;
  }
  
  // Перевіряємо чи не автозбереження
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
      return $post_id;
  }
  
  // Перевіряємо права користувача
  if ('team' == $_POST['post_type'] && !current_user_can('edit_post', $post_id)) {
      return $post_id;
  }
  
  // Зберігаємо посаду
  if (isset($_POST['team_position'])) {
      update_post_meta($post_id, '_team_position', sanitize_text_field($_POST['team_position']));
  }
  
  // Зберігаємо соціальні мережі
  if (isset($_POST['team_instagram'])) {
      update_post_meta($post_id, '_team_instagram', esc_url_raw($_POST['team_instagram']));
  }
  
  if (isset($_POST['team_twitter'])) {
      update_post_meta($post_id, '_team_twitter', esc_url_raw($_POST['team_twitter']));
  }
  
  if (isset($_POST['team_facebook'])) {
      update_post_meta($post_id, '_team_facebook', esc_url_raw($_POST['team_facebook']));
  }
  
  if (isset($_POST['team_linkedin'])) {
      update_post_meta($post_id, '_team_linkedin', esc_url_raw($_POST['team_linkedin']));
  }
}
add_action('save_post_team', 'save_team_meta');
add_action('save_post_services', 'save_service_meta');


add_action('customize_register', 'theme_customize_register');




add_action('after_setup_theme', 'mytheme_setup');