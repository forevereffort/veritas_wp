  <footer>
    <div class="g">
      <div class="r rowMarginDouble">
        <div class="mdlg-4 md-12">
          <a class="hoverEffect_dim" href="<?php echo site_url(); ?>">
            <?php include_once 'assets/media/footer-logo.svg'; ?>
          </a>
        </div>
        <div class="mdlg-3 md-12">
          <nav class="mainNav">
            <?php echo footer_nav(); ?>
          </nav>
        </div>
        <?php $contact_info = get_field('contact_info', 'option'); ?>
        <div class="mdlg-4 md-10">
          <div class="r rowMarginDouble">
            <div class="mdlg-6 md-4">
              <div class="eachInfoBox">
                <p class="s">Address</p>
                <p class="s"><?php echo strReplaceNewLineToBr($contact_info['address']); ?></p>
              </div>
            </div>
            <div class="mdlg-6 md-4">
              <div class="eachInfoBox">
                <p class="s">Hours</p>
                <p class="s"><?php echo strReplaceNewLineToBr($contact_info['operating_hours']); ?></p>
              </div>
            </div>
            <div class="mdlg-6 md-4">
              <div class="eachInfoBox">
                <p class="s">Connect</p>
                <p class="s"><a class="hoverEffect_dim" target="_blank" href="mailto:<?php echo $contact_info['email']; ?>"><?php echo $contact_info['email']; ?></a></p>
                <p class="s"><a class="hoverEffect_dim" target="_blank" href="tel:<?php echo $contact_info['telephone_number']; ?>"><?php echo $contact_info['telephone_number']; ?> <sup>Tel</sup></a></p>
                <p class="s"><a class="hoverEffect_dim" target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $contact_info['whatsapp_number']; ?>"><?php echo $contact_info['whatsapp_number']; ?> <sup>Whatsapp</sup></a></p>
              </div>
            </div>
            <div class="mdlg-6 md-4">
              <div class="eachInfoBox">
                <p class="s">Follow</p>
                <div class="socialFollowWrap">
                  <a class="hoverEffect_dim" href="<?php echo $contact_info['facebook_url']; ?>" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                      <g id="Group_45915" data-name="Group 45915" transform="translate(6624.5 -5581.84)">
                        <path id="Icon_awesome-facebook-square" data-name="Icon awesome-facebook-square" d="M21.428,2.25H2.571A2.571,2.571,0,0,0,0,4.821V23.678A2.571,2.571,0,0,0,2.571,26.25H9.924V18.09H6.549V14.25H9.924V11.323c0-3.329,1.982-5.168,5.018-5.168a20.446,20.446,0,0,1,2.974.259V9.681H16.241a1.92,1.92,0,0,0-2.165,2.075V14.25H17.76l-.589,3.84h-3.1V26.25h7.353A2.571,2.571,0,0,0,24,23.678V4.821A2.571,2.571,0,0,0,21.428,2.25Z" transform="translate(-6624.5 5579.59)" fill="#635651" />
                      </g>
                    </svg>
                  </a>
                  <a class="hoverEffect_dim" href="<?php echo $contact_info['instagram_url']; ?>" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 23.994">
                      <g id="Group_45914" data-name="Group 45914" transform="translate(6579.501 -5581.839)">
                        <path id="Icon_awesome-instagram" data-name="Icon awesome-instagram" d="M12,8.083a6.152,6.152,0,1,0,6.152,6.152A6.142,6.142,0,0,0,12,8.083Zm0,10.151a4,4,0,1,1,4-4A4.007,4.007,0,0,1,12,18.234Zm7.838-10.4A1.435,1.435,0,1,1,18.4,6.4,1.432,1.432,0,0,1,19.836,7.831ZM23.91,9.288A7.1,7.1,0,0,0,21.972,4.26a7.148,7.148,0,0,0-5.027-1.938c-1.981-.112-7.919-.112-9.9,0A7.137,7.137,0,0,0,2.017,4.255,7.124,7.124,0,0,0,.079,9.282c-.112,1.981-.112,7.919,0,9.9a7.1,7.1,0,0,0,1.938,5.027,7.157,7.157,0,0,0,5.027,1.938c1.981.112,7.919.112,9.9,0a7.1,7.1,0,0,0,5.027-1.938,7.148,7.148,0,0,0,1.938-5.027c.112-1.981.112-7.913,0-9.894Zm-2.559,12.02a4.049,4.049,0,0,1-2.281,2.281c-1.579.626-5.327.482-7.073.482s-5.5.139-7.073-.482a4.049,4.049,0,0,1-2.281-2.281c-.626-1.579-.482-5.327-.482-7.073s-.139-5.5.482-7.073A4.049,4.049,0,0,1,4.924,4.881C6.5,4.255,10.252,4.4,12,4.4s5.5-.139,7.073.482a4.049,4.049,0,0,1,2.281,2.281c.626,1.579.482,5.327.482,7.073S21.977,19.733,21.351,21.308Z" transform="translate(-6579.496 5579.602)" fill="#635651" />
                      </g>
                    </svg>
                  </a>
                  <a class="hoverEffect_dim" href="<?php echo $contact_info['tiktok_url']; ?>" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20.85 24">
                      <g id="Group_45913" data-name="Group 45913" transform="translate(6534.501 -5581.84)">
                        <path id="Icon_simple-tiktok" data-name="Icon simple-tiktok" d="M13.319.02c1.31-.02,2.61-.01,3.91-.02a6.229,6.229,0,0,0,1.75,4.17,7.052,7.052,0,0,0,4.24,1.79V9.99a10.7,10.7,0,0,1-4.2-.97,12.355,12.355,0,0,1-1.62-.93c-.01,2.92.01,5.84-.02,8.75a7.638,7.638,0,0,1-1.35,3.94,7.45,7.45,0,0,1-5.91,3.21,7.291,7.291,0,0,1-4.08-1.03,7.541,7.541,0,0,1-3.65-5.71c-.02-.5-.03-1-.01-1.49a7.528,7.528,0,0,1,8.73-6.68c.02,1.48-.04,2.96-.04,4.44a3.431,3.431,0,0,0-4.38,2.12,3.967,3.967,0,0,0-.14,1.61,3.4,3.4,0,0,0,3.5,2.87,3.36,3.36,0,0,0,2.77-1.61,2.307,2.307,0,0,0,.41-1.06c.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07Z" transform="translate(-6536.87 5581.84)" fill="#635651" />
                      </g>
                    </svg>
                  </a>
                  <a class="hoverEffect_dim" href="<?php echo $contact_info['youtube_url']; ?>" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25.5 17.929">
                      <g id="Group_45912" data-name="Group 45912" transform="translate(6492.651 -5584.84)">
                        <path id="Icon_awesome-youtube" data-name="Icon awesome-youtube" d="M26.017,7.305a3.2,3.2,0,0,0-2.254-2.269C21.774,4.5,13.8,4.5,13.8,4.5s-7.974,0-9.963.536A3.2,3.2,0,0,0,1.583,7.305a33.612,33.612,0,0,0-.533,6.177,33.612,33.612,0,0,0,.533,6.177,3.156,3.156,0,0,0,2.254,2.233c1.989.536,9.963.536,9.963.536s7.974,0,9.963-.536a3.156,3.156,0,0,0,2.254-2.233,33.612,33.612,0,0,0,.533-6.177,33.611,33.611,0,0,0-.533-6.177ZM11.192,17.274V9.691l6.665,3.792-6.665,3.791Z" transform="translate(-6493.701 5580.34)" fill="#635651" />
                      </g>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="r">
        <div class="mdlg-4 md-5">
          <small class="copyright">© 2021 Veritas Medical Aesthetics</small>
        </div>
        <div class="mdlg-8 md-7">
          <div class="termsPrivacyBox">
            <?php echo pre_footer_nav(); ?>
          </div>
        </div>
      </div>
    </div>
  </footer>
    <?php wp_footer(); ?>
    <script src="<?php bloginfo('template_directory')?>/assets/js/vendors.min.js"></script>
    <script src="<?php bloginfo('template_directory')?>/assets/js/main.min.js"></script>
    <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCinXXM7F0k1Oz7I4kVKdcbPRpcVCzvHZ0&callback=initMap"></script>
</body>
</html>