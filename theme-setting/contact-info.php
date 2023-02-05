<?php $contact_info = get_field('contact_info', 'option'); ?>
<div class="module-contactForm contactForm_withGreyBg">
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
                    <p class="s"><a class="hoverEffect_dim" target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $contact_info['whatsapp_number']; ?>"><?php echo $contact_info['whatsapp_number']; ?> <sup>Whatsapp</sup></a></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="md-4 md-offset-1 sm-12">
              <div class="formWrap">
                <div role="form" class="wpcf7" id="wpcf7-f133-o1" lang="en-US" dir="ltr">
                  <div class="screen-reader-response">
                    <p role="status" aria-live="polite" aria-atomic="true"></p>
                    <ul></ul>
                  </div>
                  <form action="/internal/wordpress/#wpcf7-f133-o1" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
                    <div style="display: none;">
                      <input type="hidden" name="_wpcf7" value="133">
                      <input type="hidden" name="_wpcf7_version" value="5.6.4">
                      <input type="hidden" name="_wpcf7_locale" value="en_US">
                      <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f133-o1">
                      <input type="hidden" name="_wpcf7_container_post" value="0">
                      <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                    </div>
                    <div class="enquiryForm">
                      <h3 class="reckless_neue_light">Contact us</h3>
                      <p class="s">Let us know if you have any questions on any of our treatments and we will get back to you as soon as we can!</p>
                      <div class="form2Col">
                        <div>
                          <p class="s">First name*</p>
                          <span class="wpcf7-form-control-wrap" data-name="fname"><input type="text" name="fname" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span>
                        </div>
                        <div>
                          <p>Last name*</p>
                          <span class="wpcf7-form-control-wrap" data-name="lname"><input type="text" name="lname" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span>
                        </div>
                      </div>
                      <p class="s">Email*</p>
                      <span class="wpcf7-form-control-wrap" data-name="email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"></span>
                      <p class="s">Phone*</p>
                      <span class="wpcf7-form-control-wrap" data-name="tel"><input type="text" name="tel" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span>
                      <p class="s">Message*</p>
                      <span class="wpcf7-form-control-wrap" data-name="message"><textarea name="message" cols="40" rows="1" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" style="box-sizing: border-box; height: 27px;"></textarea></span>
                      <p class="s">By submitting this form, I acknowledge that I have read and accepted the <a href="terms-conditions/">Terms &amp; Conditions</a>.</p>
                      <div class="submitFormBtnWrap"><button type="submit" class="wpcf7-submit buttonWithArrowStyling buttonWithArrowStyling_red">
                          <p>Submit</p>
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 14.795">
                            <path id="Path_97" data-name="Path 97" d="M1.1-8.621v1.8h17.12v.872A4.906,4.906,0,0,0,15.4-4.446l-2.88,2.88L13.759-.325l7.345-7.4-7.345-7.4-1.242,1.242L15.5-10.919a4.814,4.814,0,0,0,2.721,1.427v.872Z" transform="translate(-1.104 15.12)" fill="#fff"></path>
                          </svg>
                        </button>
                      </div>
                    </div>
                    <div class="successMsg">
                      <h3 class="reckless_neue_light">Form successfully sent</h3>
                      <p class="s">Our representative will promptly be in contact as soon as possible.</p>
                    </div>
                    <div class="wpcf7-response-output" aria-hidden="true"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>