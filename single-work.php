<?php get_header(); ?>
  <!-- main -->
  <main class="main main-single">
    <!-- breadcrumb -->
    <div class="breadcrumb breadcrumb-layout">
      <?php bcn_display(); ?>
    </div><!-- /breadcrumb -->
    <section class="single-layout">
      <?php
        if ( have_posts() ) :
        while ( have_posts() ) :
          the_post();
      ?>
      <div class="single-layout__inner works-detail">
        <h1 class="works-detail__title single-title">
         <?php the_title(); ?>
        </h1>
        <div class="works-detail__info single-info">
          <time class="single-info__time" datetime="<?php the_time('c'); ?>">
          <?php the_time('Y.n.j'); ?>
        </time>
          <div class="single-info__category">
          <a href="<?php echo esc_url( get_term_link( get_the_terms( get_the_ID(), 'results' )[0], 'results' ) ); ?>">
           <?php echo esc_html( get_the_terms( get_the_ID(), 'results' )[0]->name ); ?>
          </a>
          </div>
        </div>
        <div class="works-detail__thumbnail">
          <!-- Slider main container -->
          <div class="swiper works-detail__swiper-main">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <?php if ( get_field( 'work' ) ) : ?>
              <div class="swiper-slide works-detail__img">
                <div class="works-detail__img-item">
                  <img src="<?php the_field( 'slide01' ); ?>" alt="">
                </div>
              </div>
              <div class="swiper-slide works-detail__img">
                <div class="works-detail__img-item">
                <img src="<?php the_field( 'slide02' ); ?>" alt="">
                </div>
              </div>
              <div class="swiper-slide works-detail__img">
                <div class="works-detail__img-item">
                <img src="<?php the_field( 'slide03' ); ?>" alt="">
                </div>
              </div>
              <div class="swiper-slide works-detail__img">
                <div class="works-detail__img-item">
                <img src="<?php the_field( 'slide04' ); ?>" alt="">
                </div>
              </div>
              <div class="swiper-slide works-detail__img">
                <div class="works-detail__img-item">
                <img src="<?php the_field( 'slide05' ); ?>" alt="">
                </div>
              </div>
              <div class="swiper-slide works-detail__img">
                <div class="works-detail__img-item">
                <img src="<?php the_field( 'slide06' ); ?>" alt="">
                </div>
              </div>
              <div class="swiper-slide works-detail__img">
                <div class="works-detail__img-item">
                <img src="<?php the_field( 'slide07' ); ?>" alt="">
                </div>
              </div>
              <div class="swiper-slide works-detail__img">
                <div class="works-detail__img-item">
                <img src="<?php the_field( 'slide08' ); ?>" alt="">
                </div>
              </div>
              <?php endif; ?>
            </div>
            <div class="swiper-button-prev works-detail__prev-btn"></div>
            <div class="swiper-button-next works-detail__next-btn"></div>
          </div>

          <div class="swiper works-detail__swiper-sub">
            <div class="swiper-wrapper">
              <!-- Slides -->
              <?php if ( get_field( 'work' ) ) : ?>
              <div class="swiper-slide works-detail__gallery">
                <div class="works-detail__gallery-item">
                <img src="<?php the_field( 'slide01' ); ?>" alt="">
                </div>
              </div>
              <div class="swiper-slide works-detail__gallery">
                <div class="works-detail__gallery-item">
                <img src="<?php the_field( 'slide02' ); ?>" alt="">
                </div>
              </div>
              <div class="swiper-slide works-detail__gallery">
                <div class="works-detail__gallery-item">
                <img src="<?php the_field( 'slide03' ); ?>" alt="">
                </div>
              </div>
              <div class="swiper-slide works-detail__gallery">
                <div class="works-detail__gallery-item">
                <img src="<?php the_field( 'slide04' ); ?>" alt="">
                </div>
              </div>
              <div class="swiper-slide works-detail__gallery">
                <div class="works-detail__gallery-item">
                <img src="<?php the_field( 'slide05' ); ?>" alt="">
                </div>
              </div>
              <div class="swiper-slide works-detail__gallery">
                <div class="works-detail__gallery-item">
                <img src="<?php the_field( 'slide06' ); ?>" alt="">
                </div>
              </div>
              <div class="swiper-slide works-detail__gallery">
                <div class="works-detail__gallery-item">
                <img src="<?php the_field( 'slide07' ); ?>" alt="">
                </div>
              </div>
              <div class="swiper-slide works-detail__gallery">
                <div class="works-detail__gallery-item">
                <img src="<?php the_field( 'slide08' ); ?>" alt="">
                </div>
              </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="works-detail__content">
          <dl class="works-detail__point">
          <?php if ( get_field( 'work' ) ) : ?>
            <div class="works-detail__point-box">
              <dt class="works-detail__point-title">制作のポイント</dt>
              <dd class="works-detail__point-text">
              <?php the_field( 'work' ); ?>
              </dd>
            </div>
            <div class="works-detail__point-box">
              <dt class="works-detail__point-title">デザインのポイント</dt>
              <dd class="works-detail__point-text">
              <?php the_field( 'design' ); ?>
              </dd>
            </div>
            <div class="works-detail__point-box">
              <dt class="works-detail__point-title">その他</dt>
              <dd class="works-detail__point-text">
              <?php the_field( 'other' ); ?>
              </dd>
            </div>
            <?php endif; ?>
          </dl>
        </div>
      </div>
      <?php
        endwhile;
        endif;
      ?>
    </section>   
    <div class="pagenation pagenation-layout">   
      <?php if (get_previous_post()): ?>
	    <?php previous_post_link('%link', 'prev'); ?>
      <?php endif; ?>
      <a href="<?php echo home_url('/work') ?>" class="page-numbers">一覧</a>
      <?php if (get_next_post()): ?>
	    <?php next_post_link('%link', 'next'); ?>
      <?php endif; ?>
    </div>
    <article class="article article-layout">
      <p class="article__title">関連記事</p>
      <?php
      $related_query = new WP_Query(
        array(
          'post_type' => 'work',
          'post__not_in' => array( $post->ID ),
          'posts_per_page' => '4',
          'tax_query' => array(
            'relation' => 'AND',
            array(
              'taxonomy' => 'results',
              'field'    => 'slug',
              'terms'    => array( 'coding', 'ec', 'lp' ),
            ),
          ),
        ) 
      );
      ?>
      <?php if ( $related_query->have_posts() ) : ?>
      <div class="article__cards cards-connection">
      <?php while ( $related_query->have_posts() ) : ?>
        <?php $related_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="cards-connection__item card">
          <figure class="card__img card__img--article">
          <?php
            if ( has_post_thumbnail() ) {
              the_post_thumbnail( 'my_thumbnail' );
            } else {
              echo '<img src="' . esc_url( get_template_directory_uri() ) . '/img/noimg.png" alt="">';
            }
          ?>
          </figure>
          <div class="card__body">
           <h3 class="card__title">
             <?php the_title(); ?>
           </h3>
          </div>
          <div class="card__info">
           <span class="card__category">
           <?php echo esc_html( get_the_terms( get_the_ID(), 'results' )[0]->name ); ?>
           </span>
           <time class="card__date" datetime="<?php the_time('c'); ?>">
           <?php the_time('Y.n.j'); ?>
          </time>
         </div>
        </a>
        <?php endwhile; ?>
      </div>
      <?php endif; ?>
  <?php wp_reset_postdata(); ?>
    </article>
    <?php get_footer(); ?>