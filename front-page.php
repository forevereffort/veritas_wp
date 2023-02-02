<?php get_header(); ?>
<div class="module-scrollDownIndi">
    <div class="indiWrap">
        <div class="indi"></div>
    </div>
</div>
<main>
    <?php $mainBanner = get_field('main_banner'); ?>
    <div class="module-fullscreenImgWithCenTitle">
        <div class="textWrap" data-gsapStaggerInViewFadeIn>
            <div class="g">
                <div class="r">
                    <div class="mdlg-8 mdlg-offset-2">
                        <h1>
                            <a class="barbaBtn barba-custom-overlay"
                                href="<?php echo $mainBanner['url']; ?> "><?php echo $mainBanner['headline']; ?> </a>
                        </h1>
						<h2><?php echo $mainBanner['subheadline']; ?></h2>
                    </div>
                </div>
            </div>
        </div>

        <?php if($mainBanner['background'] == 'image'): ?>
        <div class="mediaWrap">
            <div class="media">
                <!-- desktop img/video -->
                <img class="desk" src="<?php echo $mainBanner['desktop_image']['sizes'][ 'custom-size' ] ;?>"
                    data-hiresimg="<?php echo esc_url($mainBanner['desktop_image']['url']); ?>" />
                <!-- table img/video -->
                <img class="tab" src="<?php echo $mainBanner['tablet_image']['sizes'][ 'custom-size' ] ;?>"
                    data-hiresimg="<?php echo esc_url($mainBanner['tablet_image']['url']); ?>" />
                <!-- mobile img/video -->
                <img class="mob" src="<?php echo $mainBanner['mobile_image']['sizes'][ 'custom-size' ] ;?>"
                    data-hiresimg="<?php echo esc_url($mainBanner['mobile_image']['url']); ?>" />
            </div>
        </div>
        <?php else :?>
        <div class="mediaWrap">
            <div class="media">
                <video class="desk" playsinline loop muted preload="auto" poster="<?php echo esc_url($mainBanner['desktop_video_poster_image']); ?>" data-lazyVideo >
                    <source src="<?php echo $mainBanner['desktop_mp4']['url'] ;?>" type="video/mp4" />
                </video>
                <!-- table video -->
                <video class="tab" playsinline loop muted preload="auto" poster="<?php echo esc_url($mainBanner['tablet_video_poster_image']); ?>" data-lazyVideo>
                    <source src="<?php echo $mainBanner['tablet_mp4']['url'] ;?>" type="video/mp4" />
                </video>
                <!-- mobile video -->
                <video class="mob" playsinline loop muted preload="auto" poster="<?php echo esc_url($mainBanner['mobile_video_poster_image']); ?>" data-lazyVideo>
                    <source src="<?php echo $mainBanner['mobile_mp4']['url'] ;?>" type="video/mp4" />
                </video>
            </div>
        </div>
        <?php endif; ?>
    </div>


    <?php
    $news = get_field('news');
    $featured_posts = $news['featured_news'];
    if( $featured_posts): ?>
    <div class="module-thumbnailsCarousel withAlternateHeight" data-gsapStaggerInViewFadeIn>
        <div class="g module-sectionTitle">
            <div class="r">
                <div class="mdlg-12">
                    <hr />
                    <h2>MORE NEWS</h2>
                </div>
            </div>
        </div>
        <div class="g">
            <div class="r">
                <div class="mdlg-12">
                    <div class="owlThumbnails owl-carousel">
                        <?php foreach( $featured_posts as $post ): 
                                setup_postdata($post); ?>
                        <div class="eachBox">
                            <a class="mediaWrap barbaBtn barba-custom-overlay" href="<?php the_permalink(); ?>">
                                <div class="media">
                                    <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'custom-size'); ?>"
                                        data-hiResImg="<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>" />
                                </div>
                            </a>
                            <div class="detailedTextWrap">
                                <p class="date"><?php echo get_the_date('d M Y'); ?></p>
                                <a class="titleWrap barbaBtn barba-custom-overlay" href="<?php the_permalink(); ?>">
                                    <h3 class="medium"><?php the_title(); ?></h3>
                                </a>
                                <p class="desc"><?php echo get_the_excerpt(); ?></p>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="owlCustomNav">
                        <div class="owlCustomBtnWrap">
                            <div class="owlCustomBtn">
                                <div class="prev disabled">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.862 10">
                                        <path id="Icon_material-arrow-forward" data-name="Icon material-arrow-forward"
                                            d="M18.862,0l-.881.881,3.487,3.494H0v1.25H21.469L17.981,9.119l.881.881,5-5Z"
                                            transform="translate(23.862 10) rotate(180)" fill="#121212"></path>
                                    </svg>
                                </div>
                                <div class="next">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.862 10">
                                        <path id="Icon_material-arrow-forward" data-name="Icon material-arrow-forward"
                                            d="M18.862,0l-.881.881,3.487,3.494H0v1.25H21.469L17.981,9.119l.881.881,5-5Z"
                                            transform="translate(23.862 10) rotate(180)" fill="#121212"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 

    wp_reset_postdata(); ?>
    <?php endif; ?>

    <?php
    if( have_rows('businesses') ):
        while( have_rows('businesses') ) : the_row();
    ?>
    <div class="module-thumbListing2Col">
        <div class="g module-sectionTitle">
            <div class="r">
                <div class="mdlg-12">
                    <hr />
                    <h2>BUSINESSES</h2>
                </div>
            </div>
        </div>
        <div class="g">
            <div class="r rowMarginDouble">
                <?php 
                if( have_rows('business_unit') ):
                while( have_rows('business_unit') ) : the_row(); 
                $url =  get_sub_field('url'); 
                $front_choice =  get_sub_field('background_one'); 
                $back_choice =  get_sub_field('background_two'); 
                
                $front_image =  get_sub_field('front_image'); 
                $front_video =  get_sub_field('front_video');

                $back_image =  get_sub_field('back_image'); 
                $back_video =  get_sub_field('back_video'); 
               
                ?>
                <div class="md-6">
                    <div class="eachWrap" data-gsapStaggerInViewFadeIn>
                        <a class="mediaWrap" href="<?php echo $url; ?>">
                            <?php if($front_choice): ?>
                            <div class="media front">
                                <!-- image -->
                                <?php if($front_choice == 'image'): ?>
                                <img src="<?php echo $front_image['sizes'][ 'custom-size' ] ;?>"
                                    data-hiresimg="<?php echo esc_url($front_image['url']); ?>" />
                                <?php else: ?>
                                <!-- video -->
                                <video playsinline loop muted preload="auto" data-lazyVideo>
                                    <source src="<?php echo $front_video['url']; ?>" type="video/mp4" />
                                </video>
                                <?php endif; ?>
                            </div>
                            <?php endif; ?>
                            <?php if($back_choice): ?>
                            <div class="media back">
                                <!-- image -->
                                <?php if($back_choice == 'image'): ?>
                                <img src="<?php echo $back_image['sizes'][ 'custom-size' ] ;?>"
                                    data-hiresimg="<?php echo esc_url($back_image['url']); ?>" />
                                <?php else: ?>
                                <!-- video -->
                                <video playsinline loop muted preload="auto" data-lazyVideo>
                                    <source src="<?php echo $back_video['url']; ?>" type="video/mp4" />
                                </video>
                                <?php endif; ?>
                            </div>
                            <?php endif; ?>
                        </a>
                        <a class="titleWrap" href="<?php echo $url; ?>">
                            <h4><?php the_sub_field('title'); ?></h4>
                        </a>
                    </div>
                </div>
                <?php
                endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
    <?php
                endwhile;
                endif;
                ?>
    <?php $talent = get_field('talent'); ?>
    <div class="module-fullscreenImgWithTextWrap">
        <div class="textWrap">
            <div class="g">
                <div class="r">
                    <div class="mdlg-6 mdlg-offset-3">
                        <h2>TALENT</h2>
                        <div class="paraWrap">
                            <?php echo $talent['blurb']; ?>
                        </div>
                        <div class="ctaLinksWrap">
                            <h4><a href="<?php echo get_permalink(24); ?> ">FIND OUT MORE</a></h4>
                            <h4><a href=" <?php echo $talent['job_offers_url']; ?>">VIEW OUR JOB OPPORTUNITIES</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if($talent['background'] == 'image'): ?>
        <div class="mediaWrap">
            <div class="media">
                <!-- desktop img/video -->
                <img class="desk" src="<?php echo $talent['desktop_image']['sizes'][ 'custom-size' ] ;?>"
                    data-hiresimg="<?php echo esc_url($talent['desktop_image']['url']); ?>" />
                <!-- table img/video -->
                <img class="tab" src="<?php echo $talent['tablet_image']['sizes'][ 'custom-size' ] ;?>"
                    data-hiresimg="<?php echo esc_url($talent['tablet_image']['url']); ?>" />
                <!-- mobile img/video -->
                <img class="mob" src="<?php echo $talent['mobile_image']['sizes'][ 'custom-size' ] ;?>"
                    data-hiresimg="<?php echo esc_url($talent['mobile_image']['url']); ?>" />
            </div>
        </div>
        <?php else :?>
        <div class="mediaWrap">
            <div class="media">
                <video class="desk" playsinline loop muted preload="auto" width="320" height="240" data-lazyVideo>
                    <source src="<?php echo $talent['desktop_mp4']['url'] ;?>" type="video/mp4" />
                </video>
                <!-- table video -->
                <video class="tab" playsinline loop muted preload="auto" data-lazyVideo>
                    <source src="<?php echo $talent['tablet_mp4']['url'] ;?>" type="video/mp4" />
                </video>
                <!-- mobile video -->
                <video class="mob" playsinline loop muted preload="auto" data-lazyVideo>
                    <source src="<?php echo $talent['mobile_mp4']['url'] ;?>" type="video/mp4" />
                </video>
            </div>
        </div>
        <?php endif; ?>
    </div>
    <?php $about = get_field('about'); ?>

    <div class="module-col2ImgText">
        <div class="g module-sectionTitle">
            <div class="r">
                <div class="mdlg-12">
                    <hr />
                    <h2>ABOUT US</h2>
                </div>
            </div>
        </div>
        <div class="g">
            <div class="r rowMargin">
                <div class="lg-6 md-6">
                    <div class="mediaWrap" data-gsapStaggerInViewFadeIn>
                        <div class="media">
                            <img class="desk" src="<?php echo $about['image']['sizes'][ 'custom-size' ] ;?>"
                                data-hiresimg="<?php echo esc_url($about['image']['url']); ?>" />
                        </div>
                    </div>
                </div>
                <div class="lg-4 lg-offset-1 md-6">
                    <div class="paraWrap">
                        <?php echo $about['blurb']; ?>
                    </div>
                    <h4 class="textCta"><a href="<?php echo get_permalink(20); ?>">DISCOVER MORE</a></h4>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>