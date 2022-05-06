<?php

/***************************************************************
 * Goal - Custom Post Type
 ***************************************************************/
add_action('init', 'register_goals');

function register_goals()
{
    $labels = array(
        'name' => __('Goals'),
        'menu_name' => __('Goals'),
        'singular_name' => __('Goal'),
        'add_new_item' => __('Add New Goal'),
        'edit_item' => __('Edit Goal'),
        'new_item' => __('New Goal'),
        'view_item' => __('View Goal'),
        'search_items' => __('Page Goals'),
        'not_found' => __('No Goal found'),
        'not_found_in_trash' => __('No Goal found in Trash'),
    );
    $args = array(
        'labels' => $labels,
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'revisions'
        ),
        'rewrite' => array('slug' => 'implementation/the-action-plan'),
        'capability_type' => 'post',
        'menu_position' => 20, // after Pages
        'menu_icon' => 'dashicons-align-center', // https://lonewolfonline.net/wordpress-dashicons-cheat-sheet/
        'hierarchical' => false,
        'public' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'has_archive' => false,
        'query_var' => true,
        'can_export' => true,
    );
    register_post_type('goals', $args);
}


