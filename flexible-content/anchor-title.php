<?php
    $data = $args['data'];
?>
<div id="<?php echo strtolower($data['anchor_title']); ?>" class="module-section module-anchor-title" data-anchorId="<?php echo strtolower($data['anchor_title']); ?>" data-anchorTitle="<?php echo $data['anchor_title']; ?>">
  <h5><?php echo $data['anchor_title']; ?></h5>
  <h3><?php echo $data['section_title']; ?></h3>
</div>