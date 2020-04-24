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

  <nav class="bs-navi bs-navi--cat">
    <?php wp_nav_menu( array(
      'theme_location' => 'menu-2',
      'menu_id'        => 'category-menu',
      'container'			 => '',
      'menu_class'		 => 'bs-navi__list'
    ) ); ?>
  </nav>

</header><!-- .page-header -->


<article id="post-<?php the_ID(); ?>" <?php post_class('bs-single'); ?>>
	<header class="entry-header bs-single__front">

    <?php if( get_field('embed') ) { ?>
      <div class="bs-single__front-video">
        <?php the_field('embed'); ?>
      </div>

    <?php } else { ?>

      <div class="bs-single__front-photo" style="background-image: url(<?php the_post_thumbnail_url('large'); ?>)">
        &nbsp;
      </div>

    <?php } ?>

		<div class="bs-single__front-text">
			<div class="bs-single__front-text-inner">
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title bs-heading bs-heading--xxlarge">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title bs-heading bs-heading--large"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;

				// MAKER
				echo '<h3 class="bs-heading bs-single__maker uk-margin-bottom">';
				the_field('maker');
				echo '</h3>'; ?>

				<div class="bs-single__front-short-text">
					<?php
					the_field('short_text'); ?>
				</div>

				<?php

				$tag_list = get_the_tag_list( '<ul class="bs-tiles__tag-list"><li class="bs-tiles__tag-item">', '</li><li class="bs-tiles__tag-item">', '</li></ul>' );

				if ( $tag_list && ! is_wp_error( $tag_list ) ) {
					echo $tag_list;
				}
			?>
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
  get_template_part('template-parts/single/content', 'gallery');

  get_template_part('template-parts/single/content', 'agenda');

  get_sidebar();

   ?>
</article><!-- #post-<?php the_ID(); ?> -->
