<?php
/**
 * Template part for displaying 'producties´ posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AllesvdK-theme
 */

?>

<div class="bs-tiles">
  <div class="uk-child-width-1-2@l uk-grid-collapse" uk-grid>
  <?php

  /* Start the Loop */
  while ( have_posts() ) :
    the_post();

    if( !in_category('archief') && !in_category('makers') && !in_category('nieuws') ):
   ?>
  <div class="bs-tiles__item">

    <article id="post-<?php the_ID(); ?>" <?php post_class('bs-tiles__text'); ?>>
      <div class="bs-tiles__text-inner">
        <header class="entry-header bs-tiles__header">
      		<?php

      		the_title( '<h3 class="entry-title bs-tiles__title"><a class="bs-tiles__link" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );

      		if ( 'post' === get_post_type() ) :
      			?>
      			<div class="entry-meta">
      				<?php the_field('maker');	?>
      			</div><!-- .entry-meta -->
      		<?php endif; ?>
      	</header><!-- .entry-header -->

      	<div class="entry-content">
      		<?php
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
      	</div><!-- .entry-content -->

      	<footer class="entry-footer bs-tiles__footer">
          <?php the_tags( '<ul class="bs-tiles__footer-list"><li>', '</li><li>', '</li></ul>' ); ?>
      	</footer><!-- .entry-footer -->

      </div>
    </article><!-- #post-<?php the_ID(); ?> -->

      <div class="bs-tiles__photo" <?php if( has_post_thumbnail() ): ?> style="background-image: url(<?php echo the_post_thumbnail_url('large'); ?>)"<?php endif; ?>>
        &nbsp;
      </div>

    </div>
  <?php endif; ?>

  <?php endwhile; wp_reset_postdata(); ?>

</div>


</div>
