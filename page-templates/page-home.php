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
      $four_column_content = get_field('4_column_content', 'option');
      $our_treatments = get_field('our_treatments');
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

        <div class="module-2ColImgTextOwl">
          <div class="g">
            <div class="r">
              <div class="lg-12">
                <div class="sectionTitleStyling">
                  <h5>Meet our doctors</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="owl2ColImgTextOwl owl-carousel">
            <?php
              foreach($meet_our_doctors['doctors'] as $doctor){
            ?>
                <div class="module-2ColImgText">
                  <div class="g">
                    <div class="r rowMargin flexVerticalCenter">
                      <div class="md-6">
                        <div class="wysiwygWrapStyling">
                          <blockquote><?php echo $doctor['testimonial']; ?></blockquote>
                          <p class="ppNeueMontrealSemiBold"><?php echo $doctor['doctor_name']; ?></p>
                          <ul>
                            <?php
                              foreach($doctor['qualifications'] as $qualification){
                            ?>
                                <li><?php echo $qualification['qualification']; ?></li>
                            <?php
                              }
                            ?>
                          </ul>
                        </div>
                      </div>

                      <div class="md-6">
                        <div class="mediaWrapStyling">
                          <img src="<?php echo aq_resize($doctor['image']['url'], 50); ?>" data-hiResImg="<?php echo $doctor['image']['url']; ?>" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            <?php
              }
            ?>
          </div>
          <div class="owlCustomTimedDots">
            <div class="g">
              <div class="r">
                <div class="lg-12">
                  <div class="dotsWrap">
                    <!-- <div class="dot"><span></span></div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="module-4ColListing mob-hide">
          <div class="g">
            <div class="r">
              <div class="lg-12">
                <div class="sectionTitleStyling">
                  <h5><?php echo $four_column_content['headline']; ?></h5>
                  <!-- <h2>Evidence-based options that produce real results</h2> -->
                </div>
              </div>
            </div>
          </div>

          <div class="g">
            <div class="r rowMargin">
              <?php
                foreach($four_column_content['column'] as $column){
              ?>
                  <div class="mdlg-3 md-6">
                    <div class="eachThumb">
                      <div class="mediaWrapStyling">
                        <img src="<?php echo aq_resize($column['image']['url'], 50); ?>" data-hiResImg="<?php echo $column['image']['url']; ?>" />
                      </div>
                      <h4><?php echo $column['headline']; ?></h4>
                      <p><?php echo $column['description']; ?></p>
                    </div>
                  </div>
              <?php
                }
              ?>
            </div>
          </div>
        </div>

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
              <div class="mdlg-3 md-6">
                <a href="single-treatment.html" class="eachThumb hoverEffect_dim">
                  <div class="mediaWrapStyling">
                    <img src="assets/demo/small/demo-thumb-short-01.jpg" data-hiResImg="assets/demo/demo-thumb-short-01.jpg" />
                  </div>
                  <h4>Rejuran</h4>
                </a>
              </div>
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
  <?php
    }
  ?>
</main>
<?php get_footer();