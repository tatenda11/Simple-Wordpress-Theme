<?php

    function yiyo_trial_register_styles(){
        //$version = $wp_get_theme()->get('Version');
        $version = wp_get_theme()->get( 'Version' );
        wp_enqueue_style('yiyo-base-css', get_template_directory_uri() . '/style.css', array('bootstrap-css'),  $version , 'all');
        wp_enqueue_style('font-awesome-css', get_template_directory_uri() . '/assets/vendor/icofont/icofont.min.css' , array(), '', 'all');
        wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' , array(), '4.4.1', 'all');
        wp_enqueue_style('boxicons-css', get_template_directory_uri() . '/assets/vendor/boxicons/css/boxicons.min.css' , array(), '', 'all');
        wp_enqueue_style('venobox.css', get_template_directory_uri() . '/assets/vendor/venobox/venobox.css' , array(), '', 'all');

    }

    add_action('wp_enqueue_scripts', 'yiyo_trial_register_styles');