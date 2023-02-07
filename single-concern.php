<?php get_header(); ?>

<div class="module-secondaryHeader module-secondaryHeader__withMobAnchorStyling">
  <div class="g">
    <div class="r">
      <div class="md-12">
        <div class="secondaryHeaderWrap">
          <div class="navWrapMobOverflow">
            <div class="navWrapMob">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 11.115">
                <path id="Icon_material-keyboard-arrow-left" data-name="Icon material-keyboard-arrow-left" d="M23.115,24.135l-6.87-6.885,6.87-6.885L21,8.25l-9,9,9,9Z" transform="translate(-8.25 23.115) rotate(-90)" />
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
      $faqs = get_field('faqs');
      $flexible_content = get_field('flexible_content');
  ?>
        <?php get_template_part('page-section/module', 'topFold-concern', array('top_fold_banner' => $top_fold_banner)); ?>

        <?php get_template_part('flexible-content/flexible', 'content', array('flexible_content' => $flexible_content)); ?>

        <?php get_template_part('page-section/module', 'faq', array('faqs' => $faqs)); ?>

        <?php get_template_part('theme-setting/doctor', 'bios'); ?>

        <?php get_template_part('theme-setting/contact', 'info'); ?>
  <?php
    }
  ?>
</main>

<?php get_footer();