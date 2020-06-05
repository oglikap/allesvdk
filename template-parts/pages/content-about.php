<article id="post-<?php the_ID(); ?>" <?php post_class('bs-about'); ?>>
  <div class="bs-about__front">
    <div class="bs-about__text">

      <div class="entry-content bs-about__text-inner">
        <?php
        the_content();

          wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'allesvdk-theme' ),
            'after'  => '</div>',
          ) );
        ?>
      </div><!-- .entry-content -->

    </div><!-- .bs-about__text -->
    <div class="bs-about__photo" style="background-image: url(<?php echo the_post_thumbnail_url('medium_large'); ?>)">
      &nbsp;
    </div>
  </div>

  <div class="bs-about__tiles">

    <?php get_template_part( 'template-parts/pages/content', 'header' ); ?>

    <div class="bs-tiles">

      <?php $args = array(
        'post_type' => 'over_ons',
        'orderby' => 'menu_order'
      );

      $the_query = new WP_Query($args);

      if( $the_query->have_posts() ) { ?>

        <div class="bs-tiles__list uk-child-width-1-2@m uk-grid-collapse" uk-grid>

          <?php while ( $the_query->have_posts() ) {
            $the_query->the_post(); ?>

            <div class="bs-tiles__item">

              <div class="bs-tiles__text">
                <div class="bs-tiles__text-inner">
                  <div class="bs-tiles__title uk-margin-bottom">
                    <?php the_title(); ?>
                  </div>
                  <div class="bs-tiles__excerpt">
                    <?php the_excerpt(); ?>
                      <a class="bs-tiles__button" href="<?php the_permalink(); ?>">Lees verder</a>
                  </div>
                </div>
              </div>
              <div class="bs-tiles__photo" style="background-image: url(<?php echo the_post_thumbnail_url('medium_large'); ?>)">
                &nbsp;
              </div>

            </div>

            <?php	} ?>

          </div>

      <?php } ?>

    </div>
  </div>

</article><!-- #post-<?php the_ID(); ?> -->
