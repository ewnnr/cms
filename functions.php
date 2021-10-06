<?php

add_action('init', 'register_my_menus');
function register_my_menus(){
    register_nav_menus(array(
        'main_menu' => __('Huvudmeny')
    ));
}
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 557, 313 );




?>