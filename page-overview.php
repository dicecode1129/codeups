<?php get_header(); ?>
  <!-- main -->
  <main class="main">
    <div class="page-visual page-visual--overview-bg">
      <h2 class="page-visual__title"><?php the_title(); ?></h2>
    </div>
    <!-- breadcrumb -->
    <div class="breadcrumb breadcrumb-layout">
      <?php bcn_display(); ?>
    </div><!-- /breadcrumb -->
    <div class="overview-page overview-page-layout">
        <dl class="overview-page__items">
          <div class="overview-page__item">
            <dt class="overview-page__title">会社名</dt>
            <dd class="overview-page__text">株式会社CodeUps</dd>
          </div>
          <div class="overview-page__item">
            <dt class="overview-page__title">設立</dt>
            <dd class="overview-page__text">テキストが入ります。</dd>
          </div>
          <div class="overview-page__item">
            <dt class="overview-page__title">資本金</dt>
            <dd class="overview-page__text">テキストが入ります。</dd>
          </div>
          <div class="overview-page__item">
            <dt class="overview-page__title">売上高</dt>
            <dd class="overview-page__text">テキストが入ります。</dd>
          </div>
          <div class="overview-page__item">
            <dt class="overview-page__title">代表者</dt>
            <dd class="overview-page__text">テキストが入ります。</dd>
          </div>
          <div class="overview-page__item">
            <dt class="overview-page__title">従業員数</dt>
            <dd class="overview-page__text">テキストが入ります。</dd>
          </div>
          <div class="overview-page__item">
            <dt class="overview-page__title">事業内容</dt>
            <dd class="overview-page__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
            </dd>
          </div>
          <div class="overview-page__item">
            <dt class="overview-page__title">所在地</dt>
            <dd class="overview-page__text">東京</dd>
          </div>
        </dl>
      </div>
      <div class="overview-page__map">
        <div class="overview-page__iframe">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.7477985333194!2d139.74324421555062!3d35.65858483882029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2z5p2x5Lqs44K_44Ov44O8!5e0!3m2!1sja!2sjp!4v1642667610632!5m2!1sja!2sjp" width="1100" height="367" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
   <?php get_footer(); ?>