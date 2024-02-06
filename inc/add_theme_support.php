<?php


add_action('after_setup_theme', 'zacya_theme_support');

if (!function_exists('zacya_theme_support')){
    function zacya_theme_support(){
        add_theme_support('menus');

        register_nav_menus(array(
            'primary-menu'=> 'Primary Menu',
            'footer-menu'=> 'Footer Menu'
        )); 
        }
}
