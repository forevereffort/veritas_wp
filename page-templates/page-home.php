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
      $our_ethos = get_field('our_ethos');
      $meet_our_doctors = get_field('meet_our_doctors');
      $our_treatments = get_field('our_treatments');
      $clinic_features = get_field('clinic_features');
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

        <?php get_template_part('theme-setting/press', 'features'); ?>

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

        <?php get_template_part('theme-setting/4-column', 'content'); ?>

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

        <?php get_template_part('theme-setting/2-column', 'content'); ?>

        <div class="clinic-features">
          <div class="g">
            <div class="r">
              <div class="lg-12">
                <div class="sectionTitleStyling">
                  <h5>Clinic features</h5>
                </div>
              </div>

              <div class="lg-12">
                <div class="clinic-features__row">
                  <?php
                    foreach($clinic_features['features'] as $feature){
                  ?>
                      <div class="clinic-features__col">
                        <div class="clinic-features__icon">
                          <img src="<?php echo $feature['icon']['url']; ?>" />
                        </div>
                        <p><?php echo $feature['feature']; ?></p>
                      </div>
                  <?php
                    }
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="insights-section" class="insights">
          <div class="g">
            <div class="r">
              <div class="lg-12">
                <div class="sectionTitleStyling">
                  <h5>Insights</h5>
                </div>
                <div class="insights__wrapper">
                  <div class="r">
                    <div class="lg-6">
                      <div id="insights__card--sticky" class="insights__card">
                        <div class="insights__card-img">
                          <a href="#" class="eachThumb hoverEffect_dim">
                            <div class="mediaWrapStyling">
                              <img src="assets/demo/insights/insights-1.png" data-hiResImg="assets/demo/insights/insights-1.png" />
                            </div>
                          </a>
                        </div>
                        <div class="insights__card-name">
                          <small>Dr. Chua Cheng Yu</small>
                        </div>
                        <div class="insights__card-title">
                          <h4><a href="#" class="hoverEffect_dim"></a></h4>
                        </div>
                        <div class="insights__card-info">
                          <small>This condition is routinely mistaken for acne but is actually related to a yeast called Malessezia furfur that’s found naturally on the skin.</small>
                        </div>
                      </div>
                    </div>
                    <div class="lg-6 insights__right-col">
                      <div class="r">
                        <div class="mdlg-6">
                          <div class="insights__card">
                            <div class="insights__card-img">
                              <a href="#" class="eachThumb hoverEffect_dim">
                                <div class="mediaWrapStyling">
                                  <img src="assets/demo/insights/insights-2.png" data-hiResImg="assets/demo/insights/insights-2.png" />
                                </div>
                              </a>
                            </div>
                            <div class="insights__card-name">
                              <small>Dr. Lena Fan</small>
                            </div>
                            <div class="insights__card-title">
                              <h4><a href="#" class="hoverEffect_dim">Coolsculpting In Singapore 2022 – Obsolete Or Still An Essential Treatment?</a></h4>
                            </div>
                            <div class="insights__card-info">
                              <small>In recent times, there has been some growing resistance with Coolsculpt as a body contouring treatment option.</small>
                            </div>
                          </div>
                          <div class="insights__card desk">
                            <div class="insights__card-img">
                              <a href="#" class="eachThumb hoverEffect_dim">
                                <div class="mediaWrapStyling">
                                  <img src="assets/demo/insights/insights-4.png" data-hiResImg="assets/demo/insights/insights-4.png" />
                                </div>
                              </a>
                            </div>
                            <div class="insights__card-name">
                              <small>Dr. Lena Fan</small>
                            </div>
                            <div class="insights__card-title">
                              <h4><a href="#" class="hoverEffect_dim">Is Trusculpt Flex Changing The Way We Build Muscle?</a></h4>
                            </div>
                            <div class="insights__card-info">
                              <small>If you feel like your attitude towards body image, eating and exercise has changed because of the pandemic, you’re not alone.</small>
                            </div>
                          </div>
                        </div>
                        <div class="mdlg-6 desk">
                          <div class="insights__card">
                            <div class="insights__card-img">
                              <a href="#" class="eachThumb hoverEffect_dim">
                                <div class="mediaWrapStyling">
                                  <img src="assets/demo/insights/insights-3.png" data-hiResImg="assets/demo/insights/insights-3.png" />
                                </div>
                              </a>
                            </div>
                            <div class="insights__card-name">
                              <small>Dr. Lena Fan</small>
                            </div>
                            <div class="insights__card-title">
                              <h4><a href="#" class="hoverEffect_dim">Seeing Unsatisfactory Results From Skinboosters? Here’s Why</a></h4>
                            </div>
                            <div class="insights__card-info">
                              <small>Comprehensive and personalised hair treatments that are scientifically proven to treat hair loss in both men & women.</small>
                            </div>
                          </div>
                          <div class="insights__card">
                            <div class="insights__card-img">
                              <a href="#" class="eachThumb hoverEffect_dim">
                                <div class="mediaWrapStyling">
                                  <img src="assets/demo/insights/insights-5.png" data-hiResImg="assets/demo/insights/insights-5.png" />
                                </div>
                              </a>
                            </div>
                            <div class="insights__card-name">
                              <small>Dr. Lena Fan</small>
                            </div>
                            <div class="insights__card-title">
                              <h4><a href="#" class="hoverEffect_dim">Will Ellansé (少女针) Render Hyaluronic Acid Fillers Obsolete?</a></h4>
                            </div>
                            <div class="insights__card-info">
                              <small>Dermal fillers, specifically hyaluronic acid (HA) fillers, have been the go-to anti-ageing treatment for many A-list superstars for years due to their fast and immediate results.</small>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="lg-12 mob insights__link">
                      <a href="insights.html" class="hoverEffect_dim">Read more</a>
                    </div>
                  </div>
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