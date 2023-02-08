<?php
function registerConcernPostType()
{
    $labels = [
        'name'                  => _x('Concern', 'Concern General Name', 'veritas'),
        'singular_name'         => _x('Concern', 'Concern Singular Name', 'veritas'),
        'menu_name'             => __('Concern', 'veritas'),
        'name_admin_bar'        => __('Concern', 'veritas'),
        'archives'              => __('Item Archives', 'veritas'),
        'attributes'            => __('Item Attributes', 'veritas'),
        'parent_item_colon'     => __('Parent Item:', 'veritas'),
        'all_items'             => __('All Items', 'veritas'),
        'add_new_item'          => __('Add New Item', 'veritas'),
        'add_new'               => __('Add New', 'veritas'),
        'new_item'              => __('New Item', 'veritas'),
        'edit_item'             => __('Edit Item', 'veritas'),
        'update_item'           => __('Update Item', 'veritas'),
        'view_item'             => __('View Item', 'veritas'),
        'view_items'            => __('View Items', 'veritas'),
        'search_items'          => __('Search Item', 'veritas'),
        'not_found'             => __('Not found', 'veritas'),
        'not_found_in_trash'    => __('Not found in Trash', 'veritas'),
        'featured_image'        => __('Featured Image', 'veritas'),
        'set_featured_image'    => __('Set featured image', 'veritas'),
        'remove_featured_image' => __('Remove featured image', 'veritas'),
        'use_featured_image'    => __('Use as featured image', 'veritas'),
        'insert_into_item'      => __('Insert into item', 'veritas'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'veritas'),
        'items_list'            => __('Items list', 'veritas'),
        'items_list_navigation' => __('Items list navigation', 'veritas'),
        'filter_items_list'     => __('Filter items list', 'veritas'),
    ];
    $args = [
        'label'                 => __('Concern', 'veritas'),
        'description'           => __('Concern Description', 'veritas'),
        'labels'                => $labels,
        'supports'              => ['title', 'thumbnail'],
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'menu_icon'             => 'dashicons-sos',
    ];
    register_post_type('concern', $args);
}

add_action('init', 'registerConcernPostType');

function registerConcernCategoryTaxonomy()
{
    $labels = [
        'name'                       => _x('Concern Categories', 'Concern Category General Name', 'veritas'),
        'singular_name'              => _x('Concern Category', 'Concern Category Singular Name', 'veritas'),
        'menu_name'                  => __('Concern Category', 'veritas'),
        'all_items'                  => __('All Items', 'veritas'),
        'parent_item'                => __('Parent Item', 'veritas'),
        'parent_item_colon'          => __('Parent Item:', 'veritas'),
        'new_item_name'              => __('New Item Name', 'veritas'),
        'add_new_item'               => __('Add New Item', 'veritas'),
        'edit_item'                  => __('Edit Item', 'veritas'),
        'update_item'                => __('Update Item', 'veritas'),
        'view_item'                  => __('View Item', 'veritas'),
        'separate_items_with_commas' => __('Separate items with commas', 'veritas'),
        'add_or_remove_items'        => __('Add or remove items', 'veritas'),
        'choose_from_most_used'      => __('Choose from the most used', 'veritas'),
        'popular_items'              => __('Popular Items', 'veritas'),
        'search_items'               => __('Search Items', 'veritas'),
        'not_found'                  => __('Not Found', 'veritas'),
        'no_terms'                   => __('No items', 'veritas'),
        'items_list'                 => __('Items list', 'veritas'),
        'items_list_navigation'      => __('Items list navigation', 'veritas'),
    ];
    $args = [
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    ];

    register_taxonomy('concern-category', ['concern'], $args);
}

add_action('init', 'registerConcernCategoryTaxonomy');

function concern_cpt_generating_rule($wp_rewrite) {
    $rules = array();
    $terms = get_terms( array(
        'taxonomy' => 'concern-category',
        'hide_empty' => false,
    ) );
   
    $post_type = 'concern';

    foreach ($terms as $term) {    
                
        $rules['concerns/' . $term->slug . '/([^/]*)$'] = 'index.php?post_type=' . $post_type. '&concern=$matches[1]&name=$matches[1]';
                        
    }

    $wp_rewrite->rules = $rules + $wp_rewrite->rules;
}
add_filter('generate_rewrite_rules', 'concern_cpt_generating_rule');

function concern_cpt_change_link( $permalink, $post ) {
    if( $post->post_type == 'concern' ) {
        $terms = get_the_terms( $post, 'concern-category' );
        $term_slug = '';
        if( ! empty( $terms ) ) {
            foreach ( $terms as $term ) {
                $term_slug = $term->slug;
                break;
            }
        }
        $permalink = get_home_url() ."/concerns/" . $term_slug . '/' . $post->post_name;
    }
    return $permalink;
}
add_filter('post_type_link',"concern_cpt_change_link", 10, 2);