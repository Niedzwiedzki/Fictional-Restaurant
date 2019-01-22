<?php
//custom post types (events)
function restaurant_post_types() {
  //menu
  register_post_type('menu', array(
    'supports' => array('title', 'editor'),
    'rewrite' => array('slug' => 'menu'),
    'has_archive' => true,
    'public' => true,
    'menu_icon' => 'dashicons-clipboard',
    'labels' => array(
      'name' => "Menu",
      'add_new_item' => "Add New Dish",
      'edit_item' => "Edit Dish",
      'all_items' => "All Dishes",
      'singular_name' => "Dish"
    )
  ));


  //dish categories
  register_post_type('categories', array(
    'supports' => array('title', 'editor'),
    'public' => true,
    'menu_icon' => 'dashicons-migrate',
    'labels' => array(
      'name' => "Category",
      'add_new_item' => "Add New Category",
      'edit_item' => "Edit Category",
      'all_items' => "All Categories",
      'singular_name' => "Category"
    )
  ));

  register_post_type('infos', array(
    'supports' => array('title', 'editor', 'thumbnail'),
    'has_archive' => true,
    'public' => true,
    'menu_icon' => 'dashicons-admin-site',
    'labels' => array(
      'name' => "Info",
      'add_new_item' => "Add New Info",
      'edit_item' => "Edit Info",
      'all_items' => "All Infos",
      'singular_name' => "Info"
    )
  ));


  register_post_type('wine', array(
    'supports' => array('title', 'editor', 'thumbnail'),
    'public' => true,
    'menu_icon' => 'dashicons-filter',
    'labels' => array(
      'name' => "Wine",
      'add_new_item' => "Add New Wine",
      'edit_item' => "Edit Wine",
      'all_items' => "All Wines",
      'singular_name' => "Wine"
    )
  ));


  register_post_type('o_nas', array(
    'supports' => array('title', 'editor', 'thumbnail'),
    'rewrite' => array('slug' => 'o_nas'),
    'has_archive' => true,
    'public' => true,
    'menu_icon' => 'dashicons-filter',
    'labels' => array(
      'name' => "O nas",
      'add_new_item' => "Add new",
      'edit_item' => "Edit",
      'all_items' => "All",
      'singular_name' => "O nas"
    )
  ));

}

add_action('init', 'restaurant_post_types');
 ?>
