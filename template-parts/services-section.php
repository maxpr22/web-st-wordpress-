<?php
/**
 * Шаблон для відображення секції послуг
 *
 * @package web-studio
 */

// Перевірка, чи викликається файл напряму
if (!defined('ABSPATH')) {
    exit;
}
?>

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
        <?php
        $services_query = new WP_Query(array(
            'post_type' => 'services',
            'posts_per_page' => -1,
            'orderby' => 'menu_order',
            'order' => 'ASC'
        ));

        if ($services_query->have_posts()) :
            while ($services_query->have_posts()) : $services_query->the_post();
                $service_text = get_post_meta(get_the_ID(), '_service_text', true);
                if (empty($service_text)) {
                    $service_text = get_the_title();
                }
        ?>
        <li class="examples__card">
          <div class="thumb">
            <p class="examples__text"><?php echo esc_html($service_text); ?></p>
            <?php if (has_post_thumbnail()) : ?>
            <img class="examples__image" src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" width="370px" />
            <?php endif; ?>
          </div>
        </li>
        <?php
            endwhile;
            wp_reset_postdata();
        else :
        ?>
        <!-- Запасний варіант, якщо послуг немає -->
        <li class="examples__card">
          <div class="thumb">
            <p class="examples__text">Десктопні Додатки</p>
            <img class="examples__image" src="<?php echo esc_url(get_template_directory_uri() . '/images/box1.jpg'); ?>" alt="Десктоп" width="370px" />
          </div>
        </li>
        <li class="examples__card">
          <div class="thumb">
            <p class="examples__text">Мобільні додатки</p>
            <img class="examples__image" src="<?php echo esc_url(get_template_directory_uri() . '/images/box2.jpg'); ?>" alt="Телефони" width="370px" />
          </div>
        </li>
        <li class="examples__card">
          <div class="thumb">
            <p class="examples__text">Дизайнерські рішення</p>
            <img class="examples__image" src="<?php echo esc_url(get_template_directory_uri() . '/images/box3.jpg'); ?>" alt="Планшети" width="370px" />
          </div>
        </li>
        <?php endif; ?>
      </ul>
    </div>
  </section>