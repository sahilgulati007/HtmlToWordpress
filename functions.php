<?php

//enqueue scripts and style
function bootstrapstarter_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    $dependencies = array('bootstrap');
    wp_enqueue_style( 'bootstrapstarter-style', get_stylesheet_uri(), $dependencies );
    wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css');
}

function bootstrapstarter_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', $dependencies, '3.3.6', true );
    wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/js/jquery.min.js');
    wp_enqueue_script( 'custom', get_stylesheet_directory_uri() . '/js/custom.js');
    wp_localize_script( 'custom', 'frontend_ajax_object',
        array(
            'ajaxurl' => admin_url( 'admin-ajax.php' ),
        )
    );

}

add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_scripts' );

function bootstrapstarter_wp_setup() {
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'bootstrapstarter_wp_setup' );

function bootstrapstarter_register_menu() {
    register_nav_menu('header-menu', __( 'Header Menu' ));
}
add_action( 'init', 'bootstrapstarter_register_menu' );

// adding footer and side bar
function bootstrapstarter_widgets_init() {

//    register_sidebar( array(
//        'name'          => 'Footer - Area1',
//        'id'            => 'footer-area-1',
//        'before_widget' => '<div class="footer_copyright_text">',
//        'after_widget'  => '</div>',
//        'before_title'  => '<h4>',
//        'after_title'   => '</h4>',
//    ) );

//    register_sidebar( array(
//        'name'          => 'Footer - Area2',
//        'id'            => 'footer-area-2',
//        'before_widget' => '<div class="footer_copyright_text">',
//        'after_widget'  => '</div>',
//        'before_title'  => '<h4>',
//        'after_title'   => '</h4>',
//    ) );
//
//    register_sidebar( array(
//        'name'          => 'Footer - Area3',
//        'id'            => 'footer-area-3',
//        'before_widget' => '<div class="footer_copyright_text">',
//        'after_widget'  => '</div>',
//        'before_title'  => '<h4>',
//        'after_title'   => '</h4>',
//    ) );
//
//    register_sidebar( array(
//        'name'          => 'Footer - Area4',
//        'id'            => 'footer-area-4',
//        'before_widget' => '<div class="footer_copyright_text">',
//        'after_widget'  => '</div>',
//        'before_title'  => '<h4>',
//        'after_title'   => '</h4>',
//    ) );
//
//
    register_sidebar( array(
        'name'          => 'Footer - Copyright Text',
        'id'            => 'footer-copyright-text',
        'before_widget' => '<div class="footer_copyright_text">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
//
//    register_sidebar( array(
//        'name'          => 'Sidebar - Inset',
//        'id'            => 'sidebar-1',
//        'before_widget' => '<div class="sidebar-module sidebar-module-inset">',
//        'after_widget'  => '</div>',
//        'before_title'  => '<h4>',
//        'after_title'   => '</h4>',
//    ) );
//
//    register_sidebar( array(
//        'name'          => 'Sidebar - Default',
//        'id'            => 'sidebar-2',
//        'before_widget' => '<div class="sidebar-module">',
//        'after_widget'  => '</div>',
//        'before_title'  => '<h4>',
//        'after_title'   => '</h4>',
//    ) );

}
add_action( 'widgets_init', 'bootstrapstarter_widgets_init' );



//adding logo
add_theme_support( 'custom-logo' );
function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

//add header image

function themename_custom_header_setup() {
    $defaults = array(
        // Default Header Image to display
        'default-image'         => get_template_directory_uri() . '/images/banner-bkg.jpg',
        // Display the header text along with the image
        'header-text'           => false,
        // Header text color default
        'default-text-color'        => '000',
        // Header image width (in pixels)
        'width'             => 1000,
        // Header image height (in pixels)
        'height'            => 198,
        // Header image random rotation default
        'random-default'        => false,
        // Enable upload of image file in admin
        'uploads'       => false,
        // function to be called in theme head section
        'wp-head-callback'      => 'wphead_cb',
        //  function to be called in preview page head section
        'admin-head-callback'       => 'adminhead_cb',
        // function to produce preview markup in the admin screen
        'admin-preview-callback'    => 'adminpreview_cb',
    );
}
add_action( 'after_setup_theme', 'themename_custom_header_setup' );

$args = array(
    'flex-width'    => true,
    'width'         => 980,
    'flex-height'   => true,
    'height'        => 200,
    'default-image' => get_template_directory_uri() . '/images/header-inner-bg.jpg',
);
add_theme_support( 'custom-header', $args );

// aad feature image to theme
add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );


function add_register(){
    //echo "hello";
    $e=$_POST['em'];
    $u=$_POST['unm'];
    $p=$_POST['pwd'];
    wp_create_user( $u, $p, $e );
    $result['type']='success';
    echo json_encode($result);
    wp_die();
}
add_action( 'wp_ajax_nopriv_add_register', 'add_register' );
add_action( 'wp_ajax_add_register', 'add_register' );

function custom_blockusers_init() {
    if ( is_user_logged_in() && is_admin() && !current_user_can( 'administrator' ) ) {
        wp_redirect( home_url()."/main/" );
        exit;
    }

}
add_action( 'init', 'custom_blockusers_init' );

add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
    if (!current_user_can('administrator') && !is_admin()) {
        //show_admin_bar(false);
    }
    if (current_user_can('subscriber')) {
        show_admin_bar(false);
    }
}

add_action( 'template_redirect', 'redirect_to_specific_page' );

function redirect_to_specific_page() {

    if ( is_page([5,22,25,27]) && ! is_user_logged_in() ) {

        wp_redirect( site_url(), 301 );
        exit;
    }

}

add_action( 'wp_footer', 'my_footer_scripts' );
function my_footer_scripts(){
    if ( is_user_logged_in()){
        ?>
        <script>
            jQuery(document).ready(function () {
                jQuery('.fix-banner').css('display','none');
                jQuery('.inner-bg').css('display','block');
            });
        </script>
        <?php
    }
    else{
        ?>
        <script>
            jQuery(document).ready(function () {
                jQuery('.fix-banner').css('display','block');
                jQuery('.inner-bg').css('display','none');
            });
        </script>
        <?php
    }
}