<?php
$images = get_field('gallery');
if( $images ): ?>

<section class="bs-gallery uk-margin-large-top">
  <div class="bs-heading bs-sidebar__heading">
    <span>Fotogalerij</span>
  </div>
  <div class="uk-child-width-1-3 uk-child-width-1-4@s uk-child-width-1-5@m uk-child-width-1-6@l uk-grid-collapse bs-gallery__list" uk-grid uk-lightbox="animation: slide">

      <?php foreach( $images as $image ): ?>

        <div class="bs-gallery__item">
          <a class="uk-inline bs-gallery__link" href="<?php echo esc_url( $image['url'] ); ?>" data-caption="<?php echo esc_html( $image['caption'] ); ?>">
            <img class="bs-gallery__photo" src="<?php echo esc_url( $image['sizes']['square'] ); ?>" data-alt="<?php echo esc_attr( $image['alt'] ); ?>">
          </a>
        </div>

      <?php endforeach; ?>

  </div>
</section>

<?php endif; ?>
