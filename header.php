<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php the_title(); ?> | Veritas</title>
  <meta name="description" content="description">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory')?>/assets/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory')?>/assets/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory')?>/assets/favicons/favicon-16x16.png">
  <link rel="mask-icon" href="<?php bloginfo('template_directory')?>/assets/favicons/safari-pinned-tab.svg" color="#aaa096">
  <link rel="shortcut icon" href="<?php bloginfo('template_directory')?>/assets/favicons/favicon.ico">
  <meta name="msapplication-TileColor" content="#aaa096">
  <meta name="msapplication-config" content="<?php bloginfo('template_directory')?>/assets/favicons/browserconfig.xml">
  <meta name="theme-color" content="#aaa096">
  <link rel="preload" href="<?php bloginfo('template_directory')?>/assets/css/main.min.css" as="style">
  <link rel="preload" href="<?php bloginfo('template_directory')?>/assets/js/main.min.js" as="script">
  <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/assets/css/main.min.css">
  <?php wp_head();?>
</head>
<body>
  <?php $contact_info = get_field('contact_info', 'option'); ?>
  <div class="fixedBtn">
    <div class="g">
      <div class="r">
        <div class="lg-12">
          <div class="fixedBtn__row">
            <div class="fixedBtn__inner fixedBtn__inner--hidden">
              <div class="fixedBtn__hover">
                <div class="fixedBtn__item">
                  <a href="tel:<?php echo $contact_info['telephone_number']; ?>" class="buttonWithArrowStyling buttonWithArrowStyling_red">
                    <p>Call us</p>
                  </a>
                </div>
                <div class="fixedBtn__item">
                  <a href="https://api.whatsapp.com/send?phone=<?php echo trimNumber($contact_info['whatsapp_number']); ?>" class="buttonWithArrowStyling buttonWithArrowStyling_red">
                    <p>Whatsapp</p>
                  </a>
                </div>
                <div class="fixedBtn__item">
                  <a href="<?php echo site_url(); ?>/contact/" class="buttonWithArrowStyling buttonWithArrowStyling_red">
                    <p>Contact form</p>
                  </a>
                </div>
              </div>
              <div class="fixedBtn__normal">
                <div class="buttonWithArrowStyling buttonWithArrowStyling_red">
                  <p>Get in touch</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <header>
    <div class="headerWrap">
      <div class="mainNavWrap">
        <div class="g">
          <div class="r">
            <div class="md-4 xs-5">
              <div class="leftWrap">
                <a class="logoWrap hoverEffect_dim" href="<?php echo site_url(); ?>">
                  <?php include_once 'assets/media/header-logo.svg'; ?>
                </a>

                <small class="mobSubNavBackBtn hoverEffect_dim">Back</small>
              </div>
            </div>

            <div class="md-8 xs-7">
              <div class="rightWrap">
                <nav>
                  <?php header_desktop_root_nav(); ?>
                </nav>

                <div class="iconsNav">
                  <div class="eachIcon hoverEffect_dim searchBtn openSearchBarBtn">
                    <?php include_once 'assets/media/header-search.svg'; ?>
                  </div>

                  <a class="eachIcon hoverEffect_dim" target="_blank" href="tel:+6562833885">
                    <?php include_once 'assets/media/header-phone.svg'; ?>
                  </a>

                  <a class="eachIcon hoverEffect_dim" target="_blank" href="https://api.whatsapp.com/send?phone=6581299789">
                    <?php include_once 'assets/media/header-whatsapp.svg'; ?>
                  </a>
                </div>

                <div class="burgWrap">
                  <div class="burgBtn hoverEffect_dim">
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
        <div class="overflowWrap">
          <?php header_desktop_sub_nav(); ?>
        </div>
      </div>

      <div class="mobNavWrap">
        <div class="overflowWrap">
          <div class="g">
            <div class="r">
              <div class="xs-12">
                <nav class="mobMainNav show">
                  <?php echo header_mobile_root_nav(); ?>
                </nav>
                <?php header_mobile_sub_nav(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="module-topSearchBarWrap">
    <div class="g">
      <div class="r">
        <div class="lg-12">
          <div class="closeBtnWrap">
            <p class="closeBtn hoverEffect_dim">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8.707 8.707">
                <g id="Group_45373" data-name="Group 45373" transform="translate(9792.854 6303.854)">
                  <line id="Line_859" data-name="Line 859" x2="8" y2="8" transform="translate(-9792.5 -6303.5)" fill="none" stroke="" stroke-width="1" />
                  <line id="Line_860" data-name="Line 860" x1="8" y2="8" transform="translate(-9792.5 -6303.5)" fill="none" stroke="" stroke-width="1" />
                </g>
              </svg>
            </p>
          </div>
        </div>
        <div class="lg-11 md-10">
          <div class="formWrap">
            <form class="searchNav" action="<?php echo site_url(); ?>">
              <input class="searchInput" type="text" name="s" placeholder="Type here" />
              <label class="searchIcon hoverEffect_dim">
                <input type="submit" />
                <svg class="searchBtn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path id="Icon_material-arrow-forward" data-name="Icon material-arrow-forward" d="M16,6,14.238,7.763l6.975,6.987H6v2.5H21.212l-6.975,6.987L16,26,26,16Z" transform="translate(-6 -6)" />
                </svg>
              </label>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>