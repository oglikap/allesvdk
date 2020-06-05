<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AllesvdK-theme
 */

?>

	<?php get_template_part( 'template-parts/components/content', 'totop' ); ?>

	</div><!-- #content -->
	<div class="bs-footer__logo">
		<span class="bs-heading"><?php bloginfo('name'); ?></span><br />
		<?php the_custom_logo(); ?>
	</div>
</div><!-- .uk-container	 -->

	<div class="uk-container">
		<footer id="colophon" class="site-footer bs-footer">
			<div class="site-info bs-footer__colophon">
				<ul class="bs-footer__list">
					<li class="bs-footer__item">
						<?php echo date('Y'); ?>
					</li>
					<li class="bs-footer__item">
						&copy; Alles voor de Kunsten
					</li>
					<li class="bs-footer__item">
						Hemonylaan 24
					</li>
					<li class="bs-footer__item">
						1074 BJ Amsterdam
					</li>
					<li class="bs-footer__item">
						020 423 58 26
					</li>
				</ul>

				<ul class="bs-social__list uk-flex uk-flex-center uk-margin-top">
					<li class="bs-social__item">
						<a href="https://www.facebook.com/allesvoordekunsten/" uk-icon="icon: facebook; ratio: 1.5"></a>
					</li>
					<li class="bs-social__item">
						<a href="https://www.instagram.com/allesvoordekunsten/" uk-icon="icon: instagram; ratio: 1.5"></a>
					</li>
					<li class="bs-social__item">
						<a href="mailto:info@allesvoordekunsten.nl" uk-icon="icon: mail; ratio: 1.5"></a>
					</li>
				</ul>

			</div><!-- .site-info -->

		</footer><!-- #colophon -->
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
