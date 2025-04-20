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
          <a class="logo" href="<?php echo get_permalink( get_page_by_path('studio') ); ?>"><span class="logo__accent">Web</span>Studio</a>
          <button
            class="menu-button js-open-menu"
            aria-expanded="false"
            aria-controls="mobile-menu">
            <svg height="16px" width="24px">
              <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-menu_24px"></use>
            </svg>
          </button>
          <ul class="site-nav">
            <li class="line">
              <a class="site-nav__link <?php if (is_page('studio')) echo 'site-nav__link--current'; ?> " href="<?php echo get_permalink( get_page_by_path('studio') ); ?>">Студія</a>
            </li>
            <li class = "line"><a class="site-nav__link <?php if (is_page('portfolio')) echo 'site-nav__link--current'; ?> " href="<?php echo get_permalink( get_page_by_path('portfolio') ); ?>">Портфоліо</a></li>
            <li class = "line"><a class="site-nav__link" href="">Контакти</a></li>
          </ul>
        </nav>
        <ul class="contact-up">
          <li>
            <a class="contact-up__link" href="mailto:info@devstudio.com">
              <svg width="16" height="12">
                <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-envelope"></use>
              </svg>
              info@devstudio.com</a
            >
          </li>
          <li>
            <a class="contact-up__link" href="tel:+380961111111">
              <svg width="10" height="16">
                <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-smartphone"></use>
              </svg>
              +38 096 111 11 11</a
            >
          </li>
        </ul>
      </div>
    </header>