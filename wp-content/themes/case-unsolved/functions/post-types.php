<?php

function jh_add_custom_post_types()
{
    register_post_type('team_member', [
        'labels'              => [
            'name'               => _x('Team Members', 'post type general name'),
            'singular_name'      => _x('Team Member', 'post type singular name'),
            'menu_name'          => _x('Team Members', 'admin menu'),
            'name_admin_bar'     => _x('Team Members', 'add new on admin bar'),
            'add_new'            => _x('Add New', 'Team Member'),
            'add_new_item'       => __('Add New Team Member'),
            'new_item'           => __('New Team Member'),
            'edit_item'          => __('Edit Team Member'),
            'view_item'          => __('View Team Member'),
            'all_items'          => __('All Team Members'),
            'search_items'       => __('Search Team Members'),
            'not_found'          => __('No Team Members found.'),
            'not_found_in_trash' => __('No Team Members found in Trash.'),
        ],
        'public'              => true,
        'exclude_from_search' => true,
        'show_in_nav_menus'   => false,
        'show_in_rest'        => true,
        'supports'            => ['title', 'editor', 'thumbnail', 'custom-fields']
    ]);

    register_post_type('award', [
        'labels'              => [
            'name'               => _x('Awards', 'post type general name'),
            'singular_name'      => _x('Award', 'post type singular name'),
            'menu_name'          => _x('Awards', 'admin menu'),
            'name_admin_bar'     => _x('Awards', 'add new on admin bar'),
            'add_new'            => _x('Add New', 'Award'),
            'add_new_item'       => __('Add New Award'),
            'new_item'           => __('New Award'),
            'edit_item'          => __('Edit Award'),
            'view_item'          => __('View Award'),
            'all_items'          => __('All Awards'),
            'search_items'       => __('Search Awards'),
            'not_found'          => __('No Awards found.'),
            'not_found_in_trash' => __('No Awards found in Trash.'),
        ],
        'public'              => true,
        'exclude_from_search' => true,
        'show_in_nav_menus'   => false,
        'show_in_rest'        => true,
        'supports'            => ['title', 'custom-fields']
    ]);
}

add_action('init', 'jh_add_custom_post_types');
