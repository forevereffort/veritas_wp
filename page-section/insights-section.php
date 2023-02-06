<?php
  $insights = $args['insights'];
?>
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