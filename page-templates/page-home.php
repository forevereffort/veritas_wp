<?php

/**
 * Template Name: Home Page
 */

get_header();
?>
<main>
  <?php
    while( have_posts() ){
      the_post();

      $top_fold_banner = get_field('top_fold_banner');
      $our_ethos = get_field('our_ethos');
      $meet_our_doctors = get_field('meet_our_doctors');
      $four_column_content = get_field('4_column_content');
      $our_treatments = get_field('our_treatments');
      $clinic_features = get_field('clinic_features');
      $insights = get_field('insights');
      $bottom_banner = get_field('bottom_banner');
  ?>
        <?php get_template_part('page-section/module', 'topFold', array('top_fold_banner' => $top_fold_banner)); ?>

        <?php get_template_part('theme-setting/press', 'features'); ?>

        <?php get_template_part('page-section/module', 'bgImgWithCenText', array('our_ethos' => $our_ethos)); ?>

        <?php get_template_part('page-section/module', '2ColImgTextOwl', array('meet_our_doctors' => $meet_our_doctors)); ?>

        <?php get_template_part('theme-setting/4-column', 'content', array('four_column_content' => $four_column_content)); ?>

        <?php get_template_part('page-section/module', '4ColListing', array('our_treatments' => $our_treatments)); ?>

        <?php get_template_part('theme-setting/2-column', 'content'); ?>

        <?php get_template_part('page-section/clinic', 'features', array('clinic_features' => $clinic_features)); ?>

        <?php get_template_part('page-section/insights', 'section', array('insights' => $insights)); ?>

        <?php get_template_part('theme-setting/contact', 'info'); ?>

        <?php get_template_part('page-section/module', 'bgImgWithCenText-home-footer', array('bottom_banner' => $bottom_banner)); ?>
  <?php
    }
  ?>
</main>
<?php get_footer();