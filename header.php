<!DOCTYPE html>
<html lang="uk">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>

<body>
  <header class="header">
    <div class="container header__container">
      <nav class="header__nav">
        <?php if (has_custom_logo()): ?>
          <div class="logo">
            <?php the_custom_logo(); ?>
          </div>
        <?php else: ?>
          <a class="logo" href="<?php echo get_permalink(get_page_by_path('studio')); ?>"><span
              class="logo__accent">Web</span>Studio</a>
        <?php endif; ?>
        <button class="menu-button js-open-menu" aria-expanded="false" aria-controls="mobile-menu">
          <svg height="16px" width="24px">
            <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-menu_24px"></use>
          </svg>
        </button>
        <ul class="site-nav">
          <?php
          wp_nav_menu(array(
            'theme_location' => 'header-menu',
            'container' => false,
            'menu_class' => 'site-nav',
            'fallback_cb' => false
          ));
          ?>

        </ul>
      </nav>
      <?php
      $email = get_theme_mod('contact_email');
      $phone = get_theme_mod('contact_phone');

      if (empty($email)) {
        $email = 'info@devstudio.com';
      }

      if (empty($phone)) {
        $phone = '+380961111111';
      }

      $tel_href = 'tel:' . preg_replace('/\D+/', '', $phone);
      ?>

      <ul class="contact-up">
        <li>
          <a class="contact-up__link" href="mailto:<?php echo esc_attr($email); ?>">
            <svg width="16" height="12">
              <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-envelope"></use>
            </svg>
            <?php echo esc_html($email); ?>
          </a>
        </li>
        <li>
          <a class="contact-up__link" href="<?php echo esc_attr($tel_href); ?>">
            <svg width="10" height="16">
              <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-smartphone"></use>
            </svg>
            <?php echo esc_html($phone); ?>
          </a>
        </li>
      </ul>

    </div>
  </header>