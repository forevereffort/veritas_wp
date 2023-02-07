<?php
  $doctor_bios = get_field('doctor_bios', 'option');
?>
<div class="our-doctor">
  <div class="g">
    <div class="r">
      <div class="lg-12 our-doctor__title">
        <div class="sectionTitleStyling">
          <h5>OUR DOCTORS</h5>
        </div>      
      </div>
    </div>
    <div class="r rowMargin">
      <?php
        foreach($doctor_bios['doctor'] as $doctor){
      ?>
          <div class="mdlg-6">
            <div class="module-2-col-img-txt__card">
              <div class="r">
                <div class="mdlg-6">
                  <div class="mediaWrapStyling">
                    <img src="<?php echo aq_resize($doctor['left_column_image']['url'], 50); ?>" data-hiResImg="<?php echo $doctor['left_column_image']['url']; ?>" />
                  </div>
                </div>
                <div class="mdlg-6">
                  <div class="module-2-col-img-txt__card-info">
                    <?php echo $doctor['right_column_texts']; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
      <?php
        }
      ?>
    </div>
  </div>
</div>