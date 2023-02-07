<?php $data = $args['data']; ?>
<div class="module-section module-image">
  <figure>
    <div class="mediaWrapStyling">
      <img src="<?php echo aq_resize($data['image']['url'], 50); ?>" data-hiResImg="<?php echo $data['image']['url']; ?>"/>
    </div>
    <figcaption><?php echo $data['image_caption']; ?></figcaption>
  </figure>
</div>