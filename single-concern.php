<?php get_header(); ?>

<main>
    <?php
        while( have_posts() ){
            the_post();

            $top_fold_banner = get_field('top_fold_banner');
    ?>
            <?php get_template_part('page-section/module', 'topFold-concern', array('top_fold_banner' => $top_fold_banner)); ?>

            <?php get_template_part('theme-setting/doctor', 'bios'); ?>

            <?php get_template_part('theme-setting/contact', 'info'); ?>
    <?php
        }
    ?>
</main>

<?php get_footer();