<?php
  $data = $args['data'];
?>
<div class="module-section module-youtube">
  <div class="module-youtube__container">
    <iframe
      width="100%"
      height="400" 
      src="https://www.youtube.com/embed/<?php echo $data['youtube_video_id']; ?>"
      frameborder="0"
      allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
      allowfullscreen></iframe>
  </div>
</div>