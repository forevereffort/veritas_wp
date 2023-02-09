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
            <?php echo do_shortcode('[ajax_load_more container_type="div" css_classes="r rowMargin" repeater="template_4" post_type="video" posts_per_page="8" scroll="false" transition="none" transition_container="false"]'); ?>
              <?php
                /*$args = array(
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

                wp_reset_postdata();*/
              ?>
          </div>
        </div>

        <?php get_template_part('theme-setting/contact', 'info'); ?>
  <?php
    }
  ?>
</main>
<?php get_footer();