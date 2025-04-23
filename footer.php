<footer class="footer">
  <div class="container footer__container">
    <div class="footer-address">
    <?php if (has_custom_logo()): ?>
          <div class="logo">
            <?php the_custom_logo(); ?>
          </div>
        <?php else: ?>
          <a href="./index.html" class="logo--inverse"><span class="logo__accent">Web</span>Studio</a>
        <?php endif; ?>
      <?php
$address = get_theme_mod('contact_address', 'м. Київ, пр-т Лесі Українки, 26');
$email = get_theme_mod('contact_email', 'info@devstudio.com');
$phone = get_theme_mod('contact_phone', '+380961111111');
$map_link = get_theme_mod('contact_map_link', 'https://goo.gl/maps/CPtrU1FHBa2aNyZL9');
?>

<address>
  <ul class="location">
    <li class="location__item">
      <a href="<?php echo esc_url($map_link); ?>" class="location__map" target="_blank" rel="noopener noreferrer nofollow">
        <?php echo esc_html($address); ?>
      </a>
    </li>
    <li class="location__item">
      <a href="mailto:<?php echo esc_attr($email); ?>" class="location__mail">
        <?php echo esc_html($email); ?>
      </a>
    </li>
    <li class="location__item">
      <a href="tel:<?php echo esc_attr($phone); ?>" class="location__phone">
        <?php echo esc_html($phone); ?>
      </a>
    </li>
  </ul>
</address>

    </div>
    <div class="footer-social">
      <p class="footer-social__text">Приєднуйтесь</p>
      <ul class="footer-social__list">
        <li>
          <a class="footer-social__item" href="">
            <svg width="20px" height="20px">
              <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-instagram-footer"></use>
            </svg>
          </a>
        </li>
        <li>
          <a class="footer-social__item" href="">
            <svg width="20px" height="20px">
              <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-twitter-footer"></use>
            </svg>
          </a>
        </li>
        <li>
          <a class="footer-social__item" href="">
            <svg width="20px" height="20px">
              <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-facebook-footer"></use>
            </svg>
          </a>
        </li>
        <li>
          <a class="footer-social__item" href="">
            <svg width="20px" height="20px">
              <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-linkedin-footer"></use>
            </svg>
          </a>
        </li>
      </ul>
    </div>
    <form class="footer-form">
      <p class="footer-social__text">Підпишіться на розсилку</p>
      <div class="footer-form__box">
        <input type="email" class="footer-form__input" aria-label="email" placeholder="E-mail" />
        <button class="footer-form__button" type="submit">
          Підписатися
          <svg class="footer-form__img" width="24" height="24">
            <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-icon-send"></use>
          </svg>
        </button>
      </div>
    </form>
  </div>
</footer>
</body>

</html>