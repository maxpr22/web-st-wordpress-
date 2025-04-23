<?php
/**
 * The template for displaying category archives
 */
get_header(); ?>

<main>
  <section class="section">
    <div class="container"> 
      <ul class="filter">
        <?php
        $categories = get_categories();
        $current_cat = get_query_var('cat');
        
        $portfolio_page = get_page_by_path('portfolio');
        $portfolio_id = $portfolio_page ? $portfolio_page->ID : 0;
        ?>
        <li>
          <a href="<?php echo $portfolio_id ? get_permalink($portfolio_id) : home_url(); ?>" class="filter__button">Усі</a>
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
        if (have_posts()) :
          while (have_posts()) : the_post();
          
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
        ?>
      </ul>
      
      <?php if (the_posts_pagination()) : ?>
      <div class="pagination">
        <?php
        the_posts_pagination(array(
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