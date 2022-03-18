<?php get_header(); ?>
  <!-- main -->
  <main class="main main-single">
    <!-- breadcrumb -->
    <div class="breadcrumb breadcrumb-layout">
      <?php bcn_display(); ?>
    </div><!-- /breadcrumb -->
    <section class="single-layout">
      <div class="single-layout__inner blog-detail">
        <h2 class="blog-detail__title single-title">
          <?php the_title(); ?>
        </h2>
        <div class="blog-detail__info single-info">
          <time class="single-info__time" datetime="<?php the_time('c'); ?>">
            <?php the_time('Y.n.j'); ?>
          </time>
          <div class="single-info__category">
          <?php
            $category = get_the_category();
            echo '<a href="'.get_category_link($category[1]->term_id).'">'.$category[1]->name.'</a>';
          ?>
          </div>
        </div>
        <div class="blog-detail__img-box">
          <figure class="blog-detail__img">
            <?php 
              if(has_post_thumbnail()) {
                the_post_thumbnail( 'large' );
              }
            ?>
          </figure>
        </div>
        <div class="blog-detail__content">
          <?php the_content(); ?>
        </div>
      </div>
    </section>
    <div class="pagenation pagenation-layout">   
    <?php if (get_previous_post()): ?>
	    <?php previous_post_link('%link', 'prev'); ?>
      <?php endif; ?>
      <a href="<?php echo home_url('/category/news-archive') ?>" class="page-numbers">一覧</a>
      <?php if (get_next_post()): ?>
	    <?php next_post_link('%link', 'next'); ?>
      <?php endif; ?>
    </div>
    <article class="article article-layout">
      <p class="article__title">関連記事</p>
      <?php if( has_category() ) {
      $post_cats = get_the_category();
      $cat_ids = array();
      //所属カテゴリーのIDリストを作っておく
      foreach($post_cats as $cat) {
      $cat_ids[] = $cat->term_id;
      }
      }

      $myposts = get_posts( array(
      'post_type' => 'post', // 投稿タイプ
      'posts_per_page' => '4', // ８件を取得
      'post__not_in' => array( $post->ID ),// 表示中の投稿を除外
      'category__in' => $cat_ids, // この投稿と同じカテゴリーに属する投稿の中から
      'orderby' => 'rand' // ランダムに
      ) );
      if( $myposts ): ?>
      <div class="article__cards cards-connection">
      <?php foreach($myposts as $post): setup_postdata($post);?>
        <a href="<?php the_permalink(); ?>" class="cards-connection__item card">
          <figure class="card__img card__img--article">
          <?php
            if (has_post_thumbnail() ) {
            // アイキャッチ画像が設定されてればミディアムサイズで表示
            the_post_thumbnail('large');
            } else {
            // なければnoimage画像をデフォルトで表示
            echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
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
           <?php 
              $category = get_the_category();
              if($category[1]) {
                echo $category[1]->cat_name;
              }
            ?>
           </span>
           <time class="card__date" datetime="<?php the_time('c'); ?>">
           <?php the_time('Y.n.j'); ?>
           </time>
         </div>
        </a>
        <?php endforeach; wp_reset_postdata(); ?>
      </div>
      <?php endif; ?>
    </article>
<?php get_footer(); ?>