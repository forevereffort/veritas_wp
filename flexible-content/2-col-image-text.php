<?php
  $data = $args['data'];
?>
<div class="module-section module-2-col-img-txt">
    <?php
        if( !empty($data['headline']) ){
    ?>
            <p class="s"><?php echo $data['headline']; ?></p>
    <?php
        }
    ?>
    <div class="module-2-col-img-txt__wrapper">
        <?php
            foreach($data['card'] as $card){
        ?>
                <div class="module-2-col-img-txt__card">
                    <div class="r">
                        <div class="mdlg-6">
                            <a href="#" class="eachThumb hoverEffect_dim">
                                <div class="mediaWrapStyling">
                                    <img src="<?php echo aq_resize($card['left_column_image']['url'], 50); ?>" data-hiResImg="<?php echo $card['left_column_image']['url']; ?>" />
                                </div>
                            </a>
                        </div>
                        <div class="mdlg-6">
                            <div class="module-2-col-img-txt__card-info">
                                <?php echo $card['right_column_texts']; ?>
                                <?php
                                    if( !empty($card['cta']) ){
                                ?>
                                        <div class="module-2-col-img-txt__card-link">
                                            <p class="s reckless_neue_light"><a href="<?php echo $card['cta']['url']; ?>" class="hoverEffect_dim"><?php echo $card['cta']['title']; ?></a></p>
                                        </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
            }
        ?>
    </div>
</div>