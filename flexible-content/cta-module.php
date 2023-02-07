<?php
    $data = $args['data'];
?>
<div class="module-section module-cta">
    <?php
        if( !empty($data['red_button']) ){
    ?>
            <a href="<?php echo $data['red_button']['url']; ?>" class="buttonWithArrowStyling buttonWithArrowStyling_red">
                <p><?php echo $data['red_button']['title']; ?></p>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 14.795">
                <path id="Path_97" data-name="Path 97" d="M1.1-8.621v1.8h17.12v.872A4.906,4.906,0,0,0,15.4-4.446l-2.88,2.88L13.759-.325l7.345-7.4-7.345-7.4-1.242,1.242L15.5-10.919a4.814,4.814,0,0,0,2.721,1.427v.872Z" transform="translate(-1.104 15.12)" fill="#dad9d7" />
                </svg>
            </a>
    <?php
        }
    ?>

    <?php
        if( !empty($data['white_button']) ){
    ?>
            <a href="<?php echo $data['white_button']['url']; ?>" class="buttonWithArrowStyling buttonWithArrowStyling_outline">
                <p><?php echo $data['white_button']['title']; ?></p>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 14.795">
                <path id="Path_97" data-name="Path 97" d="M1.1-8.621v1.8h17.12v.872A4.906,4.906,0,0,0,15.4-4.446l-2.88,2.88L13.759-.325l7.345-7.4-7.345-7.4-1.242,1.242L15.5-10.919a4.814,4.814,0,0,0,2.721,1.427v.872Z" transform="translate(-1.104 15.12)" fill="#dad9d7" />
                </svg>
            </a>
    <?php
        }
    ?>
</div>