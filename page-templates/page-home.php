<?php

/**
 * Template Name: Home Page
 */

get_header();
?>
<main>
  <?php
    while( have_posts() ){
      the_post();

      $top_fold_banner = get_field('top_fold_banner');
      $press_features = get_field('press_features', 'option');
      $our_ethos = get_field('our_ethos');
      $meet_our_doctors = get_field('meet_our_doctors');
  ?>
        <div class="module-topFold">
          <div class="textWrap">
            <div class="g">
              <div class="r">
                <div class="mdlg-6 md-8 sm-12">
                  <div class="topfoldWrap">
                    <h1><?php echo $top_fold_banner['headline']; ?></h1>
                    <div class="paraWrap">
                      <p><?php echo $top_fold_banner['description']; ?></p>
                    </div>
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

        <div class="module-bgImgWithCenText">
          <div class="g">
            <div class="r">
              <div class="lg-12">
                <div class="bgImgWithCenTextWrap">
                  <div class="textWrap">
                    <h5><?php echo $our_ethos['headline']; ?></h5>
                    <h4><?php echo strReplaceNewLineToBr($our_ethos['description']); ?></h4>
                    <a href="<?php echo $our_ethos['cta']['url']; ?>" class="buttonWithArrowStyling">
                      <p><?php echo $our_ethos['cta']['title']; ?></p>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 14.795">
                        <path id="Path_97" data-name="Path 97" d="M1.1-8.621v1.8h17.12v.872A4.906,4.906,0,0,0,15.4-4.446l-2.88,2.88L13.759-.325l7.345-7.4-7.345-7.4-1.242,1.242L15.5-10.919a4.814,4.814,0,0,0,2.721,1.427v.872Z" transform="translate(-1.104 15.12)" fill="#dad9d7" />
                      </svg>
                    </a>
                  </div>
                  <div class="mediaWrapStyling asCover">
                    <!-- desktop img -->
                    <img class="desk" src="<?php echo aq_resize($our_ethos['desktop_background_image']['url'], 50); ?>" data-hiResImg="<?php echo $our_ethos['desktop_background_image']['url']; ?>" />
                    <!-- table img -->
                    <img class="tab" src="<?php echo aq_resize($our_ethos['tablet_background_image']['url'], 50); ?>" data-hiResImg="<?php echo $our_ethos['tablet_background_image']['url']; ?>" />
                    <!-- mobile img -->
                    <img class="mob" src="<?php echo aq_resize($our_ethos['mobile_background_image']['url'], 50); ?>" data-hiResImg="<?php echo $our_ethos['mobile_background_image']['url']; ?>" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="owl2ColImgTextOwl owl-carousel">
          <?php
            foreach($meet_our_doctors as $item){
          ?>
              <div class="module-2ColImgText">
                <div class="g">
                  <div class="r rowMargin flexVerticalCenter">
                    <div class="md-6">
                      <div class="wysiwygWrapStyling">
                        <blockquote>“I believe in only administering sustainable treatments that are backed by scientific research and real results. Honesty to our patients isn't a virtue, it's a must.”</blockquote>
                        <p class="ppNeueMontrealSemiBold">Dr. Chua Cheng Yu</p>
                        <ul>
                          <li>9+ years of medical experience</li>
                          <li>5,000+ cases of aesthetic treatments</li>
                          <li>Known for his unique treatment protocols from years of experience</li>
                          <li>Speaker and Trainer at American Academy of Aesthetic Medicine</li>
                          <li>Regional Trainer for Ultraformer 3 HIFU, Asclepion Yellow Laser, Ellansé & more</li>
                        </ul>
                      </div>
                    </div>

                    <div class="md-6">
                      <div class="mediaWrapStyling">
                        <img src="assets/demo/small/demo-05.jpg" data-hiResImg="assets/demo/demo-05.jpg" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          <?php
            }
          ?>
        </div>
  <?php
    }
  ?>
</main>
<?php get_footer();