<?php
/**
 * Template part for displaying the archive posts
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

    get_template_part( 'template-parts/tiles' );

  endwhile; wp_reset_postdata(); ?>

  </div>
</div>
