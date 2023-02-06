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
      <?php get_template_part('page-section/module', 'topFold-page', array('top_fold_banner' => $top_fold_banner)); ?>
      <?php
        $terms = get_terms('concern-category', array(
          'hide_empty' => false,
        ));
        print_r($terms);
      ?>
      <div class="grid-list">
        <div class="g">
          <div class="r">
            <div class="lg-12">
              <?php
                foreach($terms as $term){
              ?>
                  <div id="face" class="grid-list__group" data-grid-cat="face">
                    <div class="grid-list__tite">
                      <h2><?php echo $term->name; ?></h2>
                    </div>
                    <div class="grid-list__row">
                      <div class="r rowMargin">
                        <?php
                          $the_query = new WP_Query($args);
                          if($the_query->have_posts()){
                            while($the_query->have_posts()){
                              $the_query->the_post();
                            }
                          }
                        ?>
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
              <?php
                }
              ?>
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