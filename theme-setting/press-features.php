<?php $press_features = get_field('press_features', 'option'); ?>
<div class="logo-list">
  <div class="logo-list__wrapper">
    <div class="sectionTitleStyling">
      <h5>featured in</h5>
    </div>
    <div class="logo-list__marquee">
      <div class="logo-list__row">
        <?php
          for($i = 0; $i < 10; $i++){
            foreach($press_features['list'] as $press){
        ?>
              <div class="logo-list__item" style="width: <?php echo $press['imge_width']; ?>px">
                <a href="<?php echo $press['url']; ?>">
                  <img src="<?php echo $press['image']['url']; ?>" />
                </a>
              </div>
        <?php
            }
          }
        ?>
      </div>
    </div>
  </div>
</div>