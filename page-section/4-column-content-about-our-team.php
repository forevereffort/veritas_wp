<?php $four_column_content = $args['four_column_content']; ?>
<div class="module-4ColListing">
  <div class="g">
    <div class="r">
      <div class="lg-12">
        <div class="sectionTitleStyling">
          <h5>Our team</h5>
          <h2><?php echo $four_column_content['headline'];?></h2>
        </div>
      </div>
    </div>
  </div>

  <div class="g">
    <div class="r rowMargin">
      <?php
        foreach($four_column_content['column'] as $column){
      ?>
          <div class="mdlg-3 md-6">
            <div class="eachThumb">
              <div class="mediaWrapStyling">
                <img src="<?php echo aq_resize($column['image']['url'], 50); ?>" data-hiResImg="<?php echo $column['image']['url']; ?>" />
              </div>
              <?php
                if( !empty($column['image_caption']) ){
              ?>
                  <small><?php echo $column['image_caption']; ?></small>
              <?php
                }
              ?>
              <h4><?php echo $column['headline']; ?></h4>
              <p><?php echo $column['description']; ?></p>
            </div>
          </div>
      <?php
        }
      ?>
    </div>
  </div>
</div>