<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package AllesvdK-theme
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header bs-page__header">
				<div class="bs-page__title">
					<h1 class="page-title bs-heading">
						<?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Zoekresultaten voor: %s', 'allesvdk-theme' ), '<span>' . get_search_query() . '</span>' );
						?>
					</h1>
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

			<?php

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'archive' );

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
