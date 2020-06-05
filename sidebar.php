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
									<a href="<?php the_permalink(); ?>" class="bs-sidebar__link" <?php if( has_post_thumbnail() ): ?> style="background-image: url(<?php the_post_thumbnail_url('square_large'); ?>)"<?php endif; ?>)>"
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

	</div>
</div>
