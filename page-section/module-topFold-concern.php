<?php
  $top_fold_banner = $args['top_fold_banner'];
?>
<div class="module-topFold">
  <div class="textWrap">
    <div class="g">
      <div class="r">
        <div class="mdlg-6 md-8 sm-12">
          <div class="topfoldWrap">
            <small>Concern</small>
            <h1><?php the_title(); ?></h1>
            <a href="<?php echo $top_fold_banner['cta']['url']; ?>" class="buttonWithArrowStyling">
              <p><?php echo $top_fold_banner['cta']['title']; ?></p>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 14.795">
                <path id="Path_97" data-name="Path 97" d="M1.1-8.621v1.8h17.12v.872A4.906,4.906,0,0,0,15.4-4.446l-2.88,2.88L13.759-.325l7.345-7.4-7.345-7.4-1.242,1.242L15.5-10.919a4.814,4.814,0,0,0,2.721,1.427v.872Z" transform="translate(-1.104 15.12)" fill="#dad9d7" />
              </svg>
            </a>
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