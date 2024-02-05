<?php 


add_action('wp_enqueue_scripts', 'zacya_enqueue_scripts');

function zacya_enqueue_scripts(){
   
    // Add Enqueue style
    wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/plugins/bootstrap/bootstrap.min.css', array(), '4.5.3', 'all');

    wp_enqueue_style('fontawesome-min', get_template_directory_uri().'/plugins/fontawesome/css/all.min.css', array(), '5.13.1', 'all');

    wp_enqueue_style('animate-min', get_template_directory_uri().'/plugins/animate-css/animate.css', array(), '1.0', 'all');

    wp_enqueue_style('slick', get_template_directory_uri(). '/plugins/slick/slick.css', array(), '1.0', 'all');

    wp_enqueue_style('slick-theme', get_template_directory_uri(). '/plugins/slick/slick-theme.css', array(), '1.0', 'all');

    wp_enqueue_style('coloebox', get_template_directory_uri(). '/plugins/colorbox/colorbox.css', array(), '1.0', 'all');

    wp_enqueue_style('stylesheet', get_template_directory_uri().'/css/style.css', array(), '1.0', 'all');


    wp_enqueue_style( 'zacya-main-', get_stylesheet_uri() );



    // Add Enqueue scripts
    wp_enqueue_script('jquery-min', get_template_directory_uri().'/plugins/jQuery/jquery.min.js', array(), '3.5.1', 'true');

    wp_enqueue_script('bootstrap-min', get_template_directory_uri().'/plugins/bootstrap/bootstrap.min.js', array('jquery-min'), '4.5.3', true);

    wp_enqueue_script('slick-min', get_template_directory_uri().'/plugins/slick/slick.min.js', array('jquery-min'), '1.0', true);

    wp_enqueue_script('slick-animation-min', get_template_directory_uri().'/plugins/slick/slick-animation.min.js', array('jquery-min'), '0.3.3', true);

    wp_enqueue_script('jquery-colorbox', get_template_directory_uri().'/plugins/colorbox/jquery.colorbox.js', array('jquery-min'), '1.6.3', true);

    wp_enqueue_script('shuffle-min', get_template_directory_uri().'/plugins/shuffle/shuffle.min.js', array('jquery-min'), '1.0', true);

    wp_enqueue_script('google-map-api', get_template_directory_uri().'https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU', array('jquery-min'), '1.0', true);

    wp_enqueue_script('google-map-plugin', get_template_directory_uri().'/plugins/google-map/map.js', array('jquery-min'), '1.0', true);

    wp_enqueue_script('main-js', get_template_directory_uri().'/js/script.js', array('jquery-min'), '1.0', true);


}



?>

