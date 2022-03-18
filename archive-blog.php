<?php get_header(); ?>
  <!-- main -->
  <main class="main">
    <div class="page-visual page-visual--blog-bg">
      <h2 class="page-visual__title">ブログ</h2>
    </div>
    <!-- breadcrumb -->
    <div class="breadcrumb breadcrumb-layout">
      <?php bcn_display(); ?>
    </div><!-- /breadcrumb -->
    <!-- genre -->
    <div class="genre genre-layout">
      <div class="genre__link genre__link--current">
        <a href="<?php echo esc_url( get_post_type_archive_link( 'blog' ) ); ?>" class="genre-nav__active">
          All
        </a>
      </div>
      <?php
        $genre_terms = get_terms( 'programming', array( 'hide_empty' => false ) );
        foreach ( $genre_terms as $genre_term ) :
      ?>
      <div class="genre__link">
        <a href="<?php echo esc_url( get_term_link( $genre_term, 'programming' ) ); ?>" class="">
        <?php echo esc_html( $genre_term->name ); ?>
        </a>
      </div>
      <?php endforeach; ?>
    </div><!-- genre -->
    <div class="blog-page blog-page-layout">
      <div class="blog-page__content">
      
      <?php
        if ( have_posts() ) :
       ?>
        <div class="blog-page__cards cards">
        <?php while ( have_posts() ) : the_post();?>
          <a href="<?php the_permalink(); ?>" class="cards__item card">
            <figure class="card__img">
             <?php 
              if(has_post_thumbnail()) {
                the_post_thumbnail( 'my_thumbnail' );
              }
             ?>
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
        <?php endif; ?>
      </div>
    </div>
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