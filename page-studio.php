<?php
/**
 * Template Name: Studio Page
 */
get_header(); ?>
<main>
  <!--Mobile-menu -->
  <div class="menu-container js-menu-container" id="mobile-menu">
    <button class="menu-toggle js-close-menu">
      <svg width="19px" height="19px">
        <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-close_24px"></use>
      </svg>
    </button>
    <nav class="mobile-nav">
      <ul class="mobile-nav__list">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'header-menu',
          'container' => false,
          'menu_class' => 'mobile-nav__list',
          'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          'fallback_cb' => false,
          'walker' => new Mobile_Nav_Walker()
        ));
        ?>
      </ul>
    </nav>
    <address class="mobile-contact">
      <ul class="mobile-contact__list">
        <li class="mobile-contact__item">
          <a class="mobile-contact__phone" href="tel:<?php
          $phone = get_theme_mod('contact_phone');
          if (empty($phone)) {
            $phone = '+380961111111';
          }
          echo esc_attr($phone);
          ?>">
            <?php
            echo esc_html($phone);
            ?>
          </a>
        </li>
        <li class="mobile-contact__item">
          <a class="mobile-contact__mail" href="mailto:<?php
          $email = get_theme_mod('contact_email');
          if (empty($email)) {
            $email = 'info@devstudio.com';
          }
          echo esc_attr($email);
          ?>">
            <?php
            echo esc_html($email);
            ?>
          </a>
        </li>
      </ul>
    </address>
    <ul class="mobile-social">
      <li class="mobile-social__item">
        <a class="mobile-social__link" href=""> Instagram</a>
      </li>
      <li class="mobile-social__item"><a class="mobile-social__link" href=""> Twitter</a></li>
      <li class="mobile-social__item"><a class="mobile-social__link" href=""> Facebook</a></li>
      <li class="mobile-social__item"><a class="mobile-social__link" href=""> Linkedin</a></li>
    </ul>
  </div>
  <!-- hero -->
  <section class="hero">
    <div class="container hero__container">
      <?php
      $hero_title = get_theme_mod('hero_title_text');
      ?>

      <h1 class="hero__title">
        <?php
        if (!empty($hero_title)) {
          echo esc_html($hero_title);
        } else {
          echo 'Ефективні рішення для вашого бізнесу';
        }
        ?>
      </h1>
      <?php
      $hero_btn_text = get_theme_mod('hero_button_text');
      ?>

      <button data-modal-open type="button" class="hero__button">
        <?php
        if (!empty($hero_btn_text)) {
          echo esc_html($hero_btn_text);
        } else {
          echo 'Замовити послугу';
        }
        ?>
      </button>
    </div>
  </section>
  <!-- benefits -->
  <section class="section benefits">
    <div class="container">
      <h2 class="benefits__title visually-hidden">
        <?php
        if (get_theme_mod('benefits_section_title')) {
          echo esc_html(get_theme_mod('benefits_section_title'));
        } else {
          echo 'Наші переваги';
        }
        ?>
      </h2>
      <ul class="benefits-list">
        <li class="benefits-list__item">
          <div class="benefits-list__picture">
            <svg width="70" height="70">
              <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#<?php
                 echo get_theme_mod('benefits_icon_1') ? esc_attr(get_theme_mod('benefits_icon_1')) : 'icon-antenna';
                 ?>"></use>
            </svg>
          </div>
          <h3 class="benefits-list__title">
            <?php
            if (get_theme_mod('benefits_title_1')) {
              echo esc_html(get_theme_mod('benefits_title_1'));
            } else {
              echo 'УВАГА ДО ДЕТАЛЕЙ';
            }
            ?>
          </h3>
          <p class="benefits-list__text">
            <?php
            if (get_theme_mod('benefits_text_1')) {
              echo esc_html(get_theme_mod('benefits_text_1'));
            } else {
              echo 'Ідейні міркування, і навіть початок повсякденної роботи з формування позиції.';
            }
            ?>
          </p>
        </li>
        <li class="benefits-list__item">
          <div class="benefits-list__picture">
            <svg width="70" height="70">
              <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#<?php
                 echo get_theme_mod('benefits_icon_2') ? esc_attr(get_theme_mod('benefits_icon_2')) : 'icon-clock';
                 ?>"></use>
            </svg>
          </div>
          <h3 class="benefits-list__title">
            <?php
            if (get_theme_mod('benefits_title_2')) {
              echo esc_html(get_theme_mod('benefits_title_2'));
            } else {
              echo 'ПУНКТУАЛЬНІСТЬ';
            }
            ?>
          </h3>
          <p class="benefits-list__text">
            <?php
            if (get_theme_mod('benefits_text_2')) {
              echo esc_html(get_theme_mod('benefits_text_2'));
            } else {
              echo 'Завдання організації, особливо рамки і місце навчання кадрів тягне у себе.';
            }
            ?>
          </p>
        </li>
        <li class="benefits-list__item">
          <div class="benefits-list__picture">
            <svg width="70" height="70">
              <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#<?php
                 echo get_theme_mod('benefits_icon_3') ? esc_attr(get_theme_mod('benefits_icon_3')) : 'icon-diagram';
                 ?>"></use>
            </svg>
          </div>
          <h3 class="benefits-list__title">
            <?php
            if (get_theme_mod('benefits_title_3')) {
              echo esc_html(get_theme_mod('benefits_title_3'));
            } else {
              echo 'ПЛАНУВАННЯ';
            }
            ?>
          </h3>
          <p class="benefits-list__text">
            <?php
            if (get_theme_mod('benefits_text_3')) {
              echo esc_html(get_theme_mod('benefits_text_3'));
            } else {
              echo 'Так само консультація з широким активом значною мірою зумовлює.';
            }
            ?>
          </p>
        </li>
        <li class="benefits-list__item">
          <div class="benefits-list__picture">
            <svg width="70" height="70">
              <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#<?php
                 echo get_theme_mod('benefits_icon_4') ? esc_attr(get_theme_mod('benefits_icon_4')) : 'icon-astronaut';
                 ?>"></use>
            </svg>
          </div>
          <h3 class="benefits-list__title">
            <?php
            if (get_theme_mod('benefits_title_4')) {
              echo esc_html(get_theme_mod('benefits_title_4'));
            } else {
              echo 'СУЧАСНІ ТЕХНОЛОГІЇ';
            }
            ?>
          </h3>
          <p class="benefits-list__text">
            <?php
            if (get_theme_mod('benefits_text_4')) {
              echo esc_html(get_theme_mod('benefits_text_4'));
            } else {
              echo 'Значимість цих проблем настільки очевидна, що реалізація планових завдань.';
            }
            ?>
          </p>
        </li>
      </ul>
    </div>
  </section>
  <!-- our-works -->
  <?php get_template_part('template-parts/services-section'); ?>
  <!-- our-command -->
  <?php get_template_part('template-parts/team-section'); ?>
  <!-- clients -->
  <?php get_clients_section(); ?>
  <!-- modal -->
  <div class="backdrop is-hidden" data-modal>
    <div class="modal">
      <button class="modal__close" data-modal-close>
        <svg width="11px" height="11px">
          <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-close-black"></use>
        </svg>
      </button>
      <p class="form__title">Залиште свої дані, ми вам передзвонимо</p>
      <?php echo do_shortcode('[contact-form-7 id="fac75bf" title="Віджет форми"]')?>
    </div>
  </div>
</main>
<?php get_footer(); ?>