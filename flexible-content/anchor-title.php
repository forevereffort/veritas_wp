<?php
    $data = $args['data'];
?>
<div id="<?php echo !empty($data['anchor_title']) ? strtolower($data['anchor_title']) : ''; ?>" class="module-section module-anchor-title" data-anchorId="<?php echo !empty($data['anchor_title']) ? strtolower($data['anchor_title']) : ''; ?>" data-anchorTitle="<?php echo !empty($data['anchor_title']) ? $data['anchor_title'] : ''; ?>">
  <?php
    if( !empty($data['anchor_title']) ){
  ?>
      <h5><?php echo $data['anchor_title']; ?></h5>
  <?php
    }

    if( !empty($data['section_title']) ){
  ?>
      <h3><?php echo $data['section_title']; ?></h3>
  <?php
    }
  ?>
</div>