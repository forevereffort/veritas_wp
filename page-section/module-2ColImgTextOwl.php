<?php
  $meet_our_doctors = $args['meet_our_doctors'];
?>
<div class="module-2ColImgTextOwl">
  <div class="g">
    <div class="r">
      <div class="lg-12">
        <div class="sectionTitleStyling">
          <h5>Meet our doctors</h5>
        </div>
      </div>
    </div>
  </div>
  <div class="owl2ColImgTextOwl owl-carousel">
    <?php
      foreach($meet_our_doctors['doctors'] as $doctor){
    ?>
        <div class="module-2ColImgText">
          <div class="g">
            <div class="r rowMargin flexVerticalCenter">
              <div class="md-6">
                <div class="wysiwygWrapStyling">
                  <blockquote><?php echo $doctor['testimonial']; ?></blockquote>
                  <p class="ppNeueMontrealSemiBold"><?php echo $doctor['doctor_name']; ?></p>
                  <ul>
                    <?php
                      foreach($doctor['qualifications'] as $qualification){
                    ?>
                        <li><?php echo $qualification['qualification']; ?></li>
                    <?php
                      }
                    ?>
                  </ul>
                </div>
              </div>

              <div class="md-6">
                <div class="mediaWrapStyling">
                  <img src="<?php echo aq_resize($doctor['image']['url'], 50); ?>" data-hiResImg="<?php echo $doctor['image']['url']; ?>" />
                </div>
              </div>
            </div>
          </div>
        </div>
    <?php
      }
    ?>
  </div>
  <div class="owlCustomTimedDots">
    <div class="g">
      <div class="r">
        <div class="lg-12">
          <div class="dotsWrap">
            <!-- <div class="dot"><span></span></div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>