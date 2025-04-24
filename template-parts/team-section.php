<?php
/**
 * Шаблон для відображення секції команди
 *
 * @package web-studio
 */

if (!defined('ABSPATH')) {
    exit;
}
?>


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
        <?php
        $team_query = new WP_Query(array(
            'post_type' => 'team',
            'posts_per_page' => -1,
            'orderby' => 'menu_order',
            'order' => 'ASC'
        ));

        if ($team_query->have_posts()) :
            while ($team_query->have_posts()) : $team_query->the_post();
                $position = get_post_meta(get_the_ID(), '_team_position', true);
                $instagram = get_post_meta(get_the_ID(), '_team_instagram', true);
                $twitter = get_post_meta(get_the_ID(), '_team_twitter', true);
                $facebook = get_post_meta(get_the_ID(), '_team_facebook', true);
                $linkedin = get_post_meta(get_the_ID(), '_team_linkedin', true);
                
                $thumb_id = get_post_thumbnail_id(get_the_ID());
                $img_src = wp_get_attachment_image_src($thumb_id, 'full');
                $img_url = $img_src ? $img_src[0] : get_template_directory_uri() . '/images/default-avatar.jpg';
        ?>
        <li class="members__item">
          <img class="members__image" src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" width="270px" />
          <div class="description">
            <h3 class="description__subtitle">
              <?php echo esc_html(get_the_title()); ?>
            </h3>
            <p class="description__text">
              <?php echo esc_html($position); ?>
            </p>
            <ul class="social-list">
              <?php if ($instagram) : ?>
              <li>
                <a class="social-list__link" href="<?php echo esc_url($instagram); ?>">
                  <svg width="20" height="20">
                    <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-instagram"></use>
                  </svg>
                </a>
              </li>
              <?php endif; ?>
              
              <?php if ($twitter) : ?>
              <li>
                <a class="social-list__link" href="<?php echo esc_url($twitter); ?>">
                  <svg width="20" height="20">
                    <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-twitter"></use>
                  </svg>
                </a>
              </li>
              <?php endif; ?>
              
              <?php if ($facebook) : ?>
              <li>
                <a class="social-list__link" href="<?php echo esc_url($facebook); ?>">
                  <svg width="20" height="20">
                    <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-facebook"></use>
                  </svg>
                </a>
              </li>
              <?php endif; ?>
              
              <?php if ($linkedin) : ?>
              <li>
                <a class="social-list__link" href="<?php echo esc_url($linkedin); ?>">
                  <svg width="20" height="20">
                    <use href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-linkedin"></use>
                  </svg>
                </a>
              </li>
              <?php endif; ?>
            </ul>
          </div>
        </li>
        <?php
            endwhile;
            wp_reset_postdata();
        else :
        ?>
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
        <?php endif; ?>
      </ul>
    </div>
  </section>