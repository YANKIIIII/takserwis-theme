<?php
//adding custom post-type and taxonomy
function fallsview_custom_post_type()
{
    //News

    $labels = array(
        'name' => 'Deals',
        'singular_name' => 'Deal',
        'add_new' => 'Add Deal',
        'all_items' => 'All Deals',
        'add_new_item' => 'Add new Deal',
        'edit_item' => 'Edit Deal',
        'new_item' => 'New Deal',
        'view_item' => 'Show Deal',
        'search_item' => 'Search Deal',
        'not_found' => 'Deal not found',
        'not_found_in_trash' => 'No Deal in trash',
        'parent_item_colon' => 'Parent Deal'
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        // 'rewrite'            => array('slug' => 'deals'),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'supports' => array(
            'title',
            'custom-fields',
            'thumbnail',
            'excerpt',
            'editor',
            'templates'
        ),
        'menu_position' => 7,
        // 'menu_icon' => 'dashicons-admin-links',
        'exclude_from_search' => false
    );
    register_post_type('deals', $args);
}


add_action('init', 'fallsview_custom_post_type');

function check_deal_expiry()
{
    $current_date = current_time('mysql');

    $post_type = 'deals';
    $expiry_date_field = 'expiry_date'; 
    $deals = get_posts(array(
        'post_type' => $post_type,
        'posts_per_page' => -1, 
    ));

    foreach ($deals as $deal) {
        $expiry_date = get_post_meta($deal->ID, $expiry_date_field, true);

        if ($expiry_date && strtotime($expiry_date) < strtotime($current_date)) {
            wp_update_post(array(
                'ID' => $deal->ID,
                'post_status' => 'draft',
            ));
        }
    }
}

add_action('after_setup_theme', 'check_deal_expiry');