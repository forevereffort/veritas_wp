<?php

/**
 * Template Name: Videos Page
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

        <div class="card-grid">
          <div class="g">
            <div class="r rowMargin">
              <?php
                $args = array(
                  'post_type' => 'video',
                  'posts_per_page' => -1
                );

                $the_query = new WP_Query( $args );
                if ( $the_query->have_posts() ) {
                  while ( $the_query->have_posts() ) {
                    $the_query->the_post();

                    $featured_img_url = get_the_post_thumbnail_url(null, 'full');
              ?>
                    <div class="lg-3 md-6">
                      <div class="card-grid__card">
                        <div class="card-grid__card-img">
                          <a href="<?php the_permalink(); ?>" class="eachThumb hoverEffect_dim">
                            <div class="mediaWrapStyling">
                              <img src="<?php echo aq_resize($featured_img_url, 50); ?>" data-hiResImg="<?php echo $featured_img_url; ?>"/>
                            </div>
                          </a>
                        </div>
                        <div class="card-grid__card-info">
                          <p class="s">Video</p>
                          <h4><a href="<?php the_permalink(); ?>" class="hoverEffect_dim"><?php the_title(); ?></a></h4>
                          <div class="card-grid__card-link">
                            <p class="s reckless_neue_light"><a href="<?php the_permalink(); ?>" class="hoverEffect_dim">Read more</a></p>
                          </div>
                        </div>
                      </div>
                    </div>
              <?php
                  }
                }

                wp_reset_postdata();
              ?>
            </div>
          </div>
          <div class="g">
            <div class="r">
              <div class="lg-12">
                <div class="card-grid__btn-wrapper">
                  <button class="card-grid__btn">
                    <p class="s">LOAD MORE</p>
                  </button>
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