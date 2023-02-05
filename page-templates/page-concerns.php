<?php

/**
 * Template Name: Concerns Page
 */

get_header();
?>
<main>
  <?php
    while( have_posts() ){
      the_post();

      $top_fold_banner = get_field('top_fold_banner');
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

      <div class="grid-list">
        <div class="g">
          <div class="r">
            <div class="lg-12">
              <div id="face" class="grid-list__group" data-grid-cat="face">
                <div class="grid-list__tite">
                  <h2>Face</h2>
                </div>
                <div class="grid-list__row">
                  <div class="r rowMargin">
                    <div class="mdlg-3 md-6">
                      <div class="grid-list__card">
                        <div class="grid-list__card-img">
                          <a href="#" class="eachThumb hoverEffect_dim">
                            <div class="mediaWrapStyling">
                              <img src="assets/demo/small/demo-06.jpg" data-hiResImg="assets/demo/demo-06.jpg" />
                            </div>
                          </a>
                        </div>
                        <div class="grid-list__card-title">
                          <p><a href="#">Saggy Skin</a></p>
                        </div>
                      </div>
                    </div>
                    <div class="mdlg-3 md-6">
                      <div class="grid-list__card">
                        <div class="grid-list__card-img">
                          <a href="#" class="eachThumb hoverEffect_dim">
                            <div class="mediaWrapStyling">
                              <img src="assets/demo/small/demo-06.jpg" data-hiResImg="assets/demo/demo-06.jpg" />
                            </div>
                          </a>
                        </div>
                        <div class="grid-list__card-title">
                          <p><a href="#">Saggy Skin</a></p>
                        </div>
                      </div>
                    </div>
                    <div class="mdlg-3 md-6">
                      <div class="grid-list__card">
                        <div class="grid-list__card-img">
                          <a href="#" class="eachThumb hoverEffect_dim">
                            <div class="mediaWrapStyling">
                              <img src="assets/demo/small/demo-06.jpg" data-hiResImg="assets/demo/demo-06.jpg" />
                            </div>
                          </a>
                        </div>
                        <div class="grid-list__card-title">
                          <p><a href="#">Saggy Skin</a></p>
                        </div>
                      </div>
                    </div>
                    <div class="mdlg-3 md-6">
                      <div class="grid-list__card">
                        <div class="grid-list__card-img">
                          <a href="#" class="eachThumb hoverEffect_dim">
                            <div class="mediaWrapStyling">
                              <img src="assets/demo/small/demo-06.jpg" data-hiResImg="assets/demo/demo-06.jpg" />
                            </div>
                          </a>
                        </div>
                        <div class="grid-list__card-title">
                          <p><a href="#">Saggy Skin</a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="eyes" class="grid-list__group" data-grid-cat="eyes">
                <div class="grid-list__tite">
                  <h2>Eyes</h2>
                </div>
                <div class="grid-list__row">
                  <div class="r rowMargin">
                    <div class="mdlg-3 md-6">
                      <div class="grid-list__card">
                        <div class="grid-list__card-img">
                          <a href="#" class="eachThumb hoverEffect_dim">
                            <div class="mediaWrapStyling">
                              <img src="assets/demo/small/demo-06.jpg" data-hiResImg="assets/demo/demo-06.jpg" />
                            </div>
                          </a>
                        </div>
                        <div class="grid-list__card-title">
                          <p><a href="#">Saggy Skin</a></p>
                        </div>
                      </div>
                    </div>
                    <div class="mdlg-3 md-6">
                      <div class="grid-list__card">
                        <div class="grid-list__card-img">
                          <a href="#" class="eachThumb hoverEffect_dim">
                            <div class="mediaWrapStyling">
                              <img src="assets/demo/small/demo-06.jpg" data-hiResImg="assets/demo/demo-06.jpg" />
                            </div>
                          </a>
                        </div>
                        <div class="grid-list__card-title">
                          <p><a href="#">Saggy Skin</a></p>
                        </div>
                      </div>
                    </div>
                    <div class="mdlg-3 md-6">
                      <div class="grid-list__card">
                        <div class="grid-list__card-img">
                          <a href="#" class="eachThumb hoverEffect_dim">
                            <div class="mediaWrapStyling">
                              <img src="assets/demo/small/demo-06.jpg" data-hiResImg="assets/demo/demo-06.jpg" />
                            </div>
                          </a>
                        </div>
                        <div class="grid-list__card-title">
                          <p><a href="#">Saggy Skin</a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="skin" class="grid-list__group" data-grid-cat="skin">
                <div class="grid-list__tite">
                  <h2>Skin</h2>
                </div>
                <div class="grid-list__row">
                  <div class="r rowMargin">
                    <div class="mdlg-3 md-6">
                      <div class="grid-list__card">
                        <div class="grid-list__card-img">
                          <a href="#" class="eachThumb hoverEffect_dim">
                            <div class="mediaWrapStyling">
                              <img src="assets/demo/small/demo-06.jpg" data-hiResImg="assets/demo/demo-06.jpg" />
                            </div>
                          </a>
                        </div>
                        <div class="grid-list__card-title">
                          <p><a href="#">Saggy Skin</a></p>
                        </div>
                      </div>
                    </div>
                    <div class="mdlg-3 md-6">
                      <div class="grid-list__card">
                        <div class="grid-list__card-img">
                          <a href="#" class="eachThumb hoverEffect_dim">
                            <div class="mediaWrapStyling">
                              <img src="assets/demo/small/demo-06.jpg" data-hiResImg="assets/demo/demo-06.jpg" />
                            </div>
                          </a>
                        </div>
                        <div class="grid-list__card-title">
                          <p><a href="#">Saggy Skin</a></p>
                        </div>
                      </div>
                    </div>
                    <div class="mdlg-3 md-6">
                      <div class="grid-list__card">
                        <div class="grid-list__card-img">
                          <a href="#" class="eachThumb hoverEffect_dim">
                            <div class="mediaWrapStyling">
                              <img src="assets/demo/small/demo-06.jpg" data-hiResImg="assets/demo/demo-06.jpg" />
                            </div>
                          </a>
                        </div>
                        <div class="grid-list__card-title">
                          <p><a href="#">Saggy Skin</a></p>
                        </div>
                      </div>
                    </div>
                    <div class="mdlg-3 md-6">
                      <div class="grid-list__card">
                        <div class="grid-list__card-img">
                          <a href="#" class="eachThumb hoverEffect_dim">
                            <div class="mediaWrapStyling">
                              <img src="assets/demo/small/demo-06.jpg" data-hiResImg="assets/demo/demo-06.jpg" />
                            </div>
                          </a>
                        </div>
                        <div class="grid-list__card-title">
                          <p><a href="#">Saggy Skin</a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="body" class="grid-list__group" data-grid-cat="body">
                <div class="grid-list__tite">
                  <h2>Body</h2>
                </div>
                <div class="grid-list__row">
                  <div class="r rowMargin">
                    <div class="mdlg-3 md-6">
                      <div class="grid-list__card">
                        <div class="grid-list__card-img">
                          <a href="#" class="eachThumb hoverEffect_dim">
                            <div class="mediaWrapStyling">
                              <img src="assets/demo/small/demo-06.jpg" data-hiResImg="assets/demo/demo-06.jpg" />
                            </div>
                          </a>
                        </div>
                        <div class="grid-list__card-title">
                          <p><a href="#">Saggy Skin</a></p>
                        </div>
                      </div>
                    </div>
                    <div class="mdlg-3 md-6">
                      <div class="grid-list__card">
                        <div class="grid-list__card-img">
                          <a href="#" class="eachThumb hoverEffect_dim">
                            <div class="mediaWrapStyling">
                              <img src="assets/demo/small/demo-06.jpg" data-hiResImg="assets/demo/demo-06.jpg" />
                            </div>
                          </a>
                        </div>
                        <div class="grid-list__card-title">
                          <p><a href="#">Saggy Skin</a></p>
                        </div>
                      </div>
                    </div>
                    <div class="mdlg-3 md-6">
                      <div class="grid-list__card">
                        <div class="grid-list__card-img">
                          <a href="#" class="eachThumb hoverEffect_dim">
                            <div class="mediaWrapStyling">
                              <img src="assets/demo/small/demo-06.jpg" data-hiResImg="assets/demo/demo-06.jpg" />
                            </div>
                          </a>
                        </div>
                        <div class="grid-list__card-title">
                          <p><a href="#">Saggy Skin</a></p>
                        </div>
                      </div>
                    </div>
                    <div class="mdlg-3 md-6">
                      <div class="grid-list__card">
                        <div class="grid-list__card-img">
                          <a href="#" class="eachThumb hoverEffect_dim">
                            <div class="mediaWrapStyling">
                              <img src="assets/demo/small/demo-06.jpg" data-hiResImg="assets/demo/demo-06.jpg" />
                            </div>
                          </a>
                        </div>
                        <div class="grid-list__card-title">
                          <p><a href="#">Saggy Skin</a></p>
                        </div>
                      </div>
                    </div>
                    <div class="mdlg-3 md-6">
                      <div class="grid-list__card">
                        <div class="grid-list__card-img">
                          <a href="#" class="eachThumb hoverEffect_dim">
                            <div class="mediaWrapStyling">
                              <img src="assets/demo/small/demo-06.jpg" data-hiResImg="assets/demo/demo-06.jpg" />
                            </div>
                          </a>
                        </div>
                        <div class="grid-list__card-title">
                          <p><a href="#">Saggy Skin</a></p>
                        </div>
                      </div>
                    </div>
                    <div class="mdlg-3 md-6">
                      <div class="grid-list__card">
                        <div class="grid-list__card-img">
                          <a href="#" class="eachThumb hoverEffect_dim">
                            <div class="mediaWrapStyling">
                              <img src="assets/demo/small/demo-06.jpg" data-hiResImg="assets/demo/demo-06.jpg" />
                            </div>
                          </a>
                        </div>
                        <div class="grid-list__card-title">
                          <p><a href="#">Saggy Skin</a></p>
                        </div>
                      </div>
                    </div>
                    <div class="mdlg-3 md-6">
                      <div class="grid-list__card">
                        <div class="grid-list__card-img">
                          <a href="#" class="eachThumb hoverEffect_dim">
                            <div class="mediaWrapStyling">
                              <img src="assets/demo/small/demo-06.jpg" data-hiResImg="assets/demo/demo-06.jpg" />
                            </div>
                          </a>
                        </div>
                        <div class="grid-list__card-title">
                          <p><a href="#">Saggy Skin</a></p>
                        </div>
                      </div>
                    </div>
                    <div class="mdlg-3 md-6">
                      <div class="grid-list__card">
                        <div class="grid-list__card-img">
                          <a href="#" class="eachThumb hoverEffect_dim">
                            <div class="mediaWrapStyling">
                              <img src="assets/demo/small/demo-06.jpg" data-hiResImg="assets/demo/demo-06.jpg" />
                            </div>
                          </a>
                        </div>
                        <div class="grid-list__card-title">
                          <p><a href="#">Saggy Skin</a></p>
                        </div>
                      </div>
                    </div>
                    <div class="mdlg-3 md-6">
                      <div class="grid-list__card">
                        <div class="grid-list__card-img">
                          <a href="#" class="eachThumb hoverEffect_dim">
                            <div class="mediaWrapStyling">
                              <img src="assets/demo/small/demo-06.jpg" data-hiResImg="assets/demo/demo-06.jpg" />
                            </div>
                          </a>
                        </div>
                        <div class="grid-list__card-title">
                          <p><a href="#">Saggy Skin</a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="hair" class="grid-list__group" data-grid-cat="hair">
                <div class="grid-list__tite">
                  <h2>Hair</h2>
                </div>
                <div class="grid-list__row">
                  <div class="r rowMargin">
                    <div class="mdlg-3 md-6">
                      <div class="grid-list__card">
                        <div class="grid-list__card-img">
                          <a href="#" class="eachThumb hoverEffect_dim">
                            <div class="mediaWrapStyling">
                              <img src="assets/demo/small/demo-06.jpg" data-hiResImg="assets/demo/demo-06.jpg" />
                            </div>
                          </a>
                        </div>
                        <div class="grid-list__card-title">
                          <p><a href="#">Saggy Skin</a></p>
                        </div>
                      </div>
                    </div>
                    <div class="mdlg-3 md-6">
                      <div class="grid-list__card">
                        <div class="grid-list__card-img">
                          <a href="#" class="eachThumb hoverEffect_dim">
                            <div class="mediaWrapStyling">
                              <img src="assets/demo/small/demo-06.jpg" data-hiResImg="assets/demo/demo-06.jpg" />
                            </div>
                          </a>
                        </div>
                        <div class="grid-list__card-title">
                          <p><a href="#">Saggy Skin</a></p>
                        </div>
                      </div>
                    </div>
                    <div class="mdlg-3 md-6">
                      <div class="grid-list__card">
                        <div class="grid-list__card-img">
                          <a href="#" class="eachThumb hoverEffect_dim">
                            <div class="mediaWrapStyling">
                              <img src="assets/demo/small/demo-06.jpg" data-hiResImg="assets/demo/demo-06.jpg" />
                            </div>
                          </a>
                        </div>
                        <div class="grid-list__card-title">
                          <p><a href="#">Saggy Skin</a></p>
                        </div>
                      </div>
                    </div>
                    <div class="mdlg-3 md-6">
                      <div class="grid-list__card">
                        <div class="grid-list__card-img">
                          <a href="#" class="eachThumb hoverEffect_dim">
                            <div class="mediaWrapStyling">
                              <img src="assets/demo/small/demo-06.jpg" data-hiResImg="assets/demo/demo-06.jpg" />
                            </div>
                          </a>
                        </div>
                        <div class="grid-list__card-title">
                          <p><a href="#">Saggy Skin</a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <?php get_template_part('theme-setting/contact', 'info'); ?>
  <?php
    }
  ?>
</main>
<?php get_footer();