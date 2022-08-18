<?php

function oilbiotic_sidebar_widgets()
{
    register_sidebar(array(
        'name' => __('RIGHT SIDEBAR', 'oilbiotic'),
        'id' => 'right_sidebar',
        'description' => __('Blog single page', 'oilbiotic'),
        'before_widget' => '<div class="sidebar-widget-area">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title" >',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => __('LEFT SIDEBAR', 'oilbiotic'),
        'id' => 'left_sidebar',
        'description' => __('Blog index sidebar', 'oilbiotic'),
        'before_widget' => '<div class="sidebar-widget-area">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title" >',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => __('SHOP SIDEBAR', 'oilbiotic'),
        'id' => 'shop_sidebar',
        'description' => __('Shop archive sidebar', 'oilbiotic'),
        'before_widget' => '<div class="shop-widget-area">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="shop-widget-title" >',
        'after_title' => '</h3>',
    ));
}

add_action('widgets_init', 'oilbiotic_sidebar_widgets');