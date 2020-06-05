<?php
/**
 * The template for displaying category pages
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

			<?php get_template_part( 'template-parts/pages/content', 'header' ); ?>

			<?php get_template_part( 'template-parts/content', 'archive' );

			echo paginate_links();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
	if( is_category('producties') OR is_category('makers') ) {
		get_sidebar();
	}

get_footer();
