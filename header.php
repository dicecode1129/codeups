<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- meta情報 -->
  <title></title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <!-- ogp -->
  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  <!-- ファビコン -->
  <link rel="”icon”" href="" />
  <!-- swiper -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
  <?php wp_head(); ?>
</head>
<body>
  <!-- header -->
    <header id="js-header" class="header">
      <div class="header__inner">
      <?php if (is_home() || is_front_page() ) : ?>
        <h1 class="header__logo">
          <a href="<?php echo home_url('/'); ?>">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/common/CodeUps.svg" alt="">
          </a>
        </h1>
        <?php else : ?>
        <div class="header__logo">
          <a href="<?php echo home_url('/'); ?>">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/common/CodeUps.svg" alt="">
          </a>
        </div>
      <?php endif; ?>
        <nav class="header__nav nav">
        <?php
        wp_nav_menu(
        //.header-listを置き換えて、PC用メニューを動的に表示する
        array(
        'depth' => 1,
        'theme_location' => 'global', //グローバルメニューをここに表示すると指定
        'container' => 'false',
        'menu_class' => 'nav__menu',
        )
        );
        ?>
        </nav>
        <button class="hamburger js-hamburger">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <div class="sp-nav js-drawer-menu">
          <?php
          wp_nav_menu(
          //.header-listを置き換えて、PC用メニューを動的に表示する
          array(
          'depth' => 1,
          'theme_location' => 'drawer', //グローバルメニューをここに表示すると指定
          'container' => 'false',
          'menu_class' => 'sp-nav__items',
          )
          );
          ?>
        </div>
      </div>
    </header><!-- /header -->


