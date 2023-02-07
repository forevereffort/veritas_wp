<?php
  $faqs = $args['faqs'];

  if( isset($faqs['show_faq_module']) && $faqs['show_faq_module'] ){
?>
    <div class="module-faq" id="faq" data-anchorId="faq" data-anchorTitle="FAQ">
      <div class="g">
        <div class="r">
          <div class="mdlg-12">
            <div class="faqWrap">
              <div class="mdlg-7 mdlg-offset-3">
                <h3>FAQ</h3>
                <div class="faq-list">
                  <?php
                    foreach($faqs['faq_item'] as $faq_item){
                  ?>
                      <div class="faq-list__item">
                        <div class="faq-list__title">
                          <p><?php echo $faq_item['question']; ?></p>
                        </div>
                        <div class="faq-list__txt" style="display: none;">
                          <p><?php echo $faq_item['answer']; ?></p>
                        </div>
                      </div>
                  <?php
                    }
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php
  }