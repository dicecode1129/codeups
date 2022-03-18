<?php get_header(); ?>
  <!-- main -->
  <main class="main">
    <div class="page-visual page-visual--contact-bg">
      <h2 class="page-visual__title"><?php the_title(); ?></h2>
    </div>
    <!-- breadcrumb -->
    <div class="breadcrumb breadcrumb-layout">
    <?php bcn_display(); ?>
    </div><!-- /breadcrumb -->
    </div> 
    <div class="contact-form contact-form-layout">
      <div class="contact-form__error error-content">
        <p class="error-content__text">
         ※必要事項を入力してください
        </p>
      </div>
      <?php the_content(); ?>
    </div>
  </main><!-- /main -->
<?php get_footer(); ?>