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

    function yiyo_trial_register_scripts(){
        $version = wp_get_theme()->get( 'Version' );
        wp_enqueue_script('jquery-js',  'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', 'all');
        wp_enqueue_script('bootstrap-js',  'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array( ), '4.4.1', 'all');
        wp_enqueue_script('easing-js', get_template_directory_uri() . '/vendor/jquery.easing/jquery.easing.min.js', array(), '' , 'all');
        wp_enqueue_script('validate-js', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js', array(), '' , 'all');

        wp_enqueue_script('validate-js', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js', array(), '' , 'all');
        wp_enqueue_script('waypoints-js', get_template_directory_uri() . '/assets/vendor/waypoints/jquery.waypoints.min.js', array(), '' , 'all');
        wp_enqueue_script('countup-js', get_template_directory_uri() . '/assets/vendor/counterup/counterup.min.js', array(), '' , 'all');
        wp_enqueue_script('owlcarousel-js', get_template_directory_uri() . '/assets/vendor/owl.carousel/owl.carousel.min.js', array(), '' , 'all');
        wp_enqueue_script('isotope-js', get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', array(), '' , 'all');
        
        wp_enqueue_script('venobox-js', get_template_directory_uri() . '/assets/vendor/venobox/venobox.min.js', array(), '' , 'all');
        wp_enqueue_script('aos-js', get_template_directory_uri() . '/assets/vendor/aos/aos.js', array(), '' , 'all');
        wp_enqueue_script('aos-js', get_template_directory_uri() . '/assets/vendor/aos/aos.js', array(), '' , 'all');
        wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), $version , 'all');

    }

    add_action('wp_enqueue_scripts', 'yiyo_trial_register_scripts');