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

        <?php get_template_part('page-section/module', '2ColImgText', array('our_commitment' => $our_commitment)); ?>

        <?php get_template_part('theme-setting/press', 'features'); ?>

        <?php get_template_part('theme-setting/contact', 'info'); ?>
  <?php
    }
  ?>
</main>
<?php get_footer();