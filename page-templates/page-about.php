<?php

/**
 * Template Name: About Page
 */

get_header();
?>
<main>
  <?php
    while( have_posts() ){
      the_post();

      $top_fold_banner = get_field('top_fold_banner');
      $our_commitment = get_field('our_commitment');
  ?>
        <?php get_template_part('page-section/module', 'topFold-page', array('top_fold_banner' => $top_fold_banner)); ?>

        <?php get_template_part('theme-setting/2-column', 'content'); ?>

        <?php get_template_part('theme-setting/2-column', 'content'); ?>

        <?php get_template_part('theme-setting/4-column', 'content'); ?>

        <div class="module-2ColImgText">
          <div class="g">
            <div class="r">
              <div class="lg-12">
                <div class="sectionTitleStyling">
                  <h2><?php echo $our_commitment['headline']; ?></h2>
                </div>
              </div>
            </div>
          </div>

          <div class="g">
            <div class="r rowMargin">
              <div class="mdlg-6">
                <div class="paraListingWrap">
                  <?php
                    foreach($our_commitment['bullet_points'] as $bullet_point){
                  ?>
                      <p><?php echo $bullet_point['bullet_point']; ?></p>
                  <?php
                    }
                  ?>
                </div>

                <a href="<?php echo $our_commitment['cta']['url']; ?>" class="buttonWithArrowStyling buttonWithArrowStyling_red">
                  <p><?php echo $our_commitment['cta']['title']; ?></p>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 14.795">
                    <path id="Path_97" data-name="Path 97" d="M1.1-8.621v1.8h17.12v.872A4.906,4.906,0,0,0,15.4-4.446l-2.88,2.88L13.759-.325l7.345-7.4-7.345-7.4-1.242,1.242L15.5-10.919a4.814,4.814,0,0,0,2.721,1.427v.872Z" transform="translate(-1.104 15.12)" fill="#dad9d7" />
                  </svg>
                </a>            
              </div>
              <div class="mdlg-6">
                <div class="wysiwygWrapStyling">
                  <?php echo $our_commitment['description']; ?>
                </div>
              </div>
            </div>
          </div>
        </div>

        <?php get_template_part('theme-setting/press', 'features'); ?>

        <?php get_template_part('theme-setting/contact', 'info'); ?>
  <?php
    }
  ?>
</main>
<?php get_footer();