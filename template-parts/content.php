<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AllesvdK-theme
 */

?>

<header class="page-header bs-page__header bs-page__header--blue">

  <div class="bs-page__title">
    <div class="bs-page__title-logo">
    <img src="<?php echo get_template_directory_uri(); ?>/img/website_favicon-4.png" alt="logootje">
    </div>

  	<h1 class="bs-heading"><?php the_title(); ?></h1>
  </div>

  <?php naviCat(); ?>

</header><!-- .page-header -->


<article id="post-<?php the_ID(); ?>" <?php post_class('bs-single'); ?>>
	<header class="entry-header bs-single__front">

    <?php if( get_field('embed') ) { ?>
      <div class="bs-single__front-video">
        <?php the_field('embed'); ?>
      </div>

    <?php } else { ?>

      <div class="bs-single__front-photo" <?php if( has_post_thumbnail() ): ?> style="background-image: url(<?php the_post_thumbnail_url('square_xlarge'); ?>)"<?php endif; ?>>
        &nbsp;
      </div>

    <?php } ?>

		<div class="bs-single__front-text">
			<div class="bs-single__front-text-inner">
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title bs-heading bs-single__front-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title bs-heading bs-heading--large"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;

				// MAKER
        if(get_field('maker')) {
  				echo '<h3 class="bs-heading bs-single__maker uk-margin-bottom">';
  				  the_field('maker');
  				echo '</h3>';
        } ?>

				<div class="bs-single__front-short-text">
					<?php
					the_field('short_text'); ?>
				</div>

				<?php
				$tag_list = get_the_tag_list( '<ul class="bs-single__tag-list"><li class="bs-single__tag-item">', '</li><li class="bs-single__tag-item">', '</li></ul>' );

				if ( $tag_list && ! is_wp_error( $tag_list ) ) {
					echo $tag_list;
				}	?>
			</div>
		</div>


	</header><!-- .entry-header -->


	<div class="entry-content bs-content">
		<?php
		the_content( sprintf(
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

<?php

 ?>

	<footer class="entry-footer bs-page__footer">

		<?php

    the_post_navigation( array(
      'prev_text' => __( '<span uk-icon="chevron-left"></span>%title' ),
      'next_text' => __( '%title<span uk-icon="chevron-right"></span>' )
    ) );

    allesvdk_theme_entry_footer();


    ?>
	</footer><!-- .entry-footer -->

  <?php
    $relatedProducts = get_field('related_productions');

    if( $relatedProducts ) {
      echo '<h3 class="bs-heading bs-heading--large bs-sidebar__heading"><span>Gerelateerde producties</span></h3>';
      echo '<ul class="uk-child-width-1-2@l uk-grid-collapse bs-single__tiles" uk-grid>';

      foreach( $relatedProducts as $related ) { ?>

        <li class="bs-tiles__item">
          <div class="bs-tiles__text">
            <div class="bs-tiles__text-inner">
              <h4><a href="<?php echo get_the_permalink($related); ?>"><?php echo get_the_title($related); ?></a></h4>
              <p><?php echo get_the_excerpt($related) ?></p>

              <a class="bs-tiles__button" href="<?php echo get_the_permalink($related); ?>">Lees verder</a>
              <footer class="entry-footer bs-tiles__footer">
                <?php the_tags( '<ul class="bs-tiles__footer-list"><li>', '</li><li>', '</li></ul>' ); ?>
              </footer><!-- .entry-footer -->
            </div>

          </div>
          <div class="bs-tiles__photo" style="background-image: url(<?php echo get_the_post_thumbnail_url($related); ?>)">
              <a href="<?php echo get_the_permalink($related); ?>"></a>
          </div>


        </li>

      <?php }

      echo '</ul>';
    }
   ?>

  <?php
  get_template_part('template-parts/single/content', 'gallery');

  get_template_part('template-parts/single/content', 'agenda');

  get_sidebar();

   ?>
</article><!-- #post-<?php the_ID(); ?> -->
