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
  <section class="work-section">
    <div class="container">
      <h2 class="work-section__title">
        <?php
        if (get_theme_mod('work_section_title')) {
          echo esc_html(get_theme_mod('work_section_title'));
        } else {
          echo 'Чим ми займаємося';
        }
        ?>
      </h2>
      <ul class="examples">
        <li class="examples__card">
          <div class="thumb">
            <p class="examples__text">
              <?php
              if (get_theme_mod('work_card1_text')) {
                echo esc_html(get_theme_mod('work_card1_text'));
              } else {
                echo 'Десктопні Додатки';
              }
              ?>
            </p>
            <picture>
              <?php
              $card1_image = get_theme_mod('work_card1_image') ? get_theme_mod('work_card1_image') : get_template_directory_uri() . '/images/box1.jpg';
              $card1_image_2x = get_theme_mod('work_card1_image_2x') ? get_theme_mod('work_card1_image_2x') : get_template_directory_uri() . '/images/box1@x2.jpg';
              ?>
              <source srcset="<?php echo esc_url($card1_image); ?> 1x, <?php echo esc_url($card1_image_2x); ?> 2x"
                sizes="370px" type="image/jpeg" />
              <img class="examples__image" src="<?php echo esc_url($card1_image); ?>" alt="Десктоп" width="370px" />
            </picture>
          </div>
        </li>
        <li class="examples__card">
          <div class="thumb">
            <p class="examples__text">
              <?php
              if (get_theme_mod('work_card2_text')) {
                echo esc_html(get_theme_mod('work_card2_text'));
              } else {
                echo 'Мобільні додатки';
              }
              ?>
            </p>
            <picture>
              <?php
              $card2_image = get_theme_mod('work_card2_image') ? get_theme_mod('work_card2_image') : get_template_directory_uri() . '/images/box2.jpg';
              $card2_image_2x = get_theme_mod('work_card2_image_2x') ? get_theme_mod('work_card2_image_2x') : get_template_directory_uri() . '/images/box2@x2.jpg';
              ?>
              <source srcset="<?php echo esc_url($card2_image); ?> 1x, <?php echo esc_url($card2_image_2x); ?> 2x"
                sizes="370px" type="image/jpeg" />
              <img class="examples__image" src="<?php echo esc_url($card2_image); ?>" alt="Телефони" width="370px" />
            </picture>
          </div>
        </li>
        <li class="examples__card">
          <div class="thumb">
            <p class="examples__text">
              <?php
              if (get_theme_mod('work_card3_text')) {
                echo esc_html(get_theme_mod('work_card3_text'));
              } else {
                echo 'Дизайнерські рішення';
              }
              ?>
            </p>
            <picture>
              <?php
              $card3_image = get_theme_mod('work_card3_image') ? get_theme_mod('work_card3_image') : get_template_directory_uri() . '/images/box3.jpg';
              $card3_image_2x = get_theme_mod('work_card3_image_2x') ? get_theme_mod('work_card3_image_2x') : get_template_directory_uri() . '/images/box3@x2.jpg';
              ?>
              <source srcset="<?php echo esc_url($card3_image); ?> 1x, <?php echo esc_url($card3_image_2x); ?> 2x"
                sizes="370px" type="image/jpeg" />
              <img class="examples__image" src="<?php echo esc_url($card3_image); ?>" alt="Планшети" width="370px" />
            </picture>
          </div>
        </li>
      </ul>
    </div>
  </section>
  <!-- our-command -->
  <section class="section command">
    <div class="container">
      <h2 class="command__title">
        <?php
        if (get_theme_mod('team_section_title')) {
          echo esc_html(get_theme_mod('team_section_title'));
        } else {
          echo 'Наша команда';
        }
        ?>
      </h2>
      <ul class="members">
        <li class="members__item">
          <picture>
            <?php
            $face1_480 = get_theme_mod('team_member_photo_480_1') ? get_theme_mod('team_member_photo_480_1') : get_template_directory_uri() . '/images/face1480@x1.jpg';
            $face1_480_2x = get_theme_mod('team_member_photo_480_2x_1') ? get_theme_mod('team_member_photo_480_2x_1') : get_template_directory_uri() . '/images/face1480@x2.jpg';
            $face1_768 = get_theme_mod('team_member_photo_768_1') ? get_theme_mod('team_member_photo_768_1') : get_template_directory_uri() . '/images/face1768@x1.jpg';
            $face1_768_2x = get_theme_mod('team_member_photo_768_2x_1') ? get_theme_mod('team_member_photo_768_2x_1') : get_template_directory_uri() . '/images/face1768@x2.jpg';
            $face1 = get_theme_mod('team_member_photo_1') ? get_theme_mod('team_member_photo_1') : get_template_directory_uri() . '/images/face1.jpg';
            $face1_2x = get_theme_mod('team_member_photo_2x_1') ? get_theme_mod('team_member_photo_2x_1') : get_template_directory_uri() . '/images/face1@x2.jpg';

            $member1_position = get_theme_mod('team_member_position_1') ? get_theme_mod('team_member_position_1') : 'Product Designer';
            ?>
            <source srcset="<?php echo esc_url($face1_480); ?> 1x, <?php echo esc_url($face1_480_2x); ?> 2x"
              media="(max-width: 767px)" type="image/jpeg" />
            <source srcset="<?php echo esc_url($face1_768); ?> 1x, <?php echo esc_url($face1_768_2x); ?> 2x"
              media="(min-width: 768px)" type="image/jpeg" />
            <source srcset="<?php echo esc_url($face1); ?> 1x, <?php echo esc_url($face1_2x); ?> 2x"
              media="(min-width: 1200px)" type="image/jpeg" />
            <img class="members__image" src="<?php echo esc_url($face1); ?>"
              alt="<?php echo esc_attr($member1_position); ?>" width="270px" />
          </picture>
          <div class="description">
            <h3 class="description__subtitle">
              <?php echo get_theme_mod('team_member_name_1') ? esc_html(get_theme_mod('team_member_name_1')) : 'Ігор Дем\'яненко'; ?>
            </h3>
            <p class="description__text">
              <?php echo esc_html($member1_position); ?>
            </p>
            <ul class="social-list">
              <li>
                <a class="social-list__link"
                  href="<?php echo get_theme_mod('team_member_instagram_1') ? esc_url(get_theme_mod('team_member_instagram_1')) : '#'; ?>">
                  <svg width="20" height="20">
                    <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-instagram"></use>
                  </svg>
                </a>
              </li>
              <li>
                <a class="social-list__link"
                  href="<?php echo get_theme_mod('team_member_twitter_1') ? esc_url(get_theme_mod('team_member_twitter_1')) : '#'; ?>">
                  <svg width="20" height="20">
                    <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-twitter"></use>
                  </svg>
                </a>
              </li>
              <li>
                <a class="social-list__link"
                  href="<?php echo get_theme_mod('team_member_facebook_1') ? esc_url(get_theme_mod('team_member_facebook_1')) : '#'; ?>">
                  <svg width="20" height="20">
                    <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-facebook"></use>
                  </svg>
                </a>
              </li>
              <li>
                <a class="social-list__link"
                  href="<?php echo get_theme_mod('team_member_linkedin_1') ? esc_url(get_theme_mod('team_member_linkedin_1')) : '#'; ?>">
                  <svg width="20" height="20">
                    <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-linkedin"></use>
                  </svg>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="members__item">
          <picture>
            <?php
            $face2_480 = get_theme_mod('team_member_photo_480_2') ? get_theme_mod('team_member_photo_480_2') : get_template_directory_uri() . '/images/face2480@x1.jpg';
            $face2_480_2x = get_theme_mod('team_member_photo_480_2x_2') ? get_theme_mod('team_member_photo_480_2x_2') : get_template_directory_uri() . '/images/face2480@x2.jpg';
            $face2_768 = get_theme_mod('team_member_photo_768_2') ? get_theme_mod('team_member_photo_768_2') : get_template_directory_uri() . '/images/face2768@x1.jpg';
            $face2_768_2x = get_theme_mod('team_member_photo_768_2x_2') ? get_theme_mod('team_member_photo_768_2x_2') : get_template_directory_uri() . '/images/face2768@x2.jpg';
            $face2 = get_theme_mod('team_member_photo_2') ? get_theme_mod('team_member_photo_2') : get_template_directory_uri() . '/images/face2.jpg';
            $face2_2x = get_theme_mod('team_member_photo_2x_2') ? get_theme_mod('team_member_photo_2x_2') : get_template_directory_uri() . '/images/face2@x2.jpg';

            $member2_position = get_theme_mod('team_member_position_2') ? get_theme_mod('team_member_position_2') : 'Frontend Developer';
            ?>
            <source srcset="<?php echo esc_url($face2_480); ?> 1x, <?php echo esc_url($face2_480_2x); ?> 2x"
              media="(max-width: 767px)" type="image/jpeg" />
            <source srcset="<?php echo esc_url($face2_768); ?> 1x, <?php echo esc_url($face2_768_2x); ?> 2x"
              media="(min-width: 768px)" type="image/jpeg" />
            <source srcset="<?php echo esc_url($face2); ?> 1x, <?php echo esc_url($face2_2x); ?> 2x"
              media="(min-width: 1200px)" type="image/jpeg" />
            <img class="members__image" src="<?php echo esc_url($face2); ?>"
              alt="<?php echo esc_attr($member2_position); ?>" width="270px" />
          </picture>
          <div class="description">
            <h3 class="description__subtitle">
              <?php echo get_theme_mod('team_member_name_2') ? esc_html(get_theme_mod('team_member_name_2')) : 'Ольга Рєпіна'; ?>
            </h3>
            <p class="description__text">
              <?php echo esc_html($member2_position); ?>
            </p>
            <ul class="social-list">
              <li>
                <a class="social-list__link"
                  href="<?php echo get_theme_mod('team_member_instagram_2') ? esc_url(get_theme_mod('team_member_instagram_2')) : '#'; ?>">
                  <svg width="20" height="20">
                    <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-instagram"></use>
                  </svg>
                </a>
              </li>
              <li>
                <a class="social-list__link"
                  href="<?php echo get_theme_mod('team_member_twitter_2') ? esc_url(get_theme_mod('team_member_twitter_2')) : '#'; ?>">
                  <svg width="20" height="20">
                    <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-twitter"></use>
                  </svg>
                </a>
              </li>
              <li>
                <a class="social-list__link"
                  href="<?php echo get_theme_mod('team_member_facebook_2') ? esc_url(get_theme_mod('team_member_facebook_2')) : '#'; ?>">
                  <svg width="20" height="20">
                    <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-facebook"></use>
                  </svg>
                </a>
              </li>
              <li>
                <a class="social-list__link"
                  href="<?php echo get_theme_mod('team_member_linkedin_2') ? esc_url(get_theme_mod('team_member_linkedin_2')) : '#'; ?>">
                  <svg width="20" height="20">
                    <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-linkedin"></use>
                  </svg>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="members__item">
          <picture>
            <?php
            $face3_480 = get_theme_mod('team_member_photo_480_3') ? get_theme_mod('team_member_photo_480_3') : get_template_directory_uri() . '/images/face3480@x1.jpg';
            $face3_480_2x = get_theme_mod('team_member_photo_480_2x_3') ? get_theme_mod('team_member_photo_480_2x_3') : get_template_directory_uri() . '/images/face3480@x2.jpg';
            $face3_768 = get_theme_mod('team_member_photo_768_3') ? get_theme_mod('team_member_photo_768_3') : get_template_directory_uri() . '/images/face3768@x1.jpg';
            $face3_768_2x = get_theme_mod('team_member_photo_768_2x_3') ? get_theme_mod('team_member_photo_768_2x_3') : get_template_directory_uri() . '/images/face3768@x2.jpg';
            $face3 = get_theme_mod('team_member_photo_3') ? get_theme_mod('team_member_photo_3') : get_template_directory_uri() . '/images/face3.jpg';
            $face3_2x = get_theme_mod('team_member_photo_2x_3') ? get_theme_mod('team_member_photo_2x_3') : get_template_directory_uri() . '/images/face3@x2.jpg';

            $member3_position = get_theme_mod('team_member_position_3') ? get_theme_mod('team_member_position_3') : 'Marketing';
            ?>
            <source srcset="<?php echo esc_url($face3_480); ?> 1x, <?php echo esc_url($face3_480_2x); ?> 2x"
              media="(max-width: 767px)" type="image/jpeg" />
            <source srcset="<?php echo esc_url($face3_768); ?> 1x, <?php echo esc_url($face3_768_2x); ?> 2x"
              media="(min-width: 768px)" type="image/jpeg" />
            <source srcset="<?php echo esc_url($face3); ?> 1x, <?php echo esc_url($face3_2x); ?> 2x"
              media="(min-width: 1200px)" type="image/jpeg" />
            <img class="members__image" src="<?php echo esc_url($face3); ?>"
              alt="<?php echo esc_attr($member3_position); ?>" width="270px" />
          </picture>
          <div class="description">
            <h3 class="description__subtitle">
              <?php echo get_theme_mod('team_member_name_3') ? esc_html(get_theme_mod('team_member_name_3')) : 'Микола Тарасов'; ?>
            </h3>
            <p class="description__text">
              <?php echo esc_html($member3_position); ?>
            </p>
            <ul class="social-list">
              <li>
                <a class="social-list__link"
                  href="<?php echo get_theme_mod('team_member_instagram_3') ? esc_url(get_theme_mod('team_member_instagram_3')) : '#'; ?>">
                  <svg width="20" height="20">
                    <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-instagram"></use>
                  </svg>
                </a>
              </li>
              <li>
                <a class="social-list__link"
                  href="<?php echo get_theme_mod('team_member_twitter_3') ? esc_url(get_theme_mod('team_member_twitter_3')) : '#'; ?>">
                  <svg width="20" height="20">
                    <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-twitter"></use>
                  </svg>
                </a>
              </li>
              <li>
                <a class="social-list__link"
                  href="<?php echo get_theme_mod('team_member_facebook_3') ? esc_url(get_theme_mod('team_member_facebook_3')) : '#'; ?>">
                  <svg width="20" height="20">
                    <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-facebook"></use>
                  </svg>
                </a>
              </li>
              <li>
                <a class="social-list__link"
                  href="<?php echo get_theme_mod('team_member_linkedin_3') ? esc_url(get_theme_mod('team_member_linkedin_3')) : '#'; ?>">
                  <svg width="20" height="20">
                    <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-linkedin"></use>
                  </svg>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="members__item">
          <picture>
            <?php
            $face4_480 = get_theme_mod('team_member_photo_480_4') ? get_theme_mod('team_member_photo_480_4') : get_template_directory_uri() . '/images/face4480@x1.jpg';
            $face4_480_2x = get_theme_mod('team_member_photo_480_2x_4') ? get_theme_mod('team_member_photo_480_2x_4') : get_template_directory_uri() . '/images/face4480@x2.jpg';
            $face4_768 = get_theme_mod('team_member_photo_768_4') ? get_theme_mod('team_member_photo_768_4') : get_template_directory_uri() . '/images/face4768@x1.jpg';
            $face4_768_2x = get_theme_mod('team_member_photo_768_2x_4') ? get_theme_mod('team_member_photo_768_2x_4') : get_template_directory_uri() . '/images/face4768@x2.jpg';
            $face4 = get_theme_mod('team_member_photo_4') ? get_theme_mod('team_member_photo_4') : get_template_directory_uri() . '/images/face4.jpg';
            $face4_2x = get_theme_mod('team_member_photo_2x_4') ? get_theme_mod('team_member_photo_2x_4') : get_template_directory_uri() . '/images/face4@x2.jpg';

            $member4_position = get_theme_mod('team_member_position_4') ? get_theme_mod('team_member_position_4') : 'UI Designer';
            ?>
            <source srcset="<?php echo esc_url($face4_480); ?> 1x, <?php echo esc_url($face4_480_2x); ?> 2x"
              media="(max-width: 767px)" type="image/jpeg" />
            <source srcset="<?php echo esc_url($face4_768); ?> 1x, <?php echo esc_url($face4_768_2x); ?> 2x"
              media="(min-width: 768px)" type="image/jpeg" />
            <source srcset="<?php echo esc_url($face4); ?> 1x, <?php echo esc_url($face4_2x); ?> 2x"
              media="(min-width: 1200px)" type="image/jpeg" />
            <img class="members__image" src="<?php echo esc_url($face4); ?>"
              alt="<?php echo esc_attr($member4_position); ?>" width="270px" />
          </picture>
          <div class="description">
            <h3 class="description__subtitle">
              <?php echo get_theme_mod('team_member_name_4') ? esc_html(get_theme_mod('team_member_name_4')) : 'Михайло Єрмаков'; ?>
            </h3>
            <p class="description__text">
              <?php echo esc_html($member4_position); ?>
            </p>
            <ul class="social-list">
              <li>
                <a class="social-list__link"
                  href="<?php echo get_theme_mod('team_member_instagram_4') ? esc_url(get_theme_mod('team_member_instagram_4')) : '#'; ?>">
                  <svg width="20" height="20">
                    <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-instagram"></use>
                  </svg>
                </a>
              </li>
              <li>
                <a class="social-list__link"
                  href="<?php echo get_theme_mod('team_member_twitter_4') ? esc_url(get_theme_mod('team_member_twitter_4')) : '#'; ?>">
                  <svg width="20" height="20">
                    <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-twitter"></use>
                  </svg>
                </a>
              </li>
              <li>
                <a class="social-list__link"
                  href="<?php echo get_theme_mod('team_member_facebook_4') ? esc_url(get_theme_mod('team_member_facebook_4')) : '#'; ?>">
                  <svg width="20" height="20">
                    <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-facebook"></use>
                  </svg>
                </a>
              </li>
              <li>
                <a class="social-list__link"
                  href="<?php echo get_theme_mod('team_member_linkedin_4') ? esc_url(get_theme_mod('team_member_linkedin_4')) : '#'; ?>">
                  <svg width="20" height="20">
                    <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-linkedin"></use>
                  </svg>
                </a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </section>
  <!-- clients -->
  <section class="section clients">
    <div class="container">
      <h2 class="clients__title">Постійні клієнти</h2>
      <ul class="clients-list">
        <li class="clients-list__item">
          <a class="clients-list__logo" href="">
            <svg width="106" height="60">
              <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-client1"></use>
            </svg>
          </a>
        </li>
        <li class="clients-list__item">
          <a class="clients-list__logo" href="">
            <svg width="106" height="60">
              <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-client2"></use>
            </svg>
          </a>
        </li>
        <li class="clients-list__item">
          <a class="clients-list__logo" href="">
            <svg width="106" height="60">
              <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-client3"></use>
            </svg>
          </a>
        </li>
        <li class="clients-list__item">
          <a class="clients-list__logo" href="">
            <svg width="106" height="60">
              <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-client4"></use>
            </svg>
          </a>
        </li>
        <li class="clients-list__item">
          <a class="clients-list__logo" href="">
            <svg width="106" height="60">
              <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-client5"></use>
            </svg>
          </a>
        </li>
        <li class="clients-list__item">
          <a class="clients-list__logo" href="">
            <svg width="106" height="60">
              <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-client6"></use>
            </svg>
          </a>
        </li>
      </ul>
    </div>
  </section>
  <!-- modal -->
  <div class="backdrop is-hidden" data-modal>
    <div class="modal">
      <button class="modal__close" data-modal-close>
        <svg width="11px" height="11px">
          <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-close-black"></use>
        </svg>
      </button>
      <form class="form contact-form">
        <p class="form__title">Залиште свої дані, ми вам передзвонимо</p>
        <div class="form__field">
          <label for="text">Ім'я</label>
          <svg class="form__icon" width="18" height="18">
            <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-person-black"></use>
          </svg>
          <input type="text" name="text" id="text" autofocus />
        </div>
        <div class="form__field">
          <label for="tel">Телефон </label>
          <svg class="form__icon" width="18" height="18">
            <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-phone-black"></use>
          </svg>
          <input type="tel" name="tel" id="tel" />
        </div>
        <div class="form__field">
          <label for="email">Пошта </label>
          <svg class="form__icon" width="18" height="18">
            <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-email-black"></use>
          </svg>
          <input type="email" name="email" id="email" />
        </div>
        <div class="form-text">
          <label class="form-text__title" for="comments">Коментар </label>
          <textarea class="form-text__comment" name="comments" id="comments" placeholder="Введіть текст"></textarea>
        </div>
        <div class="policy">
          <label class="policy__label">
            <input class="checkbox" type="checkbox" name="policy" value="policy" />
            <span class="policy__icon">
              <svg class="icon-check" width="16" height="15">
                <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-icon-check"></use>
              </svg>
            </span>
            Погоджуюся з розсилкою та приймаю
            <a class="contract" href="">Умови договору</a>
          </label>
        </div>
        <button type="submit" class="form__button">Відправити</button>
      </form>
    </div>
  </div>
</main>
<!-- footer -->
<?php get_footer(); ?>