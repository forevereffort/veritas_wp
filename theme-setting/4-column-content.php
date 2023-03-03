<?php $four_column_content = $args['four_column_content']; ?>

<div class="module-4ColListing mob-hide">

  <div class="g">

    <div class="r">

      <div class="lg-12">

        <div class="sectionTitleStyling">

          <h5><?php echo $four_column_content['headline']; ?></h5>

          <!-- <h2>Evidence-based options that produce real results</h2> -->

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

            <a href="<?php echo $column['url']; ?>" class="eachThumb hoverEffect_dim">

              <div class="mediaWrapStyling">

                <img src="<?php echo aq_resize($column['image']['url'], 50); ?>" data-hiResImg="<?php echo $column['image']['url']; ?>" />

              </div>

              <h4><?php echo $column['headline']; ?></h4>

              <p><?php echo $column['description']; ?></p>

            </a>

          </div>

      <?php

        }

      ?>

    </div>

  </div>

</div>