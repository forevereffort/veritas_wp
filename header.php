<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php the_title(); ?> | COMO GROUP</title>
    <meta name="description" content="description">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="apple-touch-icon" sizes="180x180"
        href="<?php bloginfo('template_directory')?>/assets/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="<?php bloginfo('template_directory')?>/assets/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="<?php bloginfo('template_directory')?>/assets/favicons/favicon-16x16.png">
    <link rel="mask-icon" href="<?php bloginfo('template_directory')?>/assets/favicons/safari-pinned-tab.svg"
        color="#aaa096">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory')?>/assets/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#aaa096">
    <meta name="msapplication-config"
        content="<?php bloginfo('template_directory')?>/assets/favicons/browserconfig.xml">
    <meta name="theme-color" content="#aaa096">
    <link rel="preload" href="<?php bloginfo('template_directory')?>/assets/css/main.min.css" as="style">
    <link rel="preload" href="<?php bloginfo('template_directory')?>/assets/js/main.min.js" as="script">
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/assets/css/main.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
    <?php wp_head();?>
</head>

<body data-barba="wrapper">
    <div data-barba="container"  data-barba-namespace="single-ajax-page" data-barba-overlayTitle="<?php the_title(); ?>">
        <header>
            <div class="header">
                <div class="mainNavWrap">
                    <div class="g">
                        <div class="r">
                            <div class="mdlg-12">
                                <div class="mainNav">
                                    <a class="logo" href="<?php echo site_url(); ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 198 70">
                                            <g id="Group_44374" data-name="Group 44374"
                                                transform="translate(12240 18427)">
                                                <g id="Group_44373" data-name="Group 44373"
                                                    transform="translate(-1181 308)">
                                                    <path id="Path_107433" data-name="Path 107433"
                                                        d="M71.5,43.9c13.1,0,20.2-9.8,20.2-20.2S84.6,3.4,71.5,3.4,51.3,13.2,51.3,23.6s7.2,20.3,20.2,20.3M71.5,1c17.6,0,23,14.1,23,22.6s-5.4,22.6-23,22.6-23-14.1-23-22.6S53.9,1,71.5,1"
                                                        transform="translate(-11060 -18736)" fill="#121212" />
                                                    <path id="Path_107434" data-name="Path 107434"
                                                        d="M98.5,2h4.1l21.1,39.8L144.8,2H149V45.3h-2.8V5.9h-.1l-21,39.4h-2.8L101.4,5.9h-.2V45.3H98.5Z"
                                                        transform="translate(-11060 -18736)" fill="#121212" />
                                                    <path id="Path_107435" data-name="Path 107435"
                                                        d="M45.4,28.9c-1,8.3-8.3,17.4-21.3,17.4S1,38,1,23.7C1,13.1,8.2,1,24.1,1,34.6,1,42.5,5.9,44.7,15.6H41.9C39.8,7.3,32.2,3.4,24.1,3.4,11.7,3.4,3.8,12.7,3.8,23.6s7,20.2,20.3,20.2c9.6,0,16.9-5.6,18.5-15h2.8v.1Z"
                                                        transform="translate(-11060 -18736)" fill="#121212" />
                                                    <path id="Path_107436" data-name="Path 107436"
                                                        d="M176,43.9c13.1,0,20.2-9.8,20.2-20.2S189,3.4,176,3.4s-20.2,9.8-20.2,20.2,7.1,20.3,20.2,20.3M176,1c17.6,0,23,14.1,23,22.6s-5.4,22.6-23,22.6-23-14.1-23-22.6C152.9,15.2,158.3,1,176,1"
                                                        transform="translate(-11060 -18736)" fill="#121212" />
                                                    <path id="Path_107437" data-name="Path 107437"
                                                        d="M139,70.5h2V62.3h7.6c4.4,0,6.8-2,6.8-5.7,0-4.1-2.9-5.6-5.9-5.6H139V70.5h0Zm2-17.7h8.2c2.3,0,4,.9,4,3.8,0,2.3-1,3.8-4.4,3.8H141V52.8ZM133.8,51h-2V63c0,5.1-3.3,6.2-6.7,6.2s-6.7-1.1-6.7-6.2V51h-2V63c0,3.6,1,8,8.7,8s8.7-4.5,8.7-8ZM93.1,60.7c0-5.9,4.1-8.4,8.4-8.4s8.4,2.5,8.4,8.4-4.1,8.4-8.4,8.4-8.4-2.5-8.4-8.4m-2.2,0C90.9,67.6,96,71,101.5,71s10.6-3.4,10.6-10.3S107,50.4,101.5,50.4c-5.5.1-10.6,3.4-10.6,10.3M72.5,52.8h8.8c1.9,0,4,.6,4,3.4,0,3-2,3.8-4.2,3.8H72.5V52.8Zm-2,17.7h2V61.9h7.9c3.4,0,4.7,1.2,4.7,4.6,0,2.1.2,3.6.5,4h2.2c-.5-.4-.6-2.8-.7-4.1-.1-3.2-.7-5-3.5-5.4h0a4.725,4.725,0,0,0,3.8-4.7c0-4.1-3-5.3-6.4-5.3H70.5V70.5Zm-6.6,0h1.6V60.4h-9v1.9h7.2c-.6,3.5-2.5,6.8-8.3,6.8-5.2,0-7.9-3.2-7.9-8.4s2.9-8.4,8.3-8.4c3.5,0,6.5,1.5,7.3,4.8h2.2c-.5-3.6-4-6.7-9.5-6.7-6.5,0-10.5,4.4-10.5,10.3S48.9,71,55.5,71a8.789,8.789,0,0,0,8.1-4.2h.1l.2,3.7Z"
                                                        transform="translate(-11060 -18736)" fill="#121212" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                    <div class="mobCloseSubNavBtn">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8.061 14.707">
                                            <path id="Path_107430" data-name="Path 107430"
                                                d="M-7444.847,8515.35l-7,7,7,7"
                                                transform="translate(7452.554 -8514.996)" fill="none"
                                                stroke-width="1" />
                                        </svg>
                                        <p class="subNavTitle">OUR BUSINESSES</p>
                                    </div>
                                    <nav>
                                        <?php como_primary_nav(); ?>
                                    </nav>
                                    <!--<div class="menuBtnWrap">
                                        <p class="s menuOpenBtn">MENU</p>
                                        <p class="s menuCloseBtn">CLOSE</p>
                                    </div>-->
									<div class="burgWrap">
                                      <div class="burgBtn">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="subNavWrap">
                    <div id="our-businesses" class="eachSubNav">
                        <div class="g subNav">
                            <div class="r equalHeight">
                                <?php 
                                    $menu_background_image = get_field('menu_background_image','option');
								    $menu_background_image_url = get_field('menu_background_image_url','option');
                                    $menu_headline_prefix = get_field('menu_headline_prefix','option');
                                    $menu_headline = get_field('menu_headline','option');
                                    if( $menu_background_image){
                                ?>
                                <div class="lg-4">
                                    <a class="mediaWrap" href="<?php echo $menu_background_image_url; ?>">
                                        <div class="media">
                                            <img src="<?php echo $menu_background_image['sizes']['custom-size'];?>"
                                                data-hiResImg="<?php echo $menu_background_image['url'] ;?>" />
                                            <div class="text">
                                                <p class="s"><?php echo $menu_headline_prefix; ?></p>
                                                <?php if($menu_headline){?>
                                                <h4><?php echo $menu_headline; ?></h4>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php } ?>
                                <div class="lg-3 lg-offset-0 md-4 md-offset-1">
                                    <?php como_business_nav1(); ?>
                                </div>
                                <div class="lg-3 lg-offset-0 md-4 md-offset-1">
                                    <?php como_business_nav2(); ?>
                                </div>
                                <div class="lg-2 lg-offset-0 md-4 md-offset-1">
                                    <?php como_business_nav3(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="module-contactFormOverlay">
            <div class="topPanelWrap">
                <div class="g noMaxWidth">
                    <div class="r">
                        <div class="mdlg-8 mdlg-offset-4 md-10 md-offset-2">
                            <div class="topPanel">
                                <div class="g">
                                    <div class="r">
                                        <div class="mdlg-12">
                                            <div class="wrap">
                                                <h4 class="toggleContactFormOverlay">
                                                    <a>
                                                        CLOSE
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="whiteBg">
                <div class="g noMaxWidth">
                    <div class="r">
                        <div class="mdlg-8 mdlg-offset-4 md-10 md-offset-2">
                            <div class="bg"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overflowWrapper">
                <div class="g noMaxWidth">
                    <div class="r">
                        <div class="mdlg-8 mdlg-offset-4 md-10 md-offset-2">
                            <div class="module-contactForm">
                                <div class="r">
                                    <div class="mdlg-8 mdlg-offset-2 md-10 md-offset-1">
                                        <div class="formWrap">
                                            <?php echo do_shortcode('[contact-form-7 id="6" title="Contact form"]'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>