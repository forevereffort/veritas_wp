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
      $two_column_content_our_ethos = get_field('2_column_content_our_ethos');
      $two_column_content_our_doctors = get_field('2_column_content_our_doctors');
      $four_column_content_our_team = get_field('4_column_content_our_team');
      $our_commitment = get_field('our_commitment');
  ?>
        <?php get_template_part('page-section/module', 'topFold-page', array('top_fold_banner' => $top_fold_banner)); ?>

        <?php get_template_part('theme-setting/2-column', 'content', array('two_column_content' => $two_column_content_our_ethos)); ?>

        <?php get_template_part('theme-setting/2-column', 'content', array('two_column_content' => $two_column_content_our_doctors)); ?>

        <?php get_template_part('theme-setting/4-column', 'content', array('four_column_content' => $four_column_content_our_team)); ?>

        <?php get_template_part('page-section/module', '2ColImgText', array('our_commitment' => $our_commitment)); ?>

        <?php get_template_part('theme-setting/press', 'features'); ?>

        <?php get_template_part('theme-setting/contact', 'info'); ?>
  <?php
    }
  ?>
</main>
<?php get_footer();