<?php
  $clinic_features = $args['clinic_features'];
?>
<div class="clinic-features">
  <div class="g">
    <div class="r">
      <div class="lg-12">
        <div class="sectionTitleStyling">
          <h5>Clinic features</h5>
        </div>
      </div>

      <div class="lg-12">
        <div class="clinic-features__row">
          <?php
            foreach($clinic_features['features'] as $feature){
          ?>
              <div class="clinic-features__col">
                <div class="clinic-features__icon">
                  <img src="<?php echo $feature['icon']['url']; ?>" />
                </div>
                <p><?php echo $feature['feature']; ?></p>
              </div>
          <?php
            }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>