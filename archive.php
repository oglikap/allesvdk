<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AllesvdK-theme
 */

get_header();
?>

	<div id="primary" class="content-area bs-page">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<?php get_template_part( 'template-parts/pages/content', 'header' );

				get_template_part( 'template-parts/content', 'archive' );

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
