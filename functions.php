<?php

    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

    function load_assets(){ 

        wp_enqueue_style('fontawesome_css', 'https://use.fontawesome.com/releases/v5.6.3/css/all.css');

        wp_enqueue_style('bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css');

        wp_enqueue_style('mdbootstrap_css', 'https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.0/css/mdb.min.css');

        wp_enqueue_style( 'style', get_stylesheet_uri() );

        wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.3.1.min.js');

        wp_enqueue_script('popper_js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js');

        wp_enqueue_script( 'bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js');

        wp_enqueue_script('mdbootstrap_js', 'https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.0/js/mdb.min.js');

    }
    add_action('wp_enqueue_scripts', 'load_assets');

    register_nav_menus( array( 'primary' => __( 'Primary Menu', 'THEMENAME' ),));

?>