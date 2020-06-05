<?php
/**
 * The template for displaying all attachments
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package AllesvdK-theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post(); ?>

    <div class="entry-attachment">
       <?php $image_size = apply_filters( 'wporg_attachment_size', 'full' );
       echo wp_get_attachment_image( get_the_ID(), $image_size ); ?>

         <?php if ( has_excerpt() ) : ?>

           <div class="entry-caption">
             <?php the_excerpt(); ?>
           </div><!-- .entry-caption -->
         <?php endif; ?>
    </div><!-- .entry-attachment -->

    <?php

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
