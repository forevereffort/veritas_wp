<?php
/*remove autoparagraphs in cf7*/
add_filter('wpcf7_autop_or_not', '__return_false');

/*removing default submit tag in cf7*/
remove_action('wpcf7_init', 'wpcf7_add_form_tag_submit');

/*adding action with function which handles our button markup in cf7*/
add_action('wpcf7_init', 'custom_cf7_button');

/*adding out submit button tag in cf7*/
if (!function_exists('custom_cf7_button')) {
  function custom_cf7_button() {
    wpcf7_add_form_tag('submit', 'custom_cf7_button_handler');
  }
}

/*out button markup inside handler in cf7*/
if (!function_exists('custom_cf7_button_handler')) {
    function custom_cf7_button_handler($tag) {
        $tag = new WPCF7_FormTag($tag);
        $class = wpcf7_form_controls_class($tag->type);
        $atts = array();
        $atts['class'] = $tag->get_class_option($class);
        $atts['class'] .= ' cf7-custom-btn';
        $atts['id'] = $tag->get_id_option();
        $atts['tabindex'] = $tag->get_option('tabindex', 'int', true);
        $value = isset($tag->values[0]) ? $tag->values[0] : '';
        if (empty($value)) {
          $value = esc_html__('Contact Us', 'veritas');
        }
        $atts['type'] = 'submit';
        $atts = wpcf7_format_atts($atts);
        $html = sprintf('<div class="submitFormBtnWrap"><button type="submit" class="wpcf7-submit buttonWithArrowStyling buttonWithArrowStyling_red">
									<p>Submit</p>
									  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 14.795">
										<path id="Path_97" data-name="Path 97" d="M1.1-8.621v1.8h17.12v.872A4.906,4.906,0,0,0,15.4-4.446l-2.88,2.88L13.759-.325l7.345-7.4-7.345-7.4-1.242,1.242L15.5-10.919a4.814,4.814,0,0,0,2.721,1.427v.872Z" transform="translate(-1.104 15.12)" fill="#fff" />
									  </svg>
                                    </button>
								</div>', $atts, $value);
        return $html;
    }
}