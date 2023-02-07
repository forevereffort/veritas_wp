<?php $two_column_content = $args['two_column_content']; ?>
<div class="modulesWrapStyling">
  <div class="modulesWrapStyling__sectionTitle">
    <div class="g">
      <div class="r">
        <div class="lg-12">
          <div class="sectionTitleStyling">
            <h5>Our ethos</h5>
          </div>
        </div>
      </div>
    </div>      
  </div>

  <?php
    foreach($two_column_content['row'] as $row){
  ?>
      <div class="module-2ColImgText">
        <div class="g">
          <div class="r">
            <div class="lg-12">
              <div class="sectionTitleStyling">
                <h2><?php echo $row['headline']; ?></h2>
              </div>
            </div>
          </div>
        </div>

        <div class="g">
          <div class="r rowMargin">
            <div class="md-6">
              <div class="imgWrap">
                <?php
                  if( $row['show_cta_button'] && $row['cta_position'] == 'overlay-on-image' ){
                ?>
                    <a href="<?php echo $row['cta']['url']; ?>" class="buttonWithArrowStyling buttonWithArrowStyling_red">
                      <p><?php echo $row['cta']['title']; ?></p>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 14.795">
                        <path id="Path_97" data-name="Path 97" d="M1.1-8.621v1.8h17.12v.872A4.906,4.906,0,0,0,15.4-4.446l-2.88,2.88L13.759-.325l7.345-7.4-7.345-7.4-1.242,1.242L15.5-10.919a4.814,4.814,0,0,0,2.721,1.427v.872Z" transform="translate(-1.104 15.12)" fill="#dad9d7" />
                      </svg>
                    </a>
                <?php
                  }
                ?>

                <div class="mediaWrapStyling">
                  <img src="<?php echo aq_resize($row['left_column_image']['url'], 50); ?>" data-hiResImg="<?php echo $row['left_column_image']['url']; ?>" />
                </div>
              </div>

              <?php
                if( $row['show_cta_button'] && $row['cta_position'] == 'below-image' ){
              ?>
                  <a href="<?php echo $row['cta']['url']; ?>" class="buttonWithArrowStyling buttonWithArrowStyling_red">
                    <p><?php echo $row['cta']['title']; ?></p>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 14.795">
                      <path id="Path_97" data-name="Path 97" d="M1.1-8.621v1.8h17.12v.872A4.906,4.906,0,0,0,15.4-4.446l-2.88,2.88L13.759-.325l7.345-7.4-7.345-7.4-1.242,1.242L15.5-10.919a4.814,4.814,0,0,0,2.721,1.427v.872Z" transform="translate(-1.104 15.12)" fill="#dad9d7" />
                    </svg>
                  </a>
              <?php
                }
              ?>

              <div class="socialWrap">
                <?php
                  if( $row['show_social_media_links'] ){
                ?>
                    <a class="hoverEffect_dim" href="<?php echo $row['facebook_url']; ?>" target="_blank">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <g id="Group_45915" data-name="Group 45915" transform="translate(6624.5 -5581.84)">
                          <path id="Icon_awesome-facebook-square" data-name="Icon awesome-facebook-square" d="M21.428,2.25H2.571A2.571,2.571,0,0,0,0,4.821V23.678A2.571,2.571,0,0,0,2.571,26.25H9.924V18.09H6.549V14.25H9.924V11.323c0-3.329,1.982-5.168,5.018-5.168a20.446,20.446,0,0,1,2.974.259V9.681H16.241a1.92,1.92,0,0,0-2.165,2.075V14.25H17.76l-.589,3.84h-3.1V26.25h7.353A2.571,2.571,0,0,0,24,23.678V4.821A2.571,2.571,0,0,0,21.428,2.25Z" transform="translate(-6624.5 5579.59)" fill="#635651" />
                        </g>
                      </svg>
                    </a>
                    <a class="hoverEffect_dim" href="<?php echo $row['instagram_url']; ?>" target="_blank">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 23.994">
                        <g id="Group_45914" data-name="Group 45914" transform="translate(6579.501 -5581.839)">
                          <path id="Icon_awesome-instagram" data-name="Icon awesome-instagram" d="M12,8.083a6.152,6.152,0,1,0,6.152,6.152A6.142,6.142,0,0,0,12,8.083Zm0,10.151a4,4,0,1,1,4-4A4.007,4.007,0,0,1,12,18.234Zm7.838-10.4A1.435,1.435,0,1,1,18.4,6.4,1.432,1.432,0,0,1,19.836,7.831ZM23.91,9.288A7.1,7.1,0,0,0,21.972,4.26a7.148,7.148,0,0,0-5.027-1.938c-1.981-.112-7.919-.112-9.9,0A7.137,7.137,0,0,0,2.017,4.255,7.124,7.124,0,0,0,.079,9.282c-.112,1.981-.112,7.919,0,9.9a7.1,7.1,0,0,0,1.938,5.027,7.157,7.157,0,0,0,5.027,1.938c1.981.112,7.919.112,9.9,0a7.1,7.1,0,0,0,5.027-1.938,7.148,7.148,0,0,0,1.938-5.027c.112-1.981.112-7.913,0-9.894Zm-2.559,12.02a4.049,4.049,0,0,1-2.281,2.281c-1.579.626-5.327.482-7.073.482s-5.5.139-7.073-.482a4.049,4.049,0,0,1-2.281-2.281c-.626-1.579-.482-5.327-.482-7.073s-.139-5.5.482-7.073A4.049,4.049,0,0,1,4.924,4.881C6.5,4.255,10.252,4.4,12,4.4s5.5-.139,7.073.482a4.049,4.049,0,0,1,2.281,2.281c.626,1.579.482,5.327.482,7.073S21.977,19.733,21.351,21.308Z" transform="translate(-6579.496 5579.602)" fill="#635651" />
                        </g>
                      </svg>
                    </a>
                    <a class="hoverEffect_dim" href="<?php echo $row['blogger_url']; ?>" target="_blank">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.134 23.134">
                        <path id="Icon_metro-blogger" data-name="Icon metro-blogger" d="M24.209,10.6h-1.3a1.6,1.6,0,0,1-1.545-1.446,7.26,7.26,0,0,0-7.482-7.23H10.094A7.5,7.5,0,0,0,2.571,9.4v8.2a7.5,7.5,0,0,0,7.523,7.468h8.1a7.486,7.486,0,0,0,7.514-7.468V12.3a1.678,1.678,0,0,0-1.5-1.7ZM9.8,7.712h4.338a1.446,1.446,0,0,1,0,2.892H9.8a1.446,1.446,0,1,1,0-2.892Zm8.675,11.567H9.8a1.446,1.446,0,1,1,0-2.892h8.675a1.446,1.446,0,0,1,0,2.892Z" transform="translate(-2.571 -1.928)" fill="#635651" />
                      </svg>
                    </a>
                <?php
                  }
                ?>
              </div>
            </div>
            <div class="md-6">
              <div class="wysiwygWrapStyling">
                <?php echo $row['right_column_texts']; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
  <?php
    }
  ?>
</div>