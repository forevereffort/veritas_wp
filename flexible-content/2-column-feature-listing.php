<?php
  $data = $args['data'];

  $odd_list = [];
  $even_list = [];

  foreach($data['feature_listing'] as $index => $feature_listing){
    if( $index % 2 == 0 ){
      $even_list[] = $feature_listing;
    } else {
      $odd_list[] = $feature_listing;
    }
  }
?>
<div class="module-section module-2-col-list">
  <div class="r">
    <div class="mdlg-6">
      <ul>
        <?php
          foreach($even_list as $item){
        ?>
            <li><?php echo $item['feature']; ?></li>
        <?php
          }
        ?>
      </ul>
    </div>
    <div class="mdlg-6">
      <ul>
        <?php
          foreach($odd_list as $item){
        ?>
            <li><?php echo $item['feature']; ?></li>
        <?php
          }
        ?>
      </ul>
    </div>
  </div>
</div>