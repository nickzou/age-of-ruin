<?php
    function register_global_resources() {
        wp_register_script('app', get_template_directory_uri() . '/js/app.js', [], '1', true);
        wp_register_style('styles', get_template_directory_uri() . '/css/styles.css', [], '1.0.3', 'all');

        //Template Login Resources
        wp_register_script('template-login', get_template_directory_uri() . '/js/template-login.js', [], '1', true);
        wp_register_style('template-login', get_template_directory_uri() . '/css/template-login.css', [], '1.0.3', 'all');
    }

    add_action('init', 'register_global_resources');