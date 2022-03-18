<?php if(is_page(array('172','267','271'))) : ?>
  <footer class="footer">
    <div class="footer__inner">
      <div class="footer__content">
        <p class="footer__logo">
          <a href="<?php echo home_url('/'); ?>">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/common/CodeUps.svg" alt="">
          </a>
        </p>
        <?php
        wp_nav_menu(
        //.header-listを置き換えて、PC用メニューを動的に表示する
        array(
        'depth' => 1,
        'theme_location' => 'footer', //グローバルメニューをここに表示すると指定
        'container' => 'false',
        'menu_class' => 'footer-nav',
        )
        );
        ?>
      </div>
      </div>
    <p class="footer__copyright">
     <small> &copy; 2021 CodeUps Inc.</small>
    </p>
  </footer><!-- /footer -->
  <div class="page-top">
    <a href="#"></a>
  </div>
  <!-- JavaScript -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <?php wp_footer(); ?>
</body>
</html>
<?php else: ?>
<section class="contact contact-layout">
      <div class="section-header contact__title">
        <div class="section-header__inner">
          <h2 class="section-header__title">
            お問い合わせ
          </h2>
          <p class="section-header__subtitle section-header__subtitle--top">
            Contact
          </p>
        </div>
      </div>
      <div class="contact__inner">
        <div class="contact__content">
          <p class="contact__text">
            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </p>
          <div class="contact__btn">
            <a href="<?php echo home_url('/contact'); ?>" class="button">
            お問い合わせへ
          </a>
          </div>
        </div>
      </div>
    </section>
  </main><!-- /main -->
  <!-- footer -->
  <footer class="footer">
    <div class="footer__inner">
      <div class="footer__content">
        <p class="footer__logo">
          <a href="<?php echo home_url('/'); ?>">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/common/CodeUps.svg" alt="">
          </a>
        </p>
        <?php
        wp_nav_menu(
        //.header-listを置き換えて、PC用メニューを動的に表示する
        array(
        'depth' => 1,
        'theme_location' => 'footer', //グローバルメニューをここに表示すると指定
        'container' => 'false',
        'menu_class' => 'footer-nav',
        )
        );
        ?>
      </div>
      </div>
    <p class="footer__copyright">
     <small> &copy; 2021 CodeUps Inc.</small>
    </p>
  </footer><!-- /footer -->
  <div class="page-top">
    <a href="#"></a>
  </div>
  <!-- JavaScript -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <?php wp_footer(); ?>
</body>
</html>
<?php endif; ?>