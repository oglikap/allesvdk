<article id="post-<?php the_ID(); ?>" <?php post_class('bs-about'); ?>>
  <div class="bs-about__front">
    <div class="bs-about__text">

      <div class="entry-content bs-about__text-inner">
        <?php
          if( is_page('agenda') ) {

              

          } else {
            the_content();
          }

          wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'allesvdk-theme' ),
            'after'  => '</div>',
          ) );
        ?>
      </div><!-- .entry-content -->

    </div>

    <div class="bs-about__photo" style="background-image: url(<?php echo the_post_thumbnail_url('medium_large'); ?>)">
      &nbsp;
    </div>

  </div>


</article><!-- #post-<?php the_ID(); ?> -->
