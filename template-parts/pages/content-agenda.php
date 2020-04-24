<article id="post-<?php the_ID(); ?>" <?php post_class('bs-agenda'); ?>>
  <div class="bs-agenda__front">
    <div class="bs-agenda__front-text">
      <div class="entry-content bs-agenda__front-text-inner">

        <?php
        $options = array(
          'scope' => 'upcoming',
          'group_artists' => 'no',
          // 'artist' => 9,
          'limit' => 4
        );
        echo gigpress_shows($options); ?>

      </div>
    </div>

    <div class="bs-about__photo" style="background-image: url(<?php echo the_post_thumbnail_url('medium_large'); ?>)">
      &nbsp;
    </div>
  </div><!-- .bs-about__front -->

  <div class="bs-about__tiles">

    <?php get_template_part( 'template-parts/pages/content', 'header' ); ?>

    <div class="bs-agenda__text">
      <div class="bs-agenda__text-inner">

        <?php
        $options = array(
          'scope' => 'upcoming',
          // 'artist' => 9,
          // 'limit' => 5
        );
        echo gigpress_shows($options); ?>

      </div>
    </div>
  </div>

</article>
