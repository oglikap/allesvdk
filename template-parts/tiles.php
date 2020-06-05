<div class="bs-tiles__item">

  <article id="post-<?php the_ID(); ?>" <?php post_class('bs-tiles__text'); ?>>
    <div class="bs-tiles__text-inner">
      <header class="entry-header bs-tiles__header">
        <?php

        the_title( '<h3 class="entry-title bs-tiles__title"><a class="bs-tiles__link" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );

        if ( get_field('maker') ) : ?>
        <div class="entry-meta bs-tiles__subtitle">
          <?php the_field('maker');	?>

        </div><!-- .entry-meta -->
      <?php endif; ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
      <?php
        if( get_field('short_text') ) {
        the_field('short_text'); ?>

        <br /><a class="bs-tiles__button" href="<?php the_permalink(); ?>">Lees verder</a>

      <?php } else {
        the_excerpt( sprintf(
          wp_kses(
            /* translators: %s: Name of current post. Only visible to screen readers */
            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'allesvdk-theme' ),
            array(
              'span' => array(
                'class' => array(),
              ),
            )
          ),
          get_the_title()
        ) );

        wp_link_pages( array(
          'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'allesvdk-theme' ),
          'after'  => '</div>',
        ) );

        ?>
        <br /><a class="bs-tiles__button" href="<?php the_permalink(); ?>">Lees verder</a>

        <?php
      }

      ?>

    </div><!-- .entry-content -->

      <footer class="entry-footer bs-tiles__footer">
        <?php the_tags( '<ul class="bs-tiles__footer-list"><li>', '</li><li>', '</li></ul>' ); ?>
      </footer><!-- .entry-footer -->

    </div>
  </article><!-- #post-<?php the_ID(); ?> -->

  <div class="bs-tiles__photo" <?php if( has_post_thumbnail() ): ?> style="background-image: url(<?php the_post_thumbnail_url('square_large'); ?>)"<?php endif; ?>>
  &nbsp;
  </div>

</div>
