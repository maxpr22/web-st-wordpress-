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
  <section class="section">
    <div class="container">
      <ul class="filter">
        <?php
        $categories = get_categories();
        $current_cat = get_query_var('cat');
        ?>
        <li>
          <a href="<?php echo get_permalink(get_page_by_path('portfolio')->ID); ?>" class="filter__button <?php echo is_page('portfolio') && !$current_cat ? 'filter__button--current' : ''; ?>">Усі</a>
        </li>
        <?php foreach($categories as $category) : ?>
        <li>
          <a href="<?php echo get_category_link($category->term_id); ?>" class="filter__button <?php echo ($current_cat == $category->term_id) ? 'filter__button--current' : ''; ?>">
            <?php echo $category->name; ?>
          </a>
        </li>
        <?php endforeach; ?>
      </ul>
      
      <ul class="card">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 6, 
          'paged' => $paged
        );
        
        if ($current_cat) {
          $args['cat'] = $current_cat;
        }
        
        $blog_query = new WP_Query($args);
        
        if ($blog_query->have_posts()) :
          while ($blog_query->have_posts()) : $blog_query->the_post();
          
          $post_categories = get_the_category();
          $post_category = !empty($post_categories) ? esc_html($post_categories[0]->name) : 'Блог';
        ?>
        <li class="card__item">
          <a class="card__link" href="<?php the_permalink(); ?>">
            <div class="descr">
              <div class="descr__overlay">
                <p class="descr__text">
                  <?php echo wp_trim_words(get_the_excerpt(), 30, '...'); ?>
                </p>
              </div>
              <?php if (has_post_thumbnail()) : ?>
                <img class="card__image" src="<?php the_post_thumbnail_url('medium'); ?>" 
                  alt="<?php the_title_attribute(); ?>" width="370px" />
              <?php else : ?>
                <img class="card__image" src="<?php echo get_template_directory_uri(); ?>/images/default-blog.jpg"
                  alt="<?php the_title_attribute(); ?>" width="370px" />
              <?php endif; ?>
            </div>
            <div class="description-card">
              <h2 class="description-card__title"><?php the_title(); ?></h2>
              <p class="description-card__text"><?php echo $post_category; ?></p>
            </div>
          </a>
        </li>
        <?php
          endwhile;
        else :
        ?>
        <li class="no-posts">
          <p>Записів не знайдено.</p>
        </li>
        <?php
        endif;
        wp_reset_postdata();
        ?>
      </ul>
      
      <!-- Пагінація -->
      <?php if ($blog_query->max_num_pages > 1) : ?>
      <div class="pagination">
        <?php
        $big = 999999999;
        echo paginate_links(array(
          'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
          'format' => '?paged=%#%',
          'current' => max(1, get_query_var('paged')),
          'total' => $blog_query->max_num_pages,
          'prev_text' => '&laquo;',
          'next_text' => '&raquo;',
        ));
        ?>
      </div>
      <?php endif; ?>
      
    </div>
  </section>
</main>
<?php get_footer(); ?>