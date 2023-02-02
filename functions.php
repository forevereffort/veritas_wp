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
/*move yoast seo to bottom of page*/
function move_yoast_to_bottom() {
    return 'low';
}
add_filter( 'wpseo_metabox_prio', 'move_yoast_to_bottom');

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
          $value = esc_html__('Contact Us', 'twentysixteen');
        }
        $atts['type'] = 'submit';
        $atts = wpcf7_format_atts($atts);
        $html = sprintf('<div class="submitFormBtnWrap"><button type="submit" data-forForm="generalEnquiryForm">
                                  <p class="helvetica_neue_lt_std">Submit</p>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="23.862" height="10" viewBox="0 0 23.862 10"> <path id="Icon_material-arrow-forward" data-name="Icon material-arrow-forward" d="M18.862,0l-.881.881,3.487,3.494H0v1.25H21.469L17.981,9.119l.881.881,5-5Z" fill="#a4988f"></path> </svg>
                                </button></div>', $atts, $value);
        return $html;
    }
}

add_theme_support('post-thumbnails');

add_image_size( 'custom-size', 200 );



function cs_scripts() {

  if (!is_admin()) {
      wp_enqueue_script('como-vendors', get_theme_file_uri('assets/js/vendors.min.js'), array('jquery'), '', true);
      if(is_page('talent')){
        wp_enqueue_script('como-odometer', get_theme_file_uri('assets/js/vendors/odometer.min.js'), array('jquery'), '', true);
      }
      
      wp_enqueue_script('como-main', get_theme_file_uri('assets/js/main.min.js'), array('jquery'), '', true);
  }
}

add_action('wp_enqueue_scripts', 'cs_scripts');


// Option page
if (function_exists('acf_add_options_page')) {
  acf_add_options_page(array(
      'page_title' => 'Theme Setting',
      'menu_title' => 'Theme Setting',
      'menu_slug' => 'theme-general-settings',
      'capability' => 'edit_posts',
      'redirect' => false
  ));
}




function enable_svg_upload( $upload_mimes ) {
  $upload_mimes['svg'] = 'image/svg+xml';
  $upload_mimes['svgz'] = 'image/svg+xml';
  return $upload_mimes;
}
add_filter( 'upload_mimes', 'enable_svg_upload', 10, 1 );



function como_register_menus() {
  register_nav_menus(array(
      'primary'=> __('Primary Navigation'),
      'businessnav1'=> __('Business Nav Col 1'),
      'businessnav2'=> __('Business Nav Col 2'),
      'businessnav3'=> __('Business Nav Col 3'),
      'footernav1' => __('Footer Nav Column 1'),
      'footernav2' => __('Footer Nav Column 2'),
      'footernav3' => __('Footer Nav Column 3'),
      'legalnavrow' => __('Legal Navigation Row'),
  
  ));
}

add_action('init', 'como_register_menus');

//adding menu item data field
function menu_item_data( $item_id, $item ) {
	$menu_item_data = get_post_meta( $item_id, '_menu_item_data', true );
	?>
<div style="clear: both;">
    <span class="description"><?php _e( "Item SubNav Data", 'menu_item_data' ); ?></span><br />
    <input type="hidden" class="nav-menu-id" value="<?php echo $item_id ;?>" />
    <div class="logged-input-holder">
        <input type="text" name="menu_item_data[<?php echo $item_id ;?>]" id="menu_item_data-<?php echo $item_id ;?>"
            value="<?php echo esc_attr( $menu_item_data ); ?>" />
    </div>
</div>
<?php
}
add_action( 'wp_nav_menu_item_custom_fields', 'menu_item_data', 10, 2 );

//save menu item data
function save_menu_item_data( $menu_id, $menu_item_db_id ) {
	if ( isset( $_POST['menu_item_data'][$menu_item_db_id]  ) ) {
		$sanitized_data = sanitize_text_field( $_POST['menu_item_data'][$menu_item_db_id] );
		update_post_meta( $menu_item_db_id, '_menu_item_data', $sanitized_data );
	} else {
		delete_post_meta( $menu_item_db_id, '_menu_item_data' );
	}
}
add_action( 'wp_update_nav_menu_item', 'save_menu_item_data', 10, 2 );


