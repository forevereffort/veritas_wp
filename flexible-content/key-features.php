<?php
  $data = $args['data'];
?>
<div class="module-section module-key">
  <div class="module-key__row">
    <?php
      foreach($data['card'] as $card){
    ?>
        <div class="module-key__col">
          <div class="module-key__icon">
            <img src="<?php echo $card['icon']['url']; ?>">
          </div>
          <p><?php echo $card['text']; ?></p>
        </div>
    <?php
      }
    ?>
  </div>
</div>