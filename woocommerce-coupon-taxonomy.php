<?php
/*
Plugin Name: Woocommerce Coupon Taxonomy
Description: Add Categories & tags to coupons page
Version: 1.0
Author: Rashmi Malpande

*/


function wct_create_category(){
    
    $labels = array(
        'name' => 'Coupon Categories',
        'singular_name' => 'Coupon Category',
        'search_items' => __('Search Coupon Category'),
        'all_items' => __('All Categories'),
        'parent_item' => __('Parent Coupon Category'),
        'parent_item_colon' => __('Parent Coupon Category:'),
        'edit_item' => __('Edit Coupon Category'),
        'update_item' => __('Update Coupon Category'),
        'add_new_item' => __('Add New Coupon Categry'),
        'new_item_name' => __('New Coupon Category Name'),
        'menu_name' => __('Categories'),

    );

    register_taxonomy( 'coupon categories', array('shop_coupon'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'coupon_category' ),
    ) );
}
add_action( 'init', 'wct_create_category');








?>