function como_primary_nav() {
  wp_nav_menu(array(
      'container' => 'div', 
      'container_class' => 'nav',
      'menu' => 'Primary Navigation', // nav name
      'items_wrap' => '%3$s' ,
      'theme_location' => 'primary', // where it's located in the theme
      'depth' => 0,
      'walker' => new Primary_Nav_Menu_Walker()
  ));
}

                                            

if ( !class_exists('Primary_Nav_Menu_Walker') ) {
  class Primary_Nav_Menu_Walker extends Walker_Nav_Menu  {
    function start_el( &$output, $item, $depth = 0, $args = array(), $current_object_id = 0) {
    
      $classes = empty($item->classes) ? array () : (array) $item->classes;
      $class_names = join(' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
      !empty ( $class_names ) and $class_names = ' class="'. esc_attr( $class_names ) . '"';
      $output .= "";
      $attributes  = '';
      !empty( $item->attr_title ) and $attributes .= ' title="'  . esc_attr( $item->attr_title ) .'"';
      !empty( $item->target ) and $attributes .= ' target="' . esc_attr( $item->target     ) .'"';
      !empty( $item->xfn ) and $attributes .= ' rel="'    . esc_attr( $item->xfn        ) .'"';
      !empty( $item->url ) and $attributes .= ' href="'   . esc_attr( $item->url        ) .'"';
      !empty( $item->_menu_item_data ) and $attributes .= 'data-subNav="'   . esc_attr(  $item->_menu_item_data    ) .'"';
      $title = apply_filters( 'the_title', $item->title, $item->ID );
      $item_output = $args->before
      . "<h4 class='s eachLink'><a $class_names $attributes  >"
      . $args->link_before
      . strtoupper($title)
      . '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7.061 12.707">
          <path id="Path_107430" data-name="Path 107430"
          d="M-7445.847,8515.351l-6,6,6,6"
          transform="translate(-7445.493 8527.704) rotate(180)"
          fill="none" stroke-width="1" />
          </svg>
          </a>
          </h4>'
      . $args->link_after
      . $args->after;
      $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
    
  
  }
}

function como_business_nav1() {
  wp_nav_menu(array(
      'container' => 'div', 
      'container_class' => 'subNavLinksWrap',
      'menu' => 'Business  Nav Col 1', // nav name
      'items_wrap' => '%3$s' ,
      'theme_location' => 'businessnav1', // where it's located in the theme
      'depth' => 0,
      'walker' => new Business_Nav_Menu_Walker()
  ));
}
function como_business_nav2() {
  wp_nav_menu(array(
      'container' => 'div', 
      'container_class' => 'subNavLinksWrap',
      'menu' => 'Business Nav Col 2', // nav name
      'items_wrap' => '%3$s' ,
      'theme_location' => 'businessnav2', // where it's located in the theme
      'depth' => 0,
      'walker' => new Business_Nav_Menu_Walker()
  ));
}
function como_business_nav3() {
  wp_nav_menu(array(
      'container' => 'div', 
      'container_class' => 'subNavLinksWrap',
      'menu' => 'Business Nav Col 3', // nav name
      'items_wrap' => '%3$s' ,
      'theme_location' => 'businessnav3', // where it's located in the theme
      'depth' => 0,
      'walker' => new Business_Nav_Menu_Walker()
  ));
}



if ( !class_exists('Business_Nav_Menu_Walker') ) {
  class Business_Nav_Menu_Walker extends Walker_Nav_Menu  {
    
    function start_el( &$output, $item, $depth = 0, $args = array(), $current_object_id = 0) {

      $classes = empty($item->classes) ? array () : (array) $item->classes;
      $class_names = join(' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
      !empty ( $class_names ) and $class_names = ' class="'. esc_attr( $class_names ) . '"';
      $output .= "";
      $attributes  = '';
      !empty( $item->attr_title ) and $attributes .= ' title="'  . esc_attr( $item->attr_title ) .'"';
      !empty( $item->target ) and $attributes .= ' target="' . esc_attr( $item->target     ) .'"';
      !empty( $item->xfn ) and $attributes .= ' rel="'    . esc_attr( $item->xfn        ) .'"';
      !empty( $item->url ) and $attributes .= ' href="'   . esc_attr( $item->url        ) .'"';
      $title = apply_filters( 'the_title', $item->title, $item->ID );
      $pclass .= 'class="'. esc_attr($item->classes[0]).'"';
       
    
      if($depth == 0){
      $item_output = $args->before
      . "<h4 $pclass ><a $attributes $class_names>"
      . $args->link_before
      . strtoupper($title)
      . '</a></h4>'
      . $args->link_after
      . $args->after;
      }elseif($depth > 0){
        $item_output = $args->before
        . "<p $pclass ><a $attributes $class_names>"
        . $args->link_before
        . $title
        . '</a></p>'
        . $args->link_after
        . $args->after;
      }
      $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }

    function start_lvl(&$output, $depth = 0, $args = null) { 
          $output .=  '';
  }
    function end_lvl(&$output, $depth = 0, $args = null) { 
          $output .= "";
  }
    
  
  }
}


function como_footer_nav1() {
  wp_nav_menu(array(
      'container' => 'nav', 
      'container_class' => 'footerMainNav',
      'menu' => 'Footer Nav Column 1', // nav name
      'items_wrap' => '%3$s' ,
      'theme_location' => 'footernav1', // where it's located in the theme
      'depth' => 0,
      'walker' => new Footer_Column_Nav_Menu_Walker()
  ));
}
function como_footer_nav2() {
  wp_nav_menu(array(
      'container' => 'nav', 
      'container_class' => 'footerMainNav',
      'menu' => 'Footer Nav Column 2', // nav name
      'items_wrap' => '%3$s' ,
      'theme_location' => 'footernav2', // where it's located in the theme
      'depth' => 0,
      'walker' => new Footer_Column_Nav_Menu_Walker()
  ));
}
function como_footer_nav3() {
  wp_nav_menu(array(
      'container' => 'nav', 
      'container_class' => 'footerMainNav',
      'menu' => 'Footer Nav Column 3', // nav name
      'items_wrap' => '%3$s' ,
      'theme_location' => 'footernav3', // where it's located in the theme
      'depth' => 0,
      'walker' => new Footer_Column_Nav_Menu_Walker()
  ));
}

if ( !class_exists('Footer_Column_Nav_Menu_Walker') ) {
  class Footer_Column_Nav_Menu_Walker extends Walker_Nav_Menu  {
    
    function start_el( &$output, $item, $depth = 0, $args = array(), $current_object_id = 0) {
      $classes = empty($item->classes) ? array () : (array) $item->classes;
      $class_names = join(' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
      !empty ( $class_names ) and $class_names = ' class=" '. esc_attr( $class_names ) . '"';
      $output .= "";
      $attributes  = '';
      !empty( $item->attr_title ) and $attributes .= ' title="'  . esc_attr( $item->attr_title ) .'"';
      !empty( $item->target ) and $attributes .= ' target="' . esc_attr( $item->target     ) .'"';
      !empty( $item->xfn ) and $attributes .= ' rel="'    . esc_attr( $item->xfn        ) .'"';
      !empty( $item->url ) and $attributes .= ' href="'   . esc_attr( $item->url        ) .'"';
      $title = apply_filters( 'the_title', $item->title, $item->ID );
      $item_output = $args->before
      . "<h4 class='s' ><a $attributes  $class_names>"
      . $args->link_before
      . strtoupper($title)
      . '</a></h4>'
      . $args->link_after
      . $args->after;
      $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
    
  
  }
}



function como_footer_nav() {
  wp_nav_menu(array(
      'container' => 'nav', 
      'container_class' => 'legalPrivacyNavRow',
      'menu' => 'Footer Nav', // nav name
      'items_wrap' => '%3$s' ,
      'theme_location' => 'legalnavrow', // where it's located in the theme
      'depth' => 0,
      'walker' => new Footer_Nav_Menu_Walker()
  ));
}





if ( !class_exists('Footer_Nav_Menu_Walker') ) {
  class Footer_Nav_Menu_Walker extends Walker_Nav_Menu  {
    
    function start_el( &$output, $item, $depth = 0, $args = array(), $current_object_id = 0) {
      $classes = empty($item->classes) ? array () : (array) $item->classes;
      $class_names = join(' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
      !empty ( $class_names ) and $class_names = ' class="s '. esc_attr( $class_names ) . '"';
      $output .= "";
      $attributes  = '';
      !empty( $item->attr_title ) and $attributes .= ' title="'  . esc_attr( $item->attr_title ) .'"';
      !empty( $item->target ) and $attributes .= ' target="' . esc_attr( $item->target     ) .'"';
      !empty( $item->xfn ) and $attributes .= ' rel="'    . esc_attr( $item->xfn        ) .'"';
      !empty( $item->url ) and $attributes .= ' href="'   . esc_attr( $item->url        ) .'"';
      $title = apply_filters( 'the_title', $item->title, $item->ID );
      $item_output = $args->before
      . "<p $class_names ><a $attributes >"
      . $args->link_before
      . $title
      . '</a></p>'
      . $args->link_after
      . $args->after;
      $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
    
  
  }
}

function my_navigation_class($classes, $item){
  foreach ($classes as $idx => $class) {
      if ($class == 'current-menu-item') {
          $classes[$idx] = 'atPage';
      }
  }
  return $classes;
}
add_filter('nav_menu_css_class' , 'my_navigation_class' , 10 , 2);





// Register Custom Post Type
function como_News() {
  $labels = array(
      'name' => _x('News Article', 'Post Type General Name', 'como'),
      'singular_name' => _x('News Article', 'Post Type Singular Name', 'como'),
      'menu_name' => __('News Article', 'como'),
      'name_admin_bar' => __('News Article', 'como'),
      'archives' => __('Item Archives', 'como'),
      'parent_item_colon' => __('Parent Item:', 'como'),
      'all_items' => __('All News Article', 'como'),
      'add_new_item' => __('Add New Article', 'como'),
      'add_new' => __('Add New', 'como'),
      'new_item' => __('New Item', 'como'),
      'edit_item' => __('Edit Item', 'como'),
      'update_item' => __('Update Item', 'como'),
      'view_item' => __('View Item', 'como'),
      'search_items' => __('Search Item', 'como'),
      'not_found' => __('Not found', 'como'),
      'not_found_in_trash' => __('Not found in Trash', 'como'),
      'insert_into_item' => __('Insert into item', 'como'),
      'uploaded_to_this_item' => __('Uploaded to this item', 'como'),
      'items_list' => __('Items list', 'como'),
      'items_list_navigation' => __('Items list navigation', 'como'),
      'filter_items_list' => __('Filter items list', 'como'),
      'featured_image'        => __( 'Listing Image 800x500', 'como' ),
      'set_featured_image'    => __( 'Set Listing image', 'como' ),
      'remove_featured_image' => _x( 'Remove Listing image', 'como' ),
      'use_featured_image'    => _x( 'Use as Listing image', 'como' ),
  );
  $args = array(
      'label' => __('News Article', 'como'),
      'description' => __('News Article', 'como'),
      'labels' => $labels,
      'supports' => array('title','custom-fields', 'thumbnail', 'excerpt'),
      'menu_icon' => 'dashicons-admin-post',
      'hierarchical' => false,
      'public' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'has_archive' =>true,
      'menu_position' => 35
  );
  register_post_type('news-article', $args);

           
}

add_action('init', 'como_News', 0);



// Register Custom Post Type
function como_Restaurants() {
  $labels = array(
      'name' => _x('Restaurants', 'Post Type General Name', 'como'),
      'singular_name' => _x('Restaurant', 'Post Type Singular Name', 'como'),
      'menu_name' => __('Restaurants', 'como'),
      'name_admin_bar' => __('Restaurants', 'como'),
      'archives' => __('Item Archives', 'como'),
      'parent_item_colon' => __('Parent Item:', 'como'),
      'all_items' => __('All Restaurant', 'como'),
      'add_new_item' => __('Add Restaurant', 'como'),
      'add_new' => __('Add New', 'como'),
      'new_item' => __('New Item', 'como'),
      'edit_item' => __('Edit Item', 'como'),
      'update_item' => __('Update Item', 'como'),
      'view_item' => __('View Item', 'como'),
      'search_items' => __('Search Item', 'como'),
      'not_found' => __('Not found', 'como'),
      'not_found_in_trash' => __('Not found in Trash', 'como'),
      'insert_into_item' => __('Insert into item', 'como'),
      'uploaded_to_this_item' => __('Uploaded to this item', 'como'),
      'items_list' => __('Items list', 'como'),
      'items_list_navigation' => __('Items list navigation', 'como'),
      'filter_items_list' => __('Filter items list', 'como'),
      'featured_image'        => __( 'Listing Image 800x500', 'como' ),
      'set_featured_image'    => __( 'Set Listing image', 'como' ),
      'remove_featured_image' => _x( 'Remove Listing image', 'como' ),
      'use_featured_image'    => _x( 'Use as Listing image', 'como' ),
  );
  $args = array(
      'label' => __('Restaurants', 'como'),
      'description' => __('Restaurants', 'como'),
      'labels' => $labels,
      'supports' => array('title','custom-fields','thumbnail'),
      'menu_icon' => 'dashicons-store',
      'hierarchical' => false,
      'public' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'has_archive' =>false,
      'menu_position' => 40,
      'rewrite'=> array('slug' => 'food-dining'),
  );
  register_post_type('resturants', $args);

           
}

add_action('init', 'como_Restaurants', 0);



// Register Custom Post Type
function como_FoodRetail() {
  $labels = array(
      'name' => _x('Food Retail', 'Post Type General Name', 'como'),
      'singular_name' => _x('Food Retail', 'Post Type Singular Name', 'como'),
      'menu_name' => __('Food Retail', 'como'),
      'name_admin_bar' => __('Food Retail', 'como'),
      'archives' => __('Item Archives', 'como'),
      'parent_item_colon' => __('Parent Item:', 'como'),
      'all_items' => __('All Food Retail', 'como'),
      'add_new_item' => __('Add Food Retail', 'como'),
      'add_new' => __('Add New', 'como'),
      'new_item' => __('New Item', 'como'),
      'edit_item' => __('Edit Item', 'como'),
      'update_item' => __('Update Item', 'como'),
      'view_item' => __('View Item', 'como'),
      'search_items' => __('Search Item', 'como'),
      'not_found' => __('Not found', 'como'),
      'not_found_in_trash' => __('Not found in Trash', 'como'),
      'insert_into_item' => __('Insert into item', 'como'),
      'uploaded_to_this_item' => __('Uploaded to this item', 'como'),
      'items_list' => __('Items list', 'como'),
      'items_list_navigation' => __('Items list navigation', 'como'),
      'filter_items_list' => __('Filter items list', 'como'),
      'featured_image'        => __( 'Listing Image 800x500', 'como' ),
      'set_featured_image'    => __( 'Set Listing image', 'como' ),
      'remove_featured_image' => _x( 'Remove Listing image', 'como' ),
      'use_featured_image'    => _x( 'Use as Listing image', 'como' ),
  );
  $args = array(
      'label' => __('Food Retail', 'como'),
      'description' => __('Food Retail', 'como'),
      'labels' => $labels,
      'supports' => array('title','custom-fields','thumbnail'),
      'menu_icon' => 'dashicons-food',
      'hierarchical' => false,
      'public' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'has_archive' =>false,
      'menu_position' => 45,
      
  );
  register_post_type('food-retail', $args);

           
}

add_action('init', 'como_FoodRetail', 0);




// Register Custom Post Type
function como_Property() {
  $labels = array(
      'name' => _x('Property', 'Post Type General Name', 'como'),
      'singular_name' => _x('Property', 'Post Type Singular Name', 'como'),
      'menu_name' => __('Property', 'como'),
      'name_admin_bar' => __('Property', 'como'),
      'archives' => __('Item Archives', 'como'),
      'parent_item_colon' => __('Parent Item:', 'como'),
      'all_items' => __('All Property', 'como'),
      'add_new_item' => __('Add Property', 'como'),
      'add_new' => __('Add New', 'como'),
      'new_item' => __('New Item', 'como'),
      'edit_item' => __('Edit Item', 'como'),
      'update_item' => __('Update Item', 'como'),
      'view_item' => __('View Item', 'como'),
      'search_items' => __('Search Item', 'como'),
      'not_found' => __('Not found', 'como'),
      'not_found_in_trash' => __('Not found in Trash', 'como'),
      'insert_into_item' => __('Insert into item', 'como'),
      'uploaded_to_this_item' => __('Uploaded to this item', 'como'),
      'items_list' => __('Items list', 'como'),
      'items_list_navigation' => __('Items list navigation', 'como'),
      'filter_items_list' => __('Filter items list', 'como'),
      'featured_image'        => __( 'Listing Image 800x500', 'como' ),
      'set_featured_image'    => __( 'Set Listing image', 'como' ),
      'remove_featured_image' => _x( 'Remove Listing image', 'como' ),
      'use_featured_image'    => _x( 'Use as Listing image', 'como' ),
  );
  $args = array(
      'label' => __('Property', 'como'),
      'description' => __('Property', 'como'),
      'labels' => $labels,
      'supports' => array('title','custom-fields','thumbnail'),
      'menu_icon' => 'dashicons-building',
      'hierarchical' => false,
      'public' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'has_archive' =>false,
      'menu_position' => 50,
      
  );
  register_post_type('property', $args);

           
}

add_action('init', 'como_Property', 0);


// Register Custom Post Type
function como_MultiLabelStore() {
  $labels = array(
      'name' => _x('Multi-Label Store', 'Post Type General Name', 'como'),
      'singular_name' => _x('Multi-Label Store', 'Post Type Singular Name', 'como'),
      'menu_name' => __('Multi-Label Store', 'como'),
      'name_admin_bar' => __('Multi-Label Store', 'como'),
      'archives' => __('Item Archives', 'como'),
      'parent_item_colon' => __('Parent Item:', 'como'),
      'all_items' => __('All Multi-Label Store', 'como'),
      'add_new_item' => __('Add Multi-Label Store', 'como'),
      'add_new' => __('Add New', 'como'),
      'new_item' => __('New Item', 'como'),
      'edit_item' => __('Edit Item', 'como'),
      'update_item' => __('Update Item', 'como'),
      'view_item' => __('View Item', 'como'),
      'search_items' => __('Search Item', 'como'),
      'not_found' => __('Not found', 'como'),
      'not_found_in_trash' => __('Not found in Trash', 'como'),
      'insert_into_item' => __('Insert into item', 'como'),
      'uploaded_to_this_item' => __('Uploaded to this item', 'como'),
      'items_list' => __('Items list', 'como'),
      'items_list_navigation' => __('Items list navigation', 'como'),
      'filter_items_list' => __('Filter items list', 'como'),
      'featured_image'        => __( 'Listing Image 800x500', 'como' ),
      'set_featured_image'    => __( 'Set Listing image', 'como' ),
      'remove_featured_image' => _x( 'Remove Listing image', 'como' ),
      'use_featured_image'    => _x( 'Use as Listing image', 'como' ),
  );
  $args = array(
      'label' => __('Multi-Label Store', 'como'),
      'description' => __('Multi-Label Store', 'como'),
      'labels' => $labels,
      'supports' => array('title','custom-fields','thumbnail'),
      'menu_icon' => 'dashicons-store',
      'hierarchical' => false,
      'public' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'has_archive' =>false,
      'menu_position' => 55,
      'rewrite'=> array('slug' => 'fashion'),
      
  );
  register_post_type('multi-label-store', $args);

           
}

add_action('init', 'como_MultiLabelStore', 0);


// Register Custom Post Type
function como_Wellness() {
  $labels = array(
      'name' => _x('Wellness', 'Post Type General Name', 'como'),
      'singular_name' => _x('Wellness', 'Post Type Singular Name', 'como'),
      'menu_name' => __('Wellness', 'como'),
      'name_admin_bar' => __('Wellness', 'como'),
      'archives' => __('Item Archives', 'como'),
      'parent_item_colon' => __('Parent Item:', 'como'),
      'all_items' => __('All Wellness', 'como'),
      'add_new_item' => __('Add Wellness', 'como'),
      'add_new' => __('Add New', 'como'),
      'new_item' => __('New Item', 'como'),
      'edit_item' => __('Edit Item', 'como'),
      'update_item' => __('Update Item', 'como'),
      'view_item' => __('View Item', 'como'),
      'search_items' => __('Search Item', 'como'),
      'not_found' => __('Not found', 'como'),
      'not_found_in_trash' => __('Not found in Trash', 'como'),
      'insert_into_item' => __('Insert into item', 'como'),
      'uploaded_to_this_item' => __('Uploaded to this item', 'como'),
      'items_list' => __('Items list', 'como'),
      'items_list_navigation' => __('Items list navigation', 'como'),
      'filter_items_list' => __('Filter items list', 'como'),
      'featured_image'        => __( 'Listing Image 800x500', 'como' ),
      'set_featured_image'    => __( 'Set Listing image', 'como' ),
      'remove_featured_image' => _x( 'Remove Listing image', 'como' ),
      'use_featured_image'    => _x( 'Use as Listing image', 'como' ),
  );
  $args = array(
      'label' => __('Wellness', 'como'),
      'description' => __('Wellness', 'como'),
      'labels' => $labels,
      'supports' => array('title','custom-fields','thumbnail'),
      'menu_icon' => 'dashicons-universal-access',
      'hierarchical' => false,
      'public' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'has_archive' =>false,
      'menu_position' => 55,
      
  );
  register_post_type('wellness', $args);

           
}

add_action('init', 'como_Wellness', 0);




// Register Custom Post Type
function como_ClusterConcepts() {
  $labels = array(
      'name' => _x('Cluster Concept', 'Post Type General Name', 'como'),
      'singular_name' => _x('Cluster Concept', 'Post Type Singular Name', 'como'),
      'menu_name' => __('Cluster Concept', 'como'),
      'name_admin_bar' => __('Cluster Concept', 'como'),
      'archives' => __('Item Archives', 'como'),
      'parent_item_colon' => __('Parent Item:', 'como'),
      'all_items' => __('All Cluster Concept', 'como'),
      'add_new_item' => __('Add Cluster Concept', 'como'),
      'add_new' => __('Add New', 'como'),
      'new_item' => __('New Item', 'como'),
      'edit_item' => __('Edit Item', 'como'),
      'update_item' => __('Update Item', 'como'),
      'view_item' => __('View Item', 'como'),
      'search_items' => __('Search Item', 'como'),
      'not_found' => __('Not found', 'como'),
      'not_found_in_trash' => __('Not found in Trash', 'como'),
      'insert_into_item' => __('Insert into item', 'como'),
      'uploaded_to_this_item' => __('Uploaded to this item', 'como'),
      'items_list' => __('Items list', 'como'),
      'items_list_navigation' => __('Items list navigation', 'como'),
      'filter_items_list' => __('Filter items list', 'como'),
      'featured_image'        => __( 'Listing Image', 'como' ),
      'set_featured_image'    => __( 'Set Listing image 800x500', 'como' ),
      'remove_featured_image' => _x( 'Remove Listing image', 'como' ),
      'use_featured_image'    => _x( 'Use as Listing image', 'como' ),
  );
  $args = array(
      'label' => __('Cluster Concept', 'como'),
      'description' => __('Cluster Concept', 'como'),
      'labels' => $labels,
      'supports' => array('title','custom-fields','thumbnail'),
      'menu_icon' => 'dashicons-networking',
      'hierarchical' => false,
	  'rewrite' => array('slug' => 'cluster-concept'),
      'public' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'has_archive' =>false,
      'menu_position' => 55,
      
  );
  register_post_type('cluster-concepts', $args);

           
}

add_action('init', 'como_ClusterConcepts', 0);





// Register Custom Post Type
function como_Loyalty() {
  $labels = array(
      'name' => _x('Loyalty Programmes', 'Post Type General Name', 'como'),
      'singular_name' => _x('Loyalty Programmes', 'Post Type Singular Name', 'como'),
      'menu_name' => __('Loyalty Programmes', 'como'),
      'name_admin_bar' => __('Loyalty Programmes', 'como'),
      'archives' => __('Item Archives', 'como'),
      'parent_item_colon' => __('Parent Item:', 'como'),
      'all_items' => __('All Loyalty Programmes', 'como'),
      'add_new_item' => __('Add Loyalty Programmes', 'como'),
      'add_new' => __('Add New', 'como'),
      'new_item' => __('New Item', 'como'),
      'edit_item' => __('Edit Item', 'como'),
      'update_item' => __('Update Item', 'como'),
      'view_item' => __('View Item', 'como'),
      'search_items' => __('Search Item', 'como'),
      'not_found' => __('Not found', 'como'),
      'not_found_in_trash' => __('Not found in Trash', 'como'),
      'insert_into_item' => __('Insert into item', 'como'),
      'uploaded_to_this_item' => __('Uploaded to this item', 'como'),
      'items_list' => __('Items list', 'como'),
      'items_list_navigation' => __('Items list navigation', 'como'),
      'filter_items_list' => __('Filter items list', 'como'),
      'featured_image'        => __( 'Listing Image 800x500', 'como' ),
      'set_featured_image'    => __( 'Set Listing image', 'como' ),
      'remove_featured_image' => _x( 'Remove Listing image', 'como' ),
      'use_featured_image'    => _x( 'Use as Listing image', 'como' ),
  );
  $args = array(
      'label' => __('Loyalty Programmes', 'como'),
      'description' => __('Loyalty Programmes', 'como'),
      'labels' => $labels,
      'supports' => array('title','custom-fields','thumbnail'),
      'menu_icon' => 'dashicons-awards',
      'hierarchical' => false,
	  'rewrite' => array('slug' => 'recognition'),
      'public' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'has_archive' =>false,
      'menu_position' => 55,
      
  );
  register_post_type('loyalty', $args);

           
}

add_action('init', 'como_Loyalty', 0);



add_action( 'parse_request', 'fashion_parse_request' );
function fashion_parse_request( $wp ) {
    $post_type = 'multi-label-store'; // set the post type slug
  
    if ( preg_match( '#^fashion/#', $wp->request ) &&
        isset( $wp->query_vars['post_type'], $wp->query_vars['name'] ) &&
        $post_type === $wp->query_vars['post_type']
    ) {
        $posts = get_posts( array(
            'post_type' => 'page',
            'name'      => $wp->query_vars['name'],
        ) );

        // If a (child) Page with the same name/slug exists, we load the Page,
        // regardless the post type post exists or not.
        if ( ! empty( $posts ) ) {
            $wp->query_vars['pagename'] = get_page_uri( $posts[0] );

            unset( $wp->query_vars['post_type'], $wp->query_vars['name'],
                $wp->query_vars[ $post_type ] );
        }
    }
}


add_action( 'parse_request', 'food_parse_request' );
function food_parse_request( $wp ) {
    $post_type = 'resturants'; // set the post type slug
 
    if ( preg_match( '#^food-dining/#', $wp->request ) &&
        isset( $wp->query_vars['post_type'], $wp->query_vars['name'] ) &&
        $post_type === $wp->query_vars['post_type']
    ) {
        $posts = get_posts( array(
            'post_type' => 'page',
            'name'      => $wp->query_vars['name'],
        ) );

        // If a (child) Page with the same name/slug exists, we load the Page,
        // regardless the post type post exists or not.
        if ( ! empty( $posts ) ) {
            $wp->query_vars['pagename'] = get_page_uri( $posts[0] );

            unset( $wp->query_vars['post_type'], $wp->query_vars['name'],
                $wp->query_vars[ $post_type ] );
        }
    }
}