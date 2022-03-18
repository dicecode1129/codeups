<?php get_header(); ?>
  <!-- main -->
  <main class="main main-single">
    <!-- breadcrumb -->
    <div class="breadcrumb breadcrumb-layout">
      <?php bcn_display(); ?>
    </div><!-- /breadcrumb -->
    <section class="single-layout">
    <?php
      if ( have_posts() ) :
      while ( have_posts() ) :
        the_post();
    ?>
      <div class="single-layout__inner blog-detail">
        <h2 class="blog-detail__title single-title">
          <?php the_title(); ?>
        </h2>
        <div class="blog-detail__info single-info">
          <time class="single-info__time" datetime="<?php the_time('c'); ?>">
          <?php the_time('Y.n.j'); ?>
          </time>
          <div class="single-info__category">
           <a href="<?php echo esc_url( get_term_link( get_the_terms( get_the_ID(), 'programming' )[0], 'programming' ) ); ?>">
           <?php echo esc_html( get_the_terms( get_the_ID(), 'programming' )[0]->name ); ?>
          </a>
          </div>
        </div>
        <div class="blog-detail__img-box">
          <figure class="blog-detail__img">
          <?php
            if ( has_post_thumbnail() ) {
              the_post_thumbnail( 'full' );
            }
          ?>
          </figure>
        </div>
        <div class="blog-detail__content">
         <?php the_content(); ?>
        </div>
      </div>
      <?php
        endwhile;
        endif;
      ?>
    </section>
    <div class="pagenation pagenation-layout">   
      <?php if (get_previous_post()): ?>
	    <?php previous_post_link('%link', 'prev'); ?>
      <?php endif; ?>
      <a href="<?php echo home_url('/blog') ?>" class="page-numbers">一覧</a>
      <?php if (get_next_post()): ?>
	    <?php next_post_link('%link', 'next'); ?>
      <?php endif; ?>
    </div>
    <article class="article article-layout">
      <p class="article__title">関連記事</p>
      <?php
      $related_query = new WP_Query(
        array(
          'post_type' => 'blog',
          'post__not_in' => array( $post->ID ),
          'posts_per_page' => '4',
          'tax_query' => array(
            'relation' => 'AND',
            array(
              'taxonomy' => 'programming',
              'field'    => 'slug',
              'terms'    => array( 'wordpress', 'html', 'javascript' ),
            ),
          ),
        ) 
      );
      ?>
      <?php if ( $related_query->have_posts() ) : ?>
      <div class="article__cards cards-connection">
      <?php while ( $related_query->have_posts() ) : ?>
        <?php $related_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="cards-connection__item card">
          <figure class="card__img card__img--article">
          <?php
            if ( has_post_thumbnail() ) {
              the_post_thumbnail( 'my_thumbnail' );
            } else {
              echo '<img src="' . esc_url( get_template_directory_uri() ) . '/img/noimg.png" alt="">';
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
  <?php wp_reset_postdata(); ?>
    </article>
<?php get_footer(); ?>