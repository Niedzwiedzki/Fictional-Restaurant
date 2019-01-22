<?php

function university_files(){
  wp_enqueue_style('restaurant_main_styles', get_stylesheet_uri(), NULL, microtime());
  wp_enqueue_script('main-javascript', get_theme_file_uri('/js/main-js.js'), NULL, microtime(), true);
  wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans');
  wp_enqueue_style('fontawesome', '//use.fontawesome.com/releases/v5.6.3/css/all.css');
}

add_action('wp_enqueue_scripts', 'university_files');


function restaurant_features(){
  //featured images
  add_theme_support('post-thumbnails');
  add_image_size('dishLandscape', 160, 104, true);
  add_image_size('dishFullSize', 400, 260, true);

}

add_action('after_setup_theme', 'restaurant_features');


function custom_post_per_page( $query ) {
    if ( is_admin() || ! $query->is_main_query() ) {
       return;
    }

    if ( is_post_type_archive( 'infos' ) ) {
       $query->set( 'posts_per_page', 4 );
    }
}
add_filter( 'pre_get_posts', 'custom_post_per_page' );


?>
