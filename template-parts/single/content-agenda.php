<?php
if( get_field( 'tour_id' ) ): ?>

<section class="bs-agenda-single uk-margin-large-top">

<?php

  $options = array(
    // 'artist' => '',
    'tour' => get_field( 'tour_id' ),
  );
  if( gigpress_has_upcoming($options) ) {

    $args = array(
      'tour' => get_field( 'tour_id' ),

    );

?>
<div class="bs-agenda-single__text">
  <div class="bs-heading bs-sidebar__heading">
    <span>Agenda</span>
  </div>
  <div class="bs-agenda-single__text-inner">
    <?php
          echo gigpress_shows( $args );

      }

      ?>
  </div>
</div>

</section>
  <?php
 endif; ?>
