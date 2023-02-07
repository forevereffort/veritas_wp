<?php get_header(); ?>

<div class="module-secondaryHeader module-secondaryHeader__withMobAnchorStyling">
  <div class="g">
    <div class="r">
      <div class="md-12">
        <div class="secondaryHeaderWrap">
          <div class="navWrapMobOverflow">
            <div class="navWrapMob">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 11.115">
                <path id="Icon_material-keyboard-arrow-left" data-name="Icon material-keyboard-arrow-left" d="M23.115,24.135l-6.87-6.885,6.87-6.885L21,8.25l-9,9,9,9Z" transform="translate(-8.25 23.115) rotate(-90)" />
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="progressBar">
    <div class="bar"></div>
  </div>
</div>

<main>
  <?php
    while( have_posts() ){
      the_post();

      $top_fold_banner = get_field('top_fold_banner');
      $flexible_content = get_field('flexible_content');
      $main_id = get_the_ID();
      $faqs = get_field('faqs');
  ?>
        <?php get_template_part('page-section/module', 'topFold-treatment', array('top_fold_banner' => $top_fold_banner)); ?>

        <div class="module-singleArticleBodyWithSideNav">
          <div class="g">
            <div class="r">
              <div class="mdlg-3">
                <div class="sticky">
                  <div class="sideNavWrap"></div>
                </div>
              </div>
              <div class="mdlg-7">
                <?php get_template_part('flexible-content/flexible', 'content', array('flexible_content' => $flexible_content)); ?>
              </div>
            </div>
          </div>
        </div>

        <?php get_template_part('page-section/module', 'faq', array('faqs' => $faqs)); ?>
        
        <?php get_template_part('theme-setting/contact', 'info'); ?>

        <div class="module-4ColListing">
          <div class="g">
            <div class="r">
              <div class="lg-12">
                <div class="sectionTitleStyling">
                  <h5>EXPLORE OTHER TREATMENTS</h5>
                </div>
              </div>
            </div>
          </div>

          <div class="g">
            <div class="r rowMargin">
              <?php
                $args = array(
                  'post_type' => 'treatment',
                  'posts_per_page' => 4,
                  'post__not_in' => array($main_id),
                  'orderby' => 'rand'
                );

                $the_query = new WP_Query($args);
                if($the_query->have_posts()){
                  while($the_query->have_posts()){
                    $the_query->the_post();

                    $featured_img_url = get_the_post_thumbnail_url(null, 'full');
              ?>
                    <div class="mdlg-3 md-6">
                      <div class="eachThumb">
                        <a href="<?php echo get_the_permalink();?>" class="hoverEffect_dim">
                          <div class="mediaWrapStyling">
                            <img src="<?php echo aq_resize($featured_img_url, 50); ?>" data-hiResImg="<?php echo $featured_img_url; ?>" />
                          </div>
                        </a>
                        <h4><a href="<?php echo get_the_permalink();?>" class="hoverEffect_dim"><?php the_title(); ?></a></h4>
                      </div>
                    </div>
              <?php
                  }
                }

                wp_reset_postdata();
              ?>
            </div>
          </div>
        </div>
  <?php
    }
  ?>
</main>

<?php get_footer();