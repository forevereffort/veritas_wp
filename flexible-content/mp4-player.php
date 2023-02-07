<?php
  $data = $args['data'];
?>
<div class="module-section module-mp4">
  <video width="400" controls playsinline>
    <source src="<?php echo $data['mp4_file']['url']; ?>" type="video/mp4">
    Your browser does not support HTML5 video.
  </video>
</div>