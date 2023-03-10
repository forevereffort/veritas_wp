<?php

/**
 * Template Name: Contact Page
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
      <?php get_template_part('theme-setting/contact', 'info', array('white_background' => true)); ?>
  <?php
    }
  ?>
</main>
<?php get_footer();