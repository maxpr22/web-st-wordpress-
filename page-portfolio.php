<?php
/**
 * Template Name: Portfolio Page
 */
get_header(); ?>

<main>
  <!-- mobile-menu -->
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
  <!-- filter of projects -->
  <section class="section">
    <div class="container">
      <h1 class="example__title visually-hidden">Наші роботи</h1>
      <ul class="filter">
        <li>
          <button type="button" class="filter__button filter__button--current">Усі</button>
        </li>
        <li><button type="button" class="filter__button">Веб-сайти</button></li>
        <li><button type="button" class="filter__button">Додатки</button></li>
        <li><button type="button" class="filter__button">Дизайн</button></li>
        <li><button type="button" class="filter__button">Маркетинг</button></li>
      </ul>
      <ul class="card">
        <li class="card__item">
          <a class="card__link" href="">
            <div class="descr">
              <div class="descr__overlay">
                <p class="descr__text">
                  Ресурс пропонує комплексні пропозиції з різним рівнем функціоналу та сервісів.
                  Все це дозволить відвідувачу отримати вичерпні відомості про компанію чи
                  приватну особу.
                </p>
              </div>
              <picture>
                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/images/project1_480@x1.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/project1_480@x2.jpg 2x"
                  media="(max-width: 767px)" type="image/jpeg" />
                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/images/project1_768@x1.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/project1_768@x2.jpg 2x"
                  media="(min-width: 768px) and (max-width: 1199px)" type="image/jpeg" />
                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/images/project1.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/project1@x2.jpg 2x"
                  media="(min-width: 1200px)" type="image/jpeg" />
                <img class="card__image" src="<?php echo get_template_directory_uri(); ?>/images/project1.jpg"
                  alt="Зображення людей на екрані ноутбука" width="370px" />
              </picture>
            </div>
            <div class="description-card description-card--fixed">
              <h2 class="description-card__title">Технокряк</h2>
              <p class="description-card__text">Веб-сайт</p>
            </div>
          </a>
        </li>
        <li class="card__item">
          <a class="card__link" href="">
            <div class="descr">
              <div class="descr__overlay">
                <p class="descr__text">
                  Цей дизайн створений для яскравого відображення динаміки та напруги
                  спортивного протистояння. Привертає увагу, передаючи атмосферу драйву та
                  емоцій.
                </p>
              </div>
              <picture>
                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/images/project2_480@x1.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/project2_480@x2.jpg 2x"
                  media="(max-width: 767px)" type="image/jpeg" />
                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/images/project2_768@x1.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/project2_768@x2.jpg 2x"
                  media="(min-width: 768px) and (max-width: 1199px)" type="image/jpeg" />
                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/images/project2.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/project2@x2.jpg 2x"
                  media="(min-width: 1200px)" type="image/jpeg" />
                <img class="card__image" src="<?php echo get_template_directory_uri(); ?>/images/project2.jpg"
                  alt="Зображення людей на екрані ноутбука" width="370px" />
              </picture>
            </div>
            <div class="description-card">
              <h2 class="description-card__title">
                Постер <span>New Orlean vs Golden Star</span>
              </h2>
              <p class="description-card__text">Дизайн</p>
            </div>
          </a>
        </li>
        <li class="card__item">
          <a class="card__link" href="">
            <div class="descr">
              <div class="descr__overlay">
                <p class="descr__text">
                  Додаток ресторану Seafood — це ваш персональний гід у світ свіжих
                  морепродуктів. Зручне меню, актуальні акції та швидке бронювання столиків в
                  кілька кліків.
                </p>
              </div>
              <picture>
                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/images/project3_480@x1.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/project3_480@x2.jpg 2x"
                  media="(max-width: 767px)" type="image/jpeg" />
                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/images/project3_768@x1.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/project3_768@x2.jpg 2x"
                  media="(min-width: 768px) and (max-width: 1199px)" type="image/jpeg" />
                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/images/project3.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/project3@x2.jpg 2x"
                  media="(min-width: 1200px)" type="image/jpeg" />
                <img class="card__image" src="<?php echo get_template_directory_uri(); ?>/images/project3.jpg"
                  alt="Зображення людей на екрані ноутбука" width="370px" />
              </picture>
            </div>
            <div class="description-card">
              <h2 class="description-card__title">Ресторан <span lang="en">Seafood</span></h2>
              <p class="description-card__text">Додаток</p>
            </div>
          </a>
        </li>
        <li class="card__item">
          <a class="card__link" href="">
            <div class="descr">
              <div class="descr__overlay">
                <p class="descr__text">
                  <span lang="en">Prime</span> допомагає залучати клієнтів, підвищувати
                  впізнаваність бренду та досягати ваших бізнес-цілей швидше. Обирайте
                  <span lang="en">Prime</span> — ваш шлях до успіху!
                </p>
              </div>
              <picture>
                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/images/project4_480@x1.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/project4_480@x2.jpg 2x"
                  media="(max-width: 767px)" type="image/jpeg" />
                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/images/project4_768@x1.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/project4_768@x2.jpg 2x"
                  media="(min-width: 768px) and (max-width: 1199px)" type="image/jpeg" />
                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/images/project4.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/project4@x2.jpg 2x"
                  media="(min-width: 1200px)" type="image/jpeg" />
                <img class="card__image" src="<?php echo get_template_directory_uri(); ?>/images/project4.jpg"
                  alt="Зображення людей на екрані ноутбука" width="370px" />
              </picture>
            </div>
            <div class="description-card">
              <h2 class="description-card__title">Проєкт <span lang="en">Prime</span></h2>
              <p class="description-card__text">Маркетинг</p>
            </div>
          </a>
        </li>
        <li class="card__item">
          <a class="card__link" href="">
            <div class="descr">
              <div class="descr__overlay">
                <p class="descr__text">
                  <span lang="en">Boxes</span> — зручний додаток для організації та
                  впорядкування ваших речей. Створюйте віртуальні коробки,додавайте предмети,
                  ведіть облік та знаходьте потрібне за лічені секунди
                </p>
              </div>
              <picture>
                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/images/project5_480@x1.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/project5_480@x2.jpg 2x"
                  media="(max-width: 767px)" type="image/jpeg" />
                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/images/project5_768@x1.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/project5_768@x2.jpg 2x"
                  media="(min-width: 768px) and (max-width: 1199px)" type="image/jpeg" />
                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/images/project5.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/project5@x2.jpg 2x"
                  media="(min-width: 1200px)" type="image/jpeg" />
                <img class="card__image" src="<?php echo get_template_directory_uri(); ?>/images/project5.jpg"
                  alt="Зображення людей на екрані ноутбука" width="370px" />
              </picture>
            </div>
            <div class="description-card">
              <h2 class="description-card__title">Проєкт <span lang="en">Boxes</span></h2>
              <p class="description-card__text">Додаток</p>
            </div>
          </a>
        </li>
        <li class="card__item">
          <a class="card__link" href="">
            <div class="descr">
              <div class="descr__overlay">
                <p class="descr__text">
                  <span lang="en"> Inspiration has no Borders</span> — це онлайн-простір, де
                  ідеї, креативність і культура об’єднуються без кордонів. Відкривайте для себе
                  унікальні історії, та діліться власними проєктами.
                </p>
              </div>
              <picture>
                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/images/project6_480@x1.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/project6_480@x2.jpg 2x"
                  media="(max-width: 767px)" type="image/jpeg" />
                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/images/project6_768@x1.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/project6_768@x2.jpg 2x"
                  media="(min-width: 768px) and (max-width: 1199px)" type="image/jpeg" />
                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/images/project6.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/project6@x2.jpg 2x"
                  media="(min-width: 1200px)" type="image/jpeg" />
                <img class="card__image" src="<?php echo get_template_directory_uri(); ?>/images/project6.jpg"
                  alt="Зображення людей на екрані ноутбука" width="370px" />
              </picture>
            </div>
            <div class="description-card">
              <h2 class="description-card__title">
                <span lang="en"> Inspiration has no Borders</span>
              </h2>
              <p class="description-card__text">Веб-сайт</p>
            </div>
          </a>
        </li>
        <li class="card__item">
          <a class="card__link" href="">
            <div class="descr">
              <div class="descr__overlay">
                <p class="descr__text">
                  Вишуканий дизайн, преміальні матеріали та продумана композиція кожної сторінки
                  створюють відчуття ексклюзивності. Видання, яке станне справжньою окрасою
                  вашої колекції.
                </p>
              </div>
              <picture>
                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/images/project7_480@x1.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/project7_480@x2.jpg 2x"
                  media="(max-width: 767px)" type="image/jpeg" />
                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/images/project7_768@x1.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/project7_768@x2.jpg 2x"
                  media="(min-width: 768px) and (max-width: 1199px)" type="image/jpeg" />
                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/images/project7.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/project7@x2.jpg 2x"
                  media="(min-width: 1200px)" type="image/jpeg" />
                <img class="card__image" src="<?php echo get_template_directory_uri(); ?>/images/project7.jpg"
                  alt="Зображення людей на екрані ноутбука" width="370px" />
              </picture>
            </div>
            <div class="description-card">
              <h2 class="description-card__title">
                Видання <span lang="en">Limited Edition</span>
              </h2>
              <p class="description-card__text">Дизайн</p>
            </div>
          </a>
        </li>
        <li class="card__item">
          <a class="card__link" href="">
            <div class="descr">
              <div class="descr__overlay">
                <p class="descr__text">
                  <span lang="en">LAB</span> — це творчий простір для тестування ідей та
                  впровадження інновацій у маркетингу.
                </p>
              </div>
              <picture>
                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/images/project8_480@x1.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/project8_480@x2.jpg 2x"
                  media="(max-width: 767px)" type="image/jpeg" />
                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/images/project8_768@x1.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/project8_768@x2.jpg 2x"
                  media="(min-width: 768px) and (max-width: 1199px)" type="image/jpeg" />
                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/images/project8.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/project8@x2.jpg 2x"
                  media="(min-width: 1200px)" type="image/jpeg" />
                <img class="card__image" src="<?php echo get_template_directory_uri(); ?>/images/project8.jpg"
                  alt="Зображення людей на екрані ноутбука" width="370px" />
              </picture>
            </div>
            <div class="description-card">
              <h2 class="description-card__title">Проєкт <span lang="en">LAB</span></h2>
              <p class="description-card__text">Маркетинг</p>
            </div>
          </a>
        </li>
        <li class="card__item">
          <a class="card__link" href="">
            <div class="descr">
              <div class="descr__overlay">
                <p class="descr__text">
                  <span lang="en">Growing Business</span> — ваш цифровий помічник для розвитку
                  бізнесу. Управління завданнями, аналіз фінансів, побудова стратегій і
                  моніторинг результатів — усе в одному місці.
                </p>
              </div>
              <picture>
                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/images/project9_480@x1.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/project9_480@x2.jpg 2x"
                  media="(max-width: 767px)" type="image/jpeg" />
                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/images/project9_768@x1.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/project9_768@x2.jpg 2x"
                  media="(min-width: 768px) and (max-width: 1199px)" type="image/jpeg" />
                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/images/project9.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/project9@x2.jpg 2x"
                  media="(min-width: 1200px)" type="image/jpeg" />
                <img class="card__image" src="<?php echo get_template_directory_uri(); ?>/images/project9.jpg"
                  alt="Зображення людей на екрані ноутбука" width="370px" />
              </picture>
            </div>
            <div class="description-card">
              <h2 class="description-card__title"><span lang="en">Growing Business</span></h2>
              <p class="description-card__text">Додаток</p>
            </div>
          </a>
        </li>
      </ul>
    </div>
  </section>
</main>
<?php get_footer(); ?>