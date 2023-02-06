<?php
  $top_fold_banner = $args['top_fold_banner'];
?>
<div class="module-topFold">
  <div class="textWrap">
    <div class="g">
      <div class="r">
        <div class="mdlg-6 md-8 sm-12">
          <div class="topfoldWrap">
            <h1><?php the_title(); ?></h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="mediaWrapStyling asCover">
    <!-- desktop img -->
    <img class="desk" src="<?php echo aq_resize($top_fold_banner['desktop_background_image']['url'], 50); ?>" data-hiResImg="<?php echo $top_fold_banner['desktop_background_image']['url']; ?>" />
    <!-- table img -->
    <img class="tab" src="<?php echo aq_resize($top_fold_banner['tablet_background_image']['url'], 50); ?>" data-hiResImg="<?php echo $top_fold_banner['tablet_background_image']['url']; ?>" />
    <!-- mobile img -->
    <img class="mob" src="<?php echo aq_resize($top_fold_banner['mobile_background_image']['url'], 50); ?>" data-hiResImg="<?php echo $top_fold_banner['mobile_background_image']['url']; ?>" />
  </div>
</div>