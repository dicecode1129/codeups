<?php get_header(); ?>
  <!-- main -->
  <main class="main">
    <div class="page-visual page-visual--works-bg">
      <h2 class="page-visual__title">制作実績</h2>
    </div>
    <!-- breadcrumb -->
    <div class="breadcrumb breadcrumb-layout">
      <?php bcn_display(); ?>
    </div><!-- /breadcrumb -->
    <!-- genre -->
    <div class="genre genre-layout">
      <div class="genre__link genre__link--current">
        <a href="<?php echo esc_url( get_post_type_archive_link( 'work' ) ); ?>" class="genre-nav__active">
          All
        </a>
      </div>
      <?php
        $genre_terms = get_terms( 'results', array( 'hide_empty' => false ) );
        foreach ( $genre_terms as $genre_term ) :
      ?>
      <div class="genre__link">
        <a href="<?php echo esc_url( get_term_link( $genre_term, 'results' ) ); ?>" class="">
        <?php echo esc_html( $genre_term->name ); ?>
        </a>
      </div>
      <?php endforeach; ?>
    </div><!-- genre -->
    <div class="works-page works-page-layout">
      <?php
        if ( have_posts() ) :
      ?>
      <div class="works-page__wrap">
      <?php while ( have_posts() ) : the_post();?>
        <a href="<?php the_permalink(); ?>" class="works-page__link">
          <div class="works-page__img-box">
            <div class="works-page__img">
            <?php 
              if(has_post_thumbnail()) {
                the_post_thumbnail( 'my_thumbnail' );
              }
             ?>
            </div>
            <span class="works-page__category">
            <?php echo esc_html( get_the_terms( get_the_ID(), 'results' )[0]->name ); ?>
            </span>
          </div>
          <p class="works-page__title">
          <?php the_title(); ?>
          </p>
        </a>
        <?php endwhile; ?>
      </div>
      <?php endif; ?>
    </div>
    <!-- /pagenation -->
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
    <?php endif; ?><!-- /pagenation -->
  <?php get_footer(); ?>