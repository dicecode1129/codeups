<?php get_header(); ?>
  <!-- main -->
  <main class="main">
    <div class="page-visual page-visual--news-bg">
      <h2 class="page-visual__title">お知らせ</h2>
    </div>
    <!-- breadcrumb -->
    <div class="breadcrumb breadcrumb-layout">
      <?php bcn_display(); ?>
    </div><!-- /breadcrumb -->
    <?php if(have_posts()): ?>
    <div class="news-page news-page-layout">
      <?php while(have_posts()):the_post();?>
      <div class="news-page__content news-content">
        <div class="news-content__info">
          <span class="news-content__date" datetime="<?php the_time('c'); ?>">
          <?php the_time('Y.n.j'); ?>
          </span>
          <span class="news-content__category">
            <?php 
              $category = get_the_category();
              if($category[1]) {
                echo $category[1]->cat_name;
              }
            ?>
          </span>
        </div>
        <a href="<?php the_permalink(); ?>" class="news-content__text news-content__text--under">
          <?php the_title(); ?>
        </a>
      </div>
      <?php endwhile; ?>
    </div>
    <?php endif; ?>
    <?php if(paginate_links()) : ?>
    <div class="pagenation pagenation-layout">   
    <?php
      echo
      paginate_links(
      array(
      'end_size' => 1,
      'mid_size' => 1,
      'prev_next' => true,
      'prev_text' => 'prev',
      'next_text' => 'next',
      )
      );
    ?>
    </div>
    <?php endif; ?>
<?php get_footer(); ?>