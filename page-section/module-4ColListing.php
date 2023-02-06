<?php
  $our_treatments = $args['our_treatments'];
?>
<div class="module-4ColListing">
  <div class="g">
    <div class="r">
      <div class="lg-12">
        <div class="sectionTitleStyling">
          <h5>Our treatments</h5>
          <h2><?php echo $our_treatments['headline']; ?></h2>
        </div>
      </div>
    </div>
  </div>

  <div class="g">
    <div class="r rowMargin">
      <?php
        foreach($our_treatments['featured_treatments'] as $treatment){
          $featured_img_url = get_the_post_thumbnail_url($treatment->ID, 'full');
      ?>
          <div class="mdlg-3 md-6">
            <a href="<?php echo get_permalink($treatment->ID); ?>" class="eachThumb hoverEffect_dim">
              <div class="mediaWrapStyling">
                <img src="<?php echo aq_resize($featured_img_url, 50); ?>" data-hiResImg="<?php echo $featured_img_url; ?>" />
              </div>
              <h4><?php echo $treatment->post_title; ?></h4>
            </a>
          </div>
      <?php
        }
      ?>
    </div>
  </div>

  <div class="g">
    <div class="r">
      <div class="lg-12">
        <div class="btnsWrap">
          <a href="<?php echo $our_treatments['cta_1']['url']; ?>" class="buttonWithArrowStyling buttonWithArrowStyling_red">
            <p><?php echo $our_treatments['cta_1']['title']; ?></p>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 14.795">
              <path id="Path_97" data-name="Path 97" d="M1.1-8.621v1.8h17.12v.872A4.906,4.906,0,0,0,15.4-4.446l-2.88,2.88L13.759-.325l7.345-7.4-7.345-7.4-1.242,1.242L15.5-10.919a4.814,4.814,0,0,0,2.721,1.427v.872Z" transform="translate(-1.104 15.12)" fill="#dad9d7" />
            </svg>
          </a>

          <a href="<?php echo $our_treatments['cta_2']['url']; ?>" class="buttonWithArrowStyling buttonWithArrowStyling_outline">
            <p><?php echo $our_treatments['cta_2']['title']; ?></p>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 14.795">
              <path id="Path_97" data-name="Path 97" d="M1.1-8.621v1.8h17.12v.872A4.906,4.906,0,0,0,15.4-4.446l-2.88,2.88L13.759-.325l7.345-7.4-7.345-7.4-1.242,1.242L15.5-10.919a4.814,4.814,0,0,0,2.721,1.427v.872Z" transform="translate(-1.104 15.12)" fill="#dad9d7" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>