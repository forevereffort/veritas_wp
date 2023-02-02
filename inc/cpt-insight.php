<?php
function registerInsightPostType()
{
    $labels = [
        'name'                  => _x('Insight', 'Insight General Name', 'veritas'),
        'singular_name'         => _x('Insight', 'Insight Singular Name', 'veritas'),
        'menu_name'             => __('Insight', 'veritas'),
        'name_admin_bar'        => __('Insight', 'veritas'),
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
        'label'                 => __('Insight', 'veritas'),
        'description'           => __('Insight Description', 'veritas'),
        'labels'                => $labels,
        'supports'              => ['title'],
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => false,
        'capability_type'       => 'page',
        'menu_icon'             => 'dashicons-groups',
    ];
    register_post_type('insight', $args);
}

add_action('init', 'registerInsightPostType');