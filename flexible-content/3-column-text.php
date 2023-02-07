<?php
  $data = $args['data'];
?>
<div class="module-section module-3-col-txt">
  <div class="module-3-col-txt__wrapper">
    <div class="r rowMargin">
      <?php
        foreach($data['card'] as $card){
      ?>
          <div class="mdlg-4">
            <div class="module-3-col-txt__img">
              <div class="mediaWrapStyling">
                <img src="<?php echo aq_resize($card['image']['url'], 50); ?>" data-hiResImg="<?php echo $card['image']['url']; ?>"/>
              </div>
            </div>
            <div class="module-3-col-txt__info">
              <small><?php echo $card['image_caption']; ?></small>
              <h4><?php echo $card['headline']; ?></h4>
              <p><?php echo $card['description']; ?></p>
            </div>
          </div>
      <?php
        }
      ?>
    </div>
  </div>
</div>