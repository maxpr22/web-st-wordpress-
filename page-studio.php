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
            <li class="mobile-nav__item">
              <a class="mobile-nav__link" href="<?php echo get_permalink( get_page_by_path('studio') ); ?>">Студія</a>
            </li>
            <li class="mobile-nav__item">
              <a class="mobile-nav__link" href="<?php echo get_permalink( get_page_by_path('portfolio') ); ?>">Портфоліо</a>
            </li>
            <li class="mobile-nav__item">
              <a class="mobile-nav__link" href="">Контакти</a>
            </li>
          </ul>
        </nav>
        <address class="mobile-contact">
          <ul class="mobile-contact__list">
            <li class="mobile-contact__item">
              <a class="mobile-contact__phone" href="tel:+380961111111"> +38 096 111 11 11</a>
            </li>
            <li class="mobile-contact__item">
              <a class="mobile-contact__mail" href="mailto:info@devstudio.com">
                info@devstudio.com</a
              >
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
          <h1 class="hero__title">Ефективні рішення для вашого бізнесу</h1>
          <button data-modal-open type="button" class="hero__button">Замовити послугу</button>
        </div>
      </section>
      <!-- benefits -->
      <section class="section benefits">
        <div class="container">
          <h2 class="benefits__title visually-hidden">Наші переваги</h2>
          <ul class="benefits-list">
            <li class="benefits-list__item">
              <div class="benefits-list__picture">
                <svg width="70" height="70">
                  <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-antenna"></use>
                </svg>
              </div>
              <h3 class="benefits-list__title">УВАГА ДО ДЕТАЛЕЙ</h3>
              <p class="benefits-list__text">
                Ідейні міркування, і навіть початок повсякденної роботи з формування позиції.
              </p>
            </li>
            <li class="benefits-list__item">
              <div class="benefits-list__picture">
                <svg width="70" height="70">
                  <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-clock"></use>
                </svg>
              </div>
              <h3 class="benefits-list__title">ПУНКТУАЛЬНІСТЬ</h3>
              <p class="benefits-list__text">
                Завдання організації, особливо рамки і місце навчання кадрів тягне у себе.
              </p>
            </li>
            <li class="benefits-list__item">
              <div class="benefits-list__picture">
                <svg width="70" height="70">
                  <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-diagram"></use>
                </svg>
              </div>
              <h3 class="benefits-list__title">ПЛАНУВАННЯ</h3>
              <p class="benefits-list__text">
                Так само консультація з широким активом значною мірою зумовлює.
              </p>
            </li>
            <li class="benefits-list__item">
              <div class="benefits-list__picture">
                <svg width="70" height="70">
                  <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-astronaut"></use>
                </svg>
              </div>
              <h3 class="benefits-list__title">СУЧАСНІ ТЕХНОЛОГІЇ</h3>
              <p class="benefits-list__text">
                Значимість цих проблем настільки очевидна, що реалізація планових завдань.
              </p>
            </li>
          </ul>
        </div>
      </section>
      <!-- our-works -->
      <section class="work-section">
        <div class="container">
          <h2 class="work-section__title">Чим ми займаємося</h2>
          <ul class="examples">
            <li class="examples__card">
              <div class="thumb">
                <p class="examples__text">Десктопні Додатки</p>
                <picture>
                  <source
                    srcset="<?php echo get_template_directory_uri(); ?>/images/box1.jpg 1x, ./images/box1@x2.jpg 2x"
                    sizes="370px"
                    type="image/jpeg" />
                  <img
                    class="examples__image"
                    src="<?php echo get_template_directory_uri(); ?>/images/box1.jpg"
                    alt="Десктоп"
                    width="370px" />
                </picture>
              </div>
            </li>
            <li class="examples__card">
              <div class="thumb">
                <p class="examples__text">Мобільні додатки</p>
                <picture>
                  <source
                    srcset="<?php echo get_template_directory_uri(); ?>/images/box2.jpg 1x, ./images/box2@x2.jpg 2x"
                    sizes="370px"
                    type="image/jpeg" />
                  <img
                    class="examples__image"
                    src="<?php echo get_template_directory_uri(); ?>/images/box2.jpg"
                    alt="Телефони"
                    width="370px" />
                </picture>
              </div>
            </li>
            <li class="examples__card">
              <div class="thumb">
                <p class="examples__text">Дизайнерські рішення</p>
                <picture>
                  <source
                    srcset="<?php echo get_template_directory_uri(); ?>/images/box3.jpg 1x, ./images/box3@x2.jpg 2x"
                    sizes="370px"
                    type="image/jpeg" />
                  <img
                    class="examples__image"
                    src="<?php echo get_template_directory_uri(); ?>/images/box3.jpg"
                    alt="Планшети"
                    width="370px" />
                </picture>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- our-command -->
      <section class="section command">
        <div class="container">
          <h2 class="command__title">Наша команда</h2>
          <ul class="members">
            <li class="members__item">
              <picture>
                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/images/face1480@x1.jpg 1x, ./images/face1480@x2.jpg 2x"
                  media="(max-width: 767px)"
                  type="image/jpeg" />
                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/images/face1768@x1.jpg 1x, ./images/face1768@x2.jpg 2x"
                  media="(min-width: 768px)"
                  type="image/jpeg" />
                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/images/face1.jpg 1x, ./images/face1@x2.jpg 2x"
                  media="(min-width: 1200px)"
                  type="image/jpeg" />
                <img
                  class="members__image"
                  src="<?php echo get_template_directory_uri(); ?>/images/face1.jpg"
                  alt="Product Designer"
                  width="270px" />
              </picture>
              <div class="description">
                <h3 class="description__subtitle">Ігор Дем'яненко</h3>
                <p class="description__text">Product Designer</p>
                <ul class="social-list">
                  <li>
                    <a class="social-list__link" href="">
                      <svg width="20" height="20">
                        <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-instagram"></use>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a class="social-list__link" href="">
                      <svg width="20" height="20">
                        <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-twitter"></use>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a class="social-list__link" href="">
                      <svg width="20" height="20">
                        <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-facebook"></use>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a class="social-list__link" href="">
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
                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/images/face2480@x1.jpg 1x, ./images/face2480@x2.jpg 2x"
                  media="(max-width: 767px)"
                  type="image/jpeg" />
                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/images/face2768@x1.jpg 1x, ./images/face2768@x2.jpg 2x"
                  media="(min-width: 768px)"
                  type="image/jpeg" />
                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/images/face2.jpg 1x, ./images/face2@x2.jpg 2x"
                  media="(min-width: 1200px)"
                  type="image/jpeg" />
                <img
                  class="members__image"
                  src="<?php echo get_template_directory_uri(); ?>/images/face2.jpg"
                  alt="Frontend Developer"
                  width="270px" />
              </picture>
              <div class="description">
                <h3 class="description__subtitle">Ольга Рєпіна</h3>
                <p class="description__text">Frontend Developer</p>
                <ul class="social-list">
                  <li>
                    <a class="social-list__link" href="">
                      <svg width="20" height="20">
                        <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-instagram"></use>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a class="social-list__link" href="">
                      <svg width="20" height="20">
                        <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-twitter"></use>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a class="social-list__link" href="">
                      <svg width="20" height="20">
                        <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-facebook"></use>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a class="social-list__link" href="">
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
                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/images/face3480@x1.jpg 1x, ./images/face3480@x2.jpg 2x"
                  media="(max-width: 767px)"
                  type="image/jpeg" />
                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/images/face3768@x1.jpg 1x, ./images/face3768@x2.jpg 2x"
                  media="(min-width: 768px)"
                  type="image/jpeg" />
                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/images/face3.jpg 1x, ./images/face3@x2.jpg 2x"
                  media="(min-width: 1200px)"
                  type="image/jpeg" />
                <img
                  class="members__image"
                  src="<?php echo get_template_directory_uri(); ?>/images/face3.jpg"
                  alt="Marketing"
                  width="270px" />
              </picture>
              <div class="description">
                <h3 class="description__subtitle">Микола Тарасов</h3>
                <p class="description__text">Marketing</p>
                <ul class="social-list">
                  <li>
                    <a class="social-list__link" href="">
                      <svg width="20" height="20">
                        <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-instagram"></use>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a class="social-list__link" href="">
                      <svg width="20" height="20">
                        <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-twitter"></use>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a class="social-list__link" href="">
                      <svg width="20" height="20">
                        <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-facebook"></use>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a class="social-list__link" href="">
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
                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/images/face4480@x1.jpg 1x, ./images/face4480@x2.jpg 2x"
                  media="(max-width: 767px)"
                  type="image/jpeg" />
                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/images/face4768@x1.jpg 1x, ./images/face4768@x2.jpg 2x"
                  media="(min-width: 768px)"
                  type="image/jpeg" />
                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/images/face4.jpg 1x, ./images/face4@x2.jpg 2x"
                  media="(min-width: 1200px)"
                  type="image/jpeg" />
                <img
                  class="members__image"
                  src="<?php echo get_template_directory_uri(); ?>/images/face4.jpg"
                  alt="UI Designer"
                  width="270px" />
              </picture>
              <div class="description">
                <h3 class="description__subtitle">Михайло Єрмаков</h3>
                <p class="description__text">UI Designer</p>
                <ul class="social-list">
                  <li>
                    <a class="social-list__link" href="">
                      <svg width="20" height="20">
                        <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-instagram"></use>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a class="social-list__link" href="">
                      <svg width="20" height="20">
                        <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-twitter"></use>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a class="social-list__link" href="">
                      <svg width="20" height="20">
                        <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-facebook"></use>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a class="social-list__link" href="">
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
              <textarea
                class="form-text__comment"
                name="comments"
                id="comments"
                placeholder="Введіть текст"></textarea>
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
