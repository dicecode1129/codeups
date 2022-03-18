<?php get_header(); ?>
  <!-- main -->
  <main class="main">
    <!-- main-visual -->
    <div class="main-visual">
      <div class="main-visual__content">
        <p class="main-visual__title"><?php bloginfo('name'); ?></p>
        <p class="main-visual__subtitle"><?php bloginfo('description'); ?></p>
      </div>
      <div class="swiper swiper1">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <div class="slide-img slide-img01">
              
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slide-img slide-img02">
              
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slide-img slide-img03">
              
            </div>
          </div>
        </div>
      </div>
    </div><!-- main-visual -->
    <div class="news">
      <div class="news__inner"> 
      <?php query_posts('posts_per_page=1'); ?>
        <?php if(have_posts()): ?>
          <?php while(have_posts()):the_post();?>
        <div class="news__content news-content">                 
          <div class="news-content__info">
            <time class="news-content__date" datetime="<?php the_time('c'); ?>">
            <?php the_time('Y.n.j'); ?>
            </time>
            <span class="news-content__category">
              <?php 
                $category = get_the_category();
                if($category[1]) {
                  echo $category[1]->cat_name;
                }
              ?>
            </span>
          </div>
          <a href="<?php the_permalink(); ?>" class="news-content__text">
            <?php the_title(); ?>
          </a>
          <?php
            $category_id = get_cat_ID( 'お知らせ一覧' );
            $category_link = get_category_link( $category_id );
          ?>
          <div class="news__pc-btn u-desktop">
            <a href="<?php echo esc_url( $category_link ); ?>" class="news-button">
              すべて見る
            </a>
          </div>
          <div class="news__sp-btn u-mobile">
            <a href="<?php echo esc_url( $category_link ); ?>" class="button">
            すべて見る
          </a>
          </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
     <div class="line01">
       <section class="content">
         <div class="section-header">
           <div class="section-header__inner">
             <h2 class="section-header__title  content__title">
               事業内容
             </h2>
             <p class="section-header__subtitle">
               Content
             </p>
           </div>
         </div>
           <ul class="contents content__list ">
             <li class="contents__item contents--01">
               <a href="<?php echo home_url('/content') ?>">経営理念ページへ</a>
             </li>
             <li class="contents__item contents--02">
               <a href="<?php echo home_url('/content') ?>#content-01">理念1へ</a>
             </li>
             <li class="contents__item contents--03">
               <a href="<?php echo home_url('/content') ?>#content-02">理念2へ</a>
             </li>
             <li class="contents__item contents--04">
               <a href="<?php echo home_url('/content') ?>#content-03">理念3へ</a>
             </li>
           </ul>
       
       </section>
       <section class="works">
         <div class="section-header">
           <div class="section-header__inner">
             <h2 class="section-header__title works__title">
               制作実績
             </h2>
             <p class="section-header__subtitle section-header__subtitle--reverse">
               Works
             </p>
           </div>
         </div>
         <div class="works__bg">
           <div class="works__inner">
             <div class="works__box">
               <div class="swiper-box works__swiper">
                 <div class="swiper swiper2">
                   <div class="swiper-wrapper">
                     <div class="swiper-slide works__img">
                       <img src="<?php echo get_template_directory_uri();?>/assets/images/top/works01.jpg" alt="">
                     </div>
                     <div class="swiper-slide works__img">
                       <img src="<?php echo get_template_directory_uri();?>/assets/images/top/works02.jpg" alt="">
                     </div>
                     <div class="swiper-slide works__img">
                       <img src="<?php echo get_template_directory_uri();?>/assets/images/top/works03.jpg" alt="">
                     </div>
                   </div>
                 </div>
                 <div class="swiper-pagination works__pagination"></div>
               </div>
               <div class="works__content">
                 <h3 class="works__content-title">メインタイトルが入ります</h3>
                 <p class="works__text">
                   テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                 </p>
                 <div class="works__btn">
                   <a href="<?php echo home_url('/work') ?>" class="button">詳しく見る</a>
                 </div>
             </div>
             </div>
           </div>
         </div>
       </section>
     </div>
     <div class="line02">

       <section class="overview">
         <div class="section-header overview__title">
           <div class="section-header__inner">
             <h2 class="section-header__title">
               企業概要
             </h2>
             <p class="section-header__subtitle orverview__entitle">
               Overview
             </p>
           </div>
         </div>
         <div class="overview__bg">
           <div class="overview__inner">
             <div class="overview__content">
               <div class="overview__img-box">
                 <div class="overview__img">
                   <img src="<?php echo get_template_directory_uri();?>/assets/images/top/overview.jpg" alt="">
                 </div>
               </div>
               <div class="overview__text-content">
                 <h3 class="overview__subtitle">メインタイトルが入ります</h3>
                 <p class="overview__text">
                   テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                 </p>
                 <div class="overview__btn">
                   <a href="<?php echo home_url('/overview') ?>" class="button">
                   詳しく見る
                  </a>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </section>
       <section class="blog">
         <div class="section-header blog__title">
           <div class="section-header__inner">
             <h2 class="section-header__title">
               ブログ
             </h2>
             <p class="section-header__subtitle section-header__subtitle--reverse blog__entitle">
               Blog
             </p>
           </div>
         </div>
         <div class="blog__inner">
           <div class="blog__content">
           <?php 
                $args = array(
                  'post_type' => 'blog',
                  'posts_per_page' => '3'
                  );
              $the_query = new WP_query($args);
              if ($the_query->have_posts()):
              ?>
            <div class="blog__cards cards">
              <?php while($the_query->have_posts()): $the_query->the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="cards__item card">
                  <figure class="card__img">
                    <?php the_post_thumbnail('full'); ?>
                  </figure>
                  <div class="card__body">
                    <h3 class="card__title">
                      <?php the_title(); ?>
                    </h3>
                    <p class="card__text">
                     <?php the_excerpt(); ?>
                    </p>
                  </div>
                  <div class="card__info">
                    <span class="card__category">
                    <?php echo esc_html( get_the_terms( get_the_ID(), 'programming' )[0]->name ); ?>
                    </span>
                    <time class="card__date" datetime="<?php the_time('c'); ?>">
                    <?php the_time('Y.n.j'); ?>
                    </time>
                  </div>
                  <?php 
                    $post_time = get_the_time('U');
                    $days = 3;
                    $last = time() - ($days * 24 * 60 *60);
                    if($post_time > $last) {
                      echo '<p class="card__latest">New</p> ';
                    }
                  ?>
                </a>
                <?php endwhile; ?>
              </div>
              <?php wp_reset_postdata(); endif; ?>
              <div class="blog__btn">
                <a href="<?php echo home_url('/blog') ?>" class="button">詳しく見る</a>
              </div>
           </div>
         </div>
       </section>
     </div>
   <?php get_footer(); ?>



   