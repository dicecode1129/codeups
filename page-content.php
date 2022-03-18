<?php get_header(); ?>
  <!-- main -->
  <main class="main">
    <div class="page-visual page-visual--content-bg">
      <h2 class="page-visual__title"><?php the_title(); ?></h2>
    </div>
    <!-- breadcrumb -->
    <div class="breadcrumb breadcrumb-layout">
      <?php bcn_display(); ?>
    </div><!-- /breadcrumb -->
    <section class="content-page">
      <div class="content-page__philosophy">
        <h3 class="content-page__title">企業理念</h3>
        <p class="content-page__lead">
          説明が入ります。説明が入ります。説明が入ります。説明が入ります。
          説明が入ります。説明が入ります。説明が入ります。説明が入ります。
        </p>
      </div>
      <div class="content-page__wrap">
        <div id="content-01" class="content-page__content">
          <div class="content-page__img-box">
            <div class="content-page__img">
              <img src="<?php echo get_template_directory_uri();?>//assets/images/content/content01.jpg" alt="">
            </div>
          </div>
          <div class="content-page__text-content">
            <h3 class="content-page__subtitile">
              企業理念1
            </h3>
            <p class="content-page__text">
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
            </p>
          </div>
        </div>
        <div id="content-02" class="content-page__content content-page__content--reverse">
          <div class="content-page__img-box content-page__img-box--reverse ">
            <div class="content-page__img">
              <img src="<?php echo get_template_directory_uri();?>//assets/images/content/content02.jpg" alt="">
            </div>
          </div>
          <div class="content-page__text-content content-page__text-content--reverse">
            <h3 class="content-page__subtitile">
              企業理念2
            </h3>
            <p class="content-page__text">
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
            </p>
          </div>
        </div>
        <div id="content-03" class="content-page__content">
          <div class="content-page__img-box">
            <div class="content-page__img">
              <img src="<?php echo get_template_directory_uri();?>//assets/images/content/content03.jpg" alt="">
            </div>
          </div>
          <div class="content-page__text-content">
            <h3 class="content-page__subtitile">
              企業理念3
            </h3>
            <p class="content-page__text">
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
            </p>
          </div>
        </div>
      </div>
    </section>
 <?php get_footer(); ?>