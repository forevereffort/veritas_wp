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
          <div class="g eachSubNav" data-subNavFor="Treatments">
            <div class="r flexCenter">
              <div class="mdlg-2">
                <nav>
                  <h5 class="medium"><a class="hoverEffect_dim" href="treatments.html#injectables">Injectables</a></h5>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">Botox & Neuro-Toxin</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">Dermalift</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">Fillers</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">Ellansé</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">Rejuran</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">Profhilo</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">Nucleofill</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">Exosome</a></small>
                </nav>
              </div>
              <div class="mdlg-2">
                <nav>
                  <h5 class="medium"><a class="hoverEffect_dim" href="treatments.html#lasers">Lasers</a></h5>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">BLEND Protocol</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">PERFECT Protocol</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">RESTORE Protocol</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">BLADELESS Protocol</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">BrightEye Combo Laser</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">SmoothEye Combo Laser</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">Fotona PIANO & 4D Facelift</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">FracPico Scar & Tattoo Removal</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">ProYellow Laser</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">Fotona Frac3 Laser</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">Fotona V3 Laser</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">Fotona Intimalse & Incontilase</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">NightLase Snoring Laser</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">LipLase Lip Plumping Laser</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">Hair ReStart Laser</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">Ecoxel CO2 Laser Resurfacing</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">Breast Lifting Combo Laser</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">LLLT Therapy </a></small>
                </nav>
              </div>

              <div class="mdlg-2">
                <nav>
                  <h5 class="medium"><a class="hoverEffect_dim" href="treatments.html#machines">Machines</a></h5>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">AGNES Acne Removal</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">Ultraformer 3 HIFU</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">EndyMED PRO 3DEEP</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">CoolSculpting</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">TruSculpt Flex</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">TruSculpt ID</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">Redustim</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">LDM Ultrasound Facial</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">HydroPeel Facial</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">Shockwave Therapy </a></small>
                </nav>
              </div>

              <div class="mdlg-2">
                <nav>
                  <h5 class="medium"><a class="hoverEffect_dim" href="treatments.html#others">Others</a></h5>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">Face Threadlift</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">Nose Threadlift</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">Punch Excision</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">FUE Hair Transplant</a></small>
                </nav>
              </div>

              <div class="mdlg-2">
                <nav>
                  <h5 class="medium"><a class="hoverEffect_dim" href="treatments.html#products">Products</a></h5>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">Universkin</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">SOS Porcelain</a></small>
                </nav>
              </div>
            </div>
          </div>

          <div class="g eachSubNav" data-subNavFor="Concerns">
            <div class="r flexCenter">
              <div class="mdlg-2">
                <nav>
                  <h5 class="medium"><a class="hoverEffect_dim" href="concerns.html#face">Face</a></h5>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Saggy Skin</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Flat/Crooked Nose</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Small/Dimpled Chin</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Double Chin</a></small>
                </nav>
              </div>
              <div class="mdlg-2">
                <nav>
                  <h5 class="medium"><a class="hoverEffect_dim" href="concerns.html#eyes">Eyes</a></h5>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Dark Eye Circles</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Eye Wrinkles</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Sunken Eyes, Saggy Eyelids And BrowsLoss</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Scalp Conditions</a></small>
                </nav>
              </div>

              <div class="mdlg-2">
                <nav>
                  <h5 class="medium"><a class="hoverEffect_dim" href="concerns.html#skin">Skin</a></h5>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Acne Scars & Scars</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Acne</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Enlarged Pores & Oily Skin</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Pigmentation</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Wrinkles</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Dryness And Sensitivity</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Rosacea & Redness</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Moles</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Skin Tags & Milia Seeds</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Syringoma</a></small>
                </nav>
              </div>

              <div class="mdlg-2">
                <nav>
                  <h5 class="medium"><a class="hoverEffect_dim" href="concerns.html#body">Body</a></h5>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Stubborn Fat Removal</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Cellulite Smoothening</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Laser Hair Removal</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Stretch Marks Removal</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Hand Rejuvenation</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Sagging Breasts</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Dark Underarms</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Nipples & Privates Whitening</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Vaginal Laxity & Urinary </a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Incontinence</a></small>
                </nav>
              </div>

              <div class="mdlg-2">
                <nav>
                  <h5 class="medium"><a class="hoverEffect_dim" href="concerns.html#hair">Hair</a></h5>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Male-Pattern Baldness</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Female-Pattern Baldness</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Post-Natal & Temporary Hair</a></small>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="mobNavWrap">
        <div class="overflowWrap">
          <div class="g">
            <div class="r">
              <div class="xs-12">
                <nav class="mobMainNav show">
                  <p class="eachLink">
                    <a class="hoverEffect_dim" href="about.html">About</a>
                  </p>
                  <p class="eachLink">
                    <a class="hoverEffect_dim" data-subNav="Treatments">Treatments</a>
                  </p>
                  <p class="eachLink">
                    <a class="atPage hoverEffect_dim" data-subNav="Concerns">Concerns</a>
                  </p>
                  <p class="eachLink">
                    <a class="hoverEffect_dim" href="insights.html">Insights</a>
                  </p>
                  <p class="eachLink">
                    <a class="hoverEffect_dim" href="contact.html">Contact</a>
                  </p>
                </nav>

                <nav class="eachMobSubNav" data-subNavFor="Concerns">
                  <h5 class="medium"><a class="hoverEffect_dim" href="concerns.html#face">Face</a></h5>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Saggy Skin</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Flat/Crooked Nose</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Small/Dimpled Chin</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Double Chin</a></small>

                  <h5 class="medium"><a class="hoverEffect_dim" href="concerns.html#eyes">Eyes</a></h5>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Dark Eye Circles</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Eye Wrinkles</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Sunken Eyes, Saggy Eyelids And BrowsLoss</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Scalp Conditions</a></small>

                  <h5 class="medium"><a class="hoverEffect_dim" href="concerns.html#skin">Skin</a></h5>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Acne Scars & Scars</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Acne</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Enlarged Pores & Oily Skin</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Pigmentation</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Wrinkles</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Dryness And Sensitivity</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Rosacea & Redness</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Moles</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Skin Tags & Milia Seeds</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Syringoma</a></small>

                  <h5 class="medium"><a class="hoverEffect_dim" href="concerns.html#body">Body</a></h5>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Stubborn Fat Removal</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Cellulite Smoothening</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Laser Hair Removal</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Stretch Marks Removal</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Hand Rejuvenation</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Sagging Breasts</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Dark Underarms</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Nipples & Privates Whitening</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Vaginal Laxity & Urinary </a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Incontinence</a></small>

                  <h5 class="medium"><a class="hoverEffect_dim" href="concerns.html#hair">Hair</a></h5>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Male-Pattern Baldness</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Female-Pattern Baldness</a></small>
                  <small><a class="hoverEffect_dim" href="single-concern.html">Post-Natal & Temporary Hair</a></small>
                </nav>

                <nav class="eachMobSubNav" data-subNavFor="Treatments">
                  <h5 class="medium"><a class="hoverEffect_dim" href="treatments.html#injectables">Injectables</a></h5>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">Botox & Neuro-Toxin</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">Dermalift</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">Fillers</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">Ellansé</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">Rejuran</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">Profhilo</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">Nucleofill</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">Exosome</a></small>

                  <h5 class="medium"><a class="hoverEffect_dim" href="treatments.html#lasers">Lasers</a></h5>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">BLEND Protocol</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">PERFECT Protocol</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">RESTORE Protocol</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">BLADELESS Protocol</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">BrightEye Combo Laser</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">SmoothEye Combo Laser</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">Fotona PIANO & 4D Facelift</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">FracPico Scar & Tattoo Removal</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">ProYellow Laser</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">Fotona Frac3 Laser</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">Fotona V3 Laser</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">Fotona Intimalse & Incontilase</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">NightLase Snoring Laser</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">LipLase Lip Plumping Laser</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">Hair ReStart Laser</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">Ecoxel CO2 Laser Resurfacing</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">Breast Lifting Combo Laser</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">LLLT Therapy </a></small>

                  <h5 class="medium"><a class="hoverEffect_dim" href="treatments.html#machines">Machines</a></h5>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">AGNES Acne Removal</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">Ultraformer 3 HIFU</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">EndyMED PRO 3DEEP</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">CoolSculpting</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">TruSculpt Flex</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">TruSculpt ID</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">Redustim</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">LDM Ultrasound Facial</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">HydroPeel Facial</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">Shockwave Therapy </a></small>

                  <h5 class="medium"><a class="hoverEffect_dim" href="treatments.html#others">Others</a></h5>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">Face Threadlift</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">Nose Threadlift</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">Punch Excision</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">FUE Hair Transplant</a></small>

                  <h5 class="medium"><a class="hoverEffect_dim" href="treatments.html#products">Products</a></h5>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">Universkin</a></small>
                  <small><a class="hoverEffect_dim" href="single-treatment.html">SOS Porcelain</a></small>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>