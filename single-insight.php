<?php get_header(); ?>
<div class="module-secondaryHeader">
  <div class="g">
    <div class="r">
      <div class="md-12">
        <div class="secondaryHeaderWrap">
          <div class="titleWrap">
            <small>Fungal acne in singapore — this grossly underdiagnosed condition may be the reason why your acne treatments are not working</small>
          </div>
          <div class="socialWrap">
            <small>Share</small>
            <a class="hoverEffect_dim" href="https://www.facebook.com/sharer.php?u=https://veritas.com/" target="_blank" rel="noopener noreferrer">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9.832 19.021">
                <path id="Path_107294" data-name="Path 107294" d="M-1245.3,1458.9v-3.1s-3.166-.03-3.38-.03a3.914,3.914,0,0,0-3.488,3.474v3.314h-2.965v3.515h2.924v8.719h3.461v-8.759h3.059l.389-3.434h-3.407v-2.522a1.17,1.17,0,0,1,1.14-1.2C-1247.115,1458.88-1245.3,1458.9-1245.3,1458.9Z" transform="translate(1255.136 -1455.773)" />
              </svg>
            </a>
            <a class="hoverEffect_dim" href="https://twitter.com/intent/tweet?url=https://veritas.com/" target="_blank" rel="noopener noreferrer">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.072 18.5">
                <path id="Path_107293" data-name="Path 107293" d="M-1339.647,1527.615a4.371,4.371,0,0,0-3.341-1.4c-2.516.083-4.854,1.622-4.583,5.568,0,0-3.79,1.155-9.689-4.455,0,0-1.9,3.094,1.457,6.009a3.13,3.13,0,0,1-2.2-.44s-.674,2.612,3.644,4.592c0,0-1.458.413-2.117,0,0,0,.385,2.778,4.262,3.438,0,0-1.994,1.98-6.71,1.925,0,0,9.807,5.019,16.607-1.431a13.851,13.851,0,0,0,4.182-10.752,4.331,4.331,0,0,0,2.283-1.994,8.924,8.924,0,0,1-2.557.426s1.787-1.115,1.925-2.434A5.452,5.452,0,0,1-1339.647,1527.615Z" transform="translate(1358.924 -1526.21)" />
              </svg>
            </a>
            <div class="toClipboardBtn" data-copyThisUrl="https://veritas.com/">
              <svg class="hoverEffect_dim" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.522 17.521">
                <g id="Group_36114" data-name="Group 36114" transform="translate(13612.001 -3488.489)">
                  <path id="Path_107343" data-name="Path 107343" d="M181.066,1.376a4.673,4.673,0,0,0-6.608,0l-2.607,2.606a5.776,5.776,0,0,1,.625-.032,6.033,6.033,0,0,1,1.909.307l1.477-1.477a2.686,2.686,0,0,1,3.8,3.8l-2.891,2.891a2.689,2.689,0,0,1-4.372-.845,1.332,1.332,0,0,0-.873.39l-.77.771a4.674,4.674,0,0,0,7.419,1.089l2.891-2.892A4.673,4.673,0,0,0,181.066,1.376Z" transform="translate(-13776.912 3488.481)" />
                  <path id="Path_107344" data-name="Path 107344" d="M10,162.735a5.992,5.992,0,0,1-1.93-.318l-1.488,1.488a2.686,2.686,0,0,1-3.8-3.8l2.891-2.891a2.69,2.69,0,0,1,4.372.846,1.328,1.328,0,0,0,.874-.39l.769-.77a4.675,4.675,0,0,0-7.419-1.09L1.376,158.7a4.672,4.672,0,0,0,6.607,6.608l2.6-2.6c-.194.018-.39.028-.588.028Z" transform="translate(-13612.008 3339.332)" />
                </g>
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
  ?>
        <?php get_template_part('page-section/module', 'topFold-insight', array('top_fold_banner' => $top_fold_banner)); ?>

        <div class="single-article">
          <div class="single-article__title">
            <div class="g">
              <div class="r">
                <div class="lg-12">
                  <small><?php echo get_field('author_name'); ?></small>
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
                    'post_type' => 'insight',
                    'posts_per_page' => -1,
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
                          <small>Position (optional)</small>
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
  <?php
    }
  ?>
</main>

<?php get_footer();