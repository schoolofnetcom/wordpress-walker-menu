<?php

    function loadStyleDefault() {
        wp_enqueue_style('styles', get_stylesheet_uri(), [], '1.0');
    }

    add_action('wp_enqueue_scripts', 'loadStyleDefault');

    /** ADMIN BAR */
    show_admin_bar(false);
    // add_filter('show_admin_bar', '__return_false');

    /** REGISTER MENU */
    register_nav_menus( array(
        'main_menu' => 'Menu Principal'
    ));

    /** LOAD WALKER */
    require_once (get_template_directory() . '/walker/MyWalker.php');

    function remove_ul ( $menu ){ 
        return preg_replace( array( '#^<ul[^>]*>#', '#</ul>$#' ), '', $menu ); 
    }
    // add_filter( 'wp_nav_menu', 'remove_ul' );