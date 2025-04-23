<?php
/**
 * Шаблон для відображення сінгл постів
 */
get_header(); ?>

<main>
  <section class="section">
    <div class="container">
      <div class="single-post">
        <div class="breadcrumbs">
          <a href="<?php echo home_url(); ?>">Головна</a> &gt; 
          <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>">Блог</a> &gt; 
          <span><?php the_title(); ?></span>
        </div>
        
        <h1 class="single-post__title"><?php the_title(); ?></h1>
        
        <div class="single-post__meta">
          <span class="single-post__date"><?php echo get_the_date('d.m.Y'); ?></span>
          <?php
          $categories = get_the_category();
          if (!empty($categories)) :
          ?>
          <span class="single-post__category">
            <?php echo esc_html($categories[0]->name); ?>
          </span>
          <?php endif; ?>
        </div>
        
        <?php if (has_post_thumbnail()) : ?>
        <div class="single-post__featured">
          <?php the_post_thumbnail('large'); ?>
        </div>
        <?php endif; ?>
        
        <div class="single-post__content">
          <?php the_content(); ?>
        </div>
        
        <?php
        $tags = get_the_tags();
        if ($tags) :
        ?>
        <div class="single-post__tags">
          <?php foreach($tags as $tag) : ?>
          <a href="<?php echo get_tag_link($tag->term_id); ?>" class="single-post__tag">
            #<?php echo $tag->name; ?>
          </a>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>    
        
        <?php
        $related_args = array(
          'post_type' => 'post',
          'posts_per_page' => 3,
          'post__not_in' => array(get_the_ID()),
          'orderby' => 'rand'
        );
        
        if (!empty($categories)) {
          $category_ids = array();
          foreach($categories as $category) {
            $category_ids[] = $category->term_id;
          }
          $related_args['category__in'] = $category_ids;
        }
        
        $related_query = new WP_Query($related_args);
        
        if ($related_query->have_posts()) :
        ?>
        <div class="related-posts">
          <h2 class="related-posts__title">Схожі роботи</h2>
          <ul class="card">
            <?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
            <li class="card__item">
              <a class="card__link" href="<?php the_permalink(); ?>">
                <div class="descr">
                  <div class="descr__overlay">
                    <p class="descr__text">
                      <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
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
                  <p class="description-card__text"><?php echo get_the_date('d.m.Y'); ?></p>
                </div>
              </a>
            </li>
            <?php endwhile; ?>
          </ul>
        </div>
        <?php
        endif;
        wp_reset_postdata();
        ?>
        
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>