<?php

    /*
        Template Name: Login
        Template Post Type: page
    */

    $context = Timber::context();

    get_header(null, $args = $context);

    // if($_POST) 
    // {  

    //     global $wpdb;

    //     $username = $wpdb->escape($_REQUEST['username']);  
    //     $password = $wpdb->escape($_REQUEST['password']);  
    //     $remember = $wpdb->escape($_REQUEST['rememberme']);  
    
    //     if($remember) $remember = "true";  
    //     else $remember = "false";

    //     $login_data = [];  
    //     $login_data['user_login'] = $username;  
    //     $login_data['user_password'] = $password;  
    //     $login_data['remember'] = $remember;
    
    // } else {

    //}

    Timber::render('templates/template-login.twig', $context);

    get_footer(null, $args = $context);

?>