<div class="module-singleArticleBodyWithSideNav">
  <div class="g">
    <div class="r">
      <div class="mdlg-3">
        <div class="sticky">
          <div class="sideNavWrap"></div>
        </div>
      </div>
      <div class="mdlg-7">
        <?php
          $flexible_content = $args['flexible_content'];

          foreach($flexible_content as $fc){

            if($fc['acf_fc_layout'] == 'anchor__title'){
              get_template_part('flexible-content/anchor', 'title', array('data' => $fc));
            } else if($fc['acf_fc_layout'] == '2_col_image_text'){
              get_template_part('flexible-content/2-col', 'image-text', array('data' => $fc));
            } else if($fc['acf_fc_layout'] == 'pull_out_texts'){
              get_template_part('flexible-content/pull', 'out-texts', array('data' => $fc));
            } else if($fc['acf_fc_layout'] == 'horizontal_line'){
              get_template_part('flexible-content/divide', 'line');
            } else if($fc['acf_fc_layout'] == 'wysiwyg_content'){
              get_template_part('flexible-content/wysiwyg', 'content', array('data' => $fc));
            }
          }
        ?>
      </div>
    </div>
  </div>
</div>