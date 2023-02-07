<?php get_header(); ?>
<main>
  <?php
    while( have_posts() ){
      the_post();

      $top_fold_banner = get_field('top_fold_banner');
      $flexible_content = get_field('flexible_content');
      $main_id = get_the_ID();
  ?>
        <?php get_template_part('page-section/module', 'topFold-insight', array('top_fold_banner' => $top_fold_banner)); ?>

        <div class="single-article">
          <div class="single-article__title">
            <div class="g">
              <div class="r">
                <div class="lg-12">
                  <small><?php echo get_field('publication_name'); ?></small>
                  <h1><?php the_title(); ?></h1>
                </div>
              </div>
            </div>
          </div>
          <div class="single-article__content">
            <div class="g">
              <div class="r">
                <div class="mdlg-offset-3 mdlg-7">
                <?php get_template_part('flexible-content/flexible', 'content', array('flexible_content' => $flexible_content)); ?>
                </div>
              </div>
            </div>
          </div>
          <div class="module-4ColListing">
            <div class="g">
              <div class="r">
                <div class="lg-12">
                  <div class="sectionTitleStyling">
                    <h5>READ MORE</h5>
                  </div>
                </div>
              </div>
            </div>

            <div class="g">
              <div class="r rowMargin">
                <?php
                  $args = array(
                    'post_type' => 'press',
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
                          <small><?php echo get_field('publication_name'); ?></small>
                          <h4><a href="<?php echo get_the_permalink();?>" class="hoverEffect_dim"><?php the_title(); ?></a></h4>
                          <p><?php the_excerpt(); ?></p>
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
        </div>

        <?php get_template_part('theme-setting/contact', 'info'); ?>
  <?php
    }
  ?>
</main>

<?php get_footer();