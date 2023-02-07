<?php
  $data = $args['data'];
?>
<div class="module-section module-youtube">
  <div class="module-youtube__container">
    <iframe
      src="<?php echo $data['youtube_video_id']; ?>"
      frameborder="0"
      allow="accelerometer; autoplay; encrypted-media; gyroscope;"
      allowfullscreen></iframe>
  </div>
</div>