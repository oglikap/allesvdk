<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AllesvdK-theme
 */
?>
<div class="bs-widgets">
	<div class="bs-widgets__item">
		<?php $args = array(
			'post_type' => 'post',
			'category_name' => 'producties',
			'posts_per_page' => 4
		);

		$the_query = new WP_Query($args);

		if( $the_query->have_posts() ) { ?>
			<div class="bs-sidebar">
				<h3 class="bs-heading bs-sidebar__heading"><span>Recente berichten</span></h3>

				<div class="uk-child-width-1-2 uk-child-width-1-3@m uk-child-width-1-4@l bs-sidebar__list" uk-grid>

					<?php	while( $the_query->have_posts() ) {
						$the_query->the_post(); ?>
						<div>
							<div class="bs-sidebar__item">

								<div class="bs-sidebar__card">
									<a href="<?php the_permalink(); ?>" class="bs-sidebar__link" style="background-image: url(<?php echo the_post_thumbnail_url('medium_large'); ?>)">
									</a>
									<div class="bs-sidebar__card-footer">
										<span class="bs-sidebar__card-title">
											<?php the_title(); ?>
											<span> - <span><?php the_field('maker'); ?></span></span>
										</span>
									</div>
								</div>

							</div>
						</div>

					<?php	} // ENDWHILE ?>
					</div>

				</div>

			<?php } wp_reset_postdata(); // ENDIF ?>

			<?php
			if ( ! is_active_sidebar( 'sidebar-2' ) ) {
				return;
			}
			?>

			<aside id="secondary" class="widget-area bs-widget">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</aside><!-- #secondary -->
		</div>

		<div class="bs-widgets uk-padding-remove">

			<?php
			if ( ! is_active_sidebar( 'sidebar-1' ) ) {
				return;
			}
			?>

			<aside id="secondary" class="widget-area bs-sidebar">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</aside><!-- #secondary -->

			<?php
			if ( ! is_active_sidebar( 'sidebar-1' ) ) {
				return;
			}
			?>

			<aside id="secondary" class="widget-area bs-widget">
				<?php dynamic_sidebar( 'sidebar-3' ); ?>
			</aside><!-- #secondary -->

		</div>

	<!-- </div> -->
</div>
