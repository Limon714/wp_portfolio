<?php 

require_once('inc/bs4navwalker.php');


register_nav_menu( 'main', 'main_menu' );
add_theme_support( 'post-thumbnails' );

function add_custom_logo(){
    add_theme_support( 'custom-logo' );
}
add_action( 'after_setup_theme',  'add_custom_logo');


