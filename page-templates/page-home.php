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
      $insights = get_field('insights');
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
                          <a href="<?php echo get_permalink($insights['featured_article_large'][0]->ID); ?>" class="eachThumb hoverEffect_dim">
                            <div class="mediaWrapStyling">
                              <?php
                                $featured_img_url = get_the_post_thumbnail_url($insights['featured_article_large'][0]->ID, 'full');
                              ?>
                              <img src="<?php echo aq_resize($featured_img_url, 50); ?>" data-hiResImg="<?php echo $featured_img_url; ?>" />
                            </div>
                          </a>
                        </div>
                        <div class="insights__card-name">
                          <small>Dr. Chua Cheng Yu</small>
                        </div>
                        <div class="insights__card-title">
                          <h4><a href="<?php echo get_permalink($insights['featured_article_large'][0]->ID); ?>" class="hoverEffect_dim"><?php echo $insights['featured_article_large'][0]->post_title; ?></a></h4>
                        </div>
                        <div class="insights__card-info">
                          <small><?php echo $insights['featured_article_large'][0]->post_excerpt; ?></small>
                        </div>
                      </div>
                    </div>
                    <?php
                      $insights_odd_list = [];
                      $insights_even_list = [];

                      foreach($insights['featured_article_small'] as $index => $insight){
                        if( $index % 2 == 0 ){
                          $insights_even_list[] = $insight;
                        } else {
                          $insights_odd_list[] = $insight;
                        }
                      }
                    ?>
                    <div class="lg-6 insights__right-col">
                      <div class="r">
                        <div class="mdlg-6">
                          <?php
                            foreach($insights_even_list as $index => $insight){
                              $featured_img_url = get_the_post_thumbnail_url($insight->ID, 'full');
                          ?>
                              <div class="insights__card <?php echo $index > 0 ? 'desk' : ''; ?>">
                                <div class="insights__card-img">
                                  <a href="<?php echo get_permalink($insight->ID); ?>" class="eachThumb hoverEffect_dim">
                                    <div class="mediaWrapStyling">
                                      <img src="<?php echo aq_resize($featured_img_url, 50); ?>" data-hiResImg="<?php echo $featured_img_url; ?>" />
                                    </div>
                                  </a>
                                </div>
                                <div class="insights__card-name">
                                  <small>Dr. Lena Fan</small>
                                </div>
                                <div class="insights__card-title">
                                  <h4><a href="<?php echo get_permalink($insight->ID); ?>" class="hoverEffect_dim"><?php echo $insight->post_title; ?></a></h4>
                                </div>
                                <div class="insights__card-info">
                                  <small><?php echo $insight->post_excerpt; ?></small>
                                </div>
                              </div>
                          <?php
                            }
                          ?>
                        </div>
                        <div class="mdlg-6 desk">
                          <?php
                            foreach($insights_odd_list as $index => $insight){
                              $featured_img_url = get_the_post_thumbnail_url($insight->ID, 'full');
                          ?>
                              <div class="insights__card">
                                <div class="insights__card-img">
                                  <a href="<?php echo get_permalink($insight->ID); ?>" class="eachThumb hoverEffect_dim">
                                    <div class="mediaWrapStyling">
                                      <img src="<?php echo aq_resize($featured_img_url, 50); ?>" data-hiResImg="<?php echo $featured_img_url; ?>" />
                                    </div>
                                  </a>
                                </div>
                                <div class="insights__card-name">
                                  <small>Dr. Lena Fan</small>
                                </div>
                                <div class="insights__card-title">
                                  <h4><a href="<?php echo get_permalink($insight->ID); ?>" class="hoverEffect_dim"><?php echo $insight->post_title; ?></a></h4>
                                </div>
                                <div class="insights__card-info">
                                  <small><?php echo $insight->post_excerpt; ?></small>
                                </div>
                              </div>
                          <?php
                            }
                          ?>
                        </div>
                      </div>
                    </div>
                    <div class="lg-12 mob insights__link">
                      <a href="<?php echo $insights['cta']['url']; ?>" class="hoverEffect_dim"><?php echo $insights['cta']['title']; ?></a>
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