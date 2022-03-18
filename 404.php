<?php get_header(); ?>
  <!-- main -->
  <main class="main">
  <div class="not-found not-found-layout">
      <div class="not-found__inner">
        <p class="not-found__title">404 Not Found</p>
        <div class="not-found__text">お探しのページは見つかりませんでした。</div>
        <div class="not-found__btn">
          <a href="<?php echo home_url('/'); ?>" class="button">topへ</a>
        </div>
      </div>
    </div>
  </main><!-- /main -->
<?php get_footer(); ?>