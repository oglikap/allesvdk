<?php get_header(); ?>

<div id="primary" class="content-area bs-page">
  <main id="main" class="site-main">

    <div class="bs-home">

      <?php
        $args = array(
          'category_name' => 'speelt, nieuw'
        );

        $the_query = new WP_Query($args);

        if( $the_query->have_posts() ) { ?>

        <div class="bs-slider">

          <?php if( wp_is_mobile() ) { ?>
            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="1" uk-slideshow="animation: fade; autoplay: true; autoplay-interval: 4500; ratio: 1:1.25">

          <?php } else { ?>

            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="1" uk-slideshow="animation: fade; autoplay: true; autoplay-interval: 3500; pause-on-hover: false">

          <?php } ?>

          <ul class="uk-slideshow-items">
            <?php
            while ( $the_query->have_posts() ) {
              $the_query->the_post(); ?>

              <li class="bs-slider__item">

                <?php
                if( has_post_thumbnail() ) {
                  if( wp_is_mobile() ) { ?>
                    <img class="bs-slider__photo" src="<?php the_post_thumbnail_url('medium_large'); ?>" alt="" uk-cover>
                  <?php } else { ?>
                    <img class="bs-slider__photo" src="<?php the_post_thumbnail_url('slider'); ?>" alt="" uk-cover>
                  <?php }
                } else { ?>
                    <img class="bs-slider__photo" src="<?php echo get_theme_file_uri('img/fallback.jpg'); ?>" alt="" uk-cover>
                  <?php

                } ?>


                <div class="uk-overlay bs-slider__overlay">
                  <div class="bs-slider__heading">
                    <h3 class="bs-slider__title"><?php the_title(); ?></h3>
                    <h4 class="bs-slider__maker"><?php the_field('maker'); ?></h4>
                  </div>

                 <div class="bs-slider__excerpt">
                   <?php the_field('short_text'); ?>
                   <br />

                   <a href="<?php the_permalink(); ?>" class="bs-tiles__button">Lees verder</a>
                 </div>
               </div>

              </li>

            <?php } ?>

          </ul>
        </div>
      </div><!-- .bs-slider -->
    <?php } rewind_posts(); ?><!-- ENDIF $the_query -->

    <section class="bs-home__playing">
    <?php get_template_part('template-parts/pages/content', 'header'); ?>

    <?php
      $args = array(
        'category_name' => 'speelt, nieuw',
        'posts_per_page' => -1
      );
      $the_query = new WP_Query($args);

        if( $the_query->have_posts() ) { ?>

          <div class="bs-tiles">
            <div class="uk-child-width-1-2@l uk-grid-collapse" uk-grid>

              <?php
              while ($the_query->have_posts() ) {
                $the_query->the_post();

                get_template_part( 'template-parts/tiles' );
               }
              // ENDWHILE
              ?>

            </div>
          </div>

        <?php }
        // ENDIF $the_query
        wp_reset_postdata(); ?>

      </section>

    </div>
    <?php get_sidebar(); ?>

  </main>
</div>

<?php get_footer(); ?>
