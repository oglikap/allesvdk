<header class="page-header bs-page__header">

  <div class="bs-page__title">
    <div class="bs-page__title-logo">
    <img src="<?php echo get_template_directory_uri(); ?>/img/website_favicon-4.png" alt="logootje">
    </div>

    <?php
    if( is_category() ) {
      single_cat_title( '<h1 class="page-title bs-heading bs-heading--large">', '</h1>' );
    } elseif ( is_front_page() ) {
      echo '<h2 class="bs-heading">' . get_bloginfo('name') . '</h2>';
    } elseif( is_page() ) {
      the_title('<h2 class="page-title bs-heading bs-heading--large">', '</h2>');
    } elseif( is_tag() ) {
      single_tag_title('<h2 class="page-title bs-heading bs-heading--large">', '</h2>');
    } else {
      the_archive_title( '<h1 class="page-title bs-heading bs-heading--large">', '</h1>' );

    }
    ?>
  </div>

<?php naviCat(); ?>

</header><!-- .page-header -->
