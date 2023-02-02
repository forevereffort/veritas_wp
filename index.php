<?php
get_header();

?>
<section class="news-module">
    <div class="container container-xl">
        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    <?php
                    while (have_posts()) : the_post();
                        ?>
                        <!-- News Classic -->
                        <article class="blog-posts col-xl-4 col-lg-6">
                            <a href="<?php the_permalink(); ?>">
                                <div class="feature-image">
                                    <?php echo wp_get_attachment_image(get_post_thumbnail_id($post->ID), 'large'); ?>
                                    <h2 class="title">
                                        <?php the_title(); ?>
                                    </h2>
                                </div>
                            </a>

                            <div class="entry">
                                <p> <?php echo wp_trim_words(get_the_excerpt(), 30, '...'); ?></p>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="learn-more">Learn More</a>
                        </article>
                        <!-- End News Classic -->
                        <?php
                    endwhile;
                    ?>
                </div>
                <nav>
                    <?php
                    if (function_exists('wp_pagenavi')) {
                        wp_pagenavi();
                    }
                    ?>
                </nav>
            </div>
            <div class="col-lg-3 ">
                <div class="sticky">
                    <?php dynamic_sidebar('newswidget'); ?>
                </div>
            </div>
            <!-- End News Classic -->
        </div>
    </div>
    <!-- End Blog Classic Section -->
</section>


<?php
get_footer();
