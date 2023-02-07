<?php
  $contact_info = get_field('contact_info', 'option');
  $white_background = isset($args['white_background']) ? $args['white_background'] : false;
?>
<div class="module-contactForm <?php echo $white_background ? '' : 'contactForm_withGreyBg'; ?>">
  <div class="g">
    <div class="r rowMargin">
      <div class="lg-12">
        <div class="contactFormWrap">
          <div class="r rowMargin">
            <div class="md-5 md-offset-1 sm-12">
              <div id="gMap" data-lat="<?php echo $contact_info['google_maps_latitude']; ?>" data-long="<?php echo $contact_info['google_maps_longtitude']; ?>" style="position: relative; overflow: hidden;">
              </div>

              <div class="r">
                <div class="mdlg-4 md-6">
                  <div class="eachInfoBox">
                    <p class="s">Address</p>
                    <p class="s"><?php echo strReplaceNewLineToBr($contact_info['address']); ?></p>
                  </div>
                </div>
                <div class="mdlg-4 md-6">
                  <div class="eachInfoBox">
                    <p class="s">Hours</p>
                    <p class="s"><?php echo strReplaceNewLineToBr($contact_info['operating_hours']); ?></p>
                  </div>
                </div>
                <div class="mdlg-4 md-6">
                  <div class="eachInfoBox">
                    <p class="s">Connect</p>
                    <p class="s"><a class="hoverEffect_dim" target="_blank" href="mailto:<?php echo $contact_info['email']; ?>"><?php echo $contact_info['email']; ?></a></p>
                    <p class="s"><a class="hoverEffect_dim" target="_blank" href="tel:<?php echo $contact_info['telephone_number']; ?>"><?php echo $contact_info['telephone_number']; ?> <sup>Tel</sup></a></p>
                    <p class="s"><a class="hoverEffect_dim" target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo trimNumber($contact_info['whatsapp_number']); ?>"><?php echo $contact_info['whatsapp_number']; ?> <sup>Whatsapp</sup></a></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="md-4 md-offset-1 sm-12">
              <div class="formWrap">
                <?php echo do_shortcode($contact_info['contact_form_7_shortcode']); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>