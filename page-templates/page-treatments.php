<?php

/**
 * Template Name: Treatments Page
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
        $terms = get_terms('treatment-category', array(
          'hide_empty' => false,
        ));
      ?>
      <div class="grid-list">
        <div class="g">
          <div class="r">
            <div class="lg-12">
              <?php
                foreach($terms as $term){
              ?>
                  <div id="<?php echo $term->slug; ?>" class="grid-list__group" data-grid-cat="<?php echo $term->slug; ?>">
                    <div class="grid-list__tite">
                      <h2><?php echo $term->name; ?></h2>
                    </div>
                    <div class="grid-list__row">
                      <div class="r rowMargin">
                        <?php
                          $args = array(
                            'post_type' => 'treatment',
                            'tax_query' => array(
                              array(
                                'taxonomy' => 'treatment-category',
                                'field' => 'term_id',
                                'terms' => $term->term_id
                              )
                            )
                          );

                          $the_query = new WP_Query($args);
                          if($the_query->have_posts()){
                            while($the_query->have_posts()){
                              $the_query->the_post();

                              $featured_img_url = get_the_post_thumbnail_url(null, 'full');
                        ?>
                              <div class="mdlg-3 md-6">
                                <div class="grid-list__card">
                                  <div class="grid-list__card-img">
                                    <a href="<?php the_permalink(); ?>" class="eachThumb hoverEffect_dim">
                                      <div class="mediaWrapStyling">
                                        <img src="<?php echo aq_resize($featured_img_url, 50); ?>" data-hiResImg="<?php echo $featured_img_url; ?>" />
                                      </div>
                                    </a>
                                  </div>
                                  <div class="grid-list__card-title">
                                    <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
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
                  </div>
              <?php
                }
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