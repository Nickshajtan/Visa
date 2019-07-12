<?php
/**
 * File for functions and definitions of the theme
 *
 * Contain loding of styles and scripts
 *
 */
//Remove admin bar
add_action ('get_header', 'remove_admin_login_header');
function remove_admin_login_header () {
	 remove_action ('wp_head', '_admin_bar_bump_cb');
}
// Bootstrap stylesheet.
add_action('wp_enqueue_scripts', 'load_bootstrap_css');
function load_bootstrap_css() {
wp_register_style( 'bootstrap-min',get_template_directory_uri() . 
               '/css/bootstrap.min.css', array(), ' ' );
    
wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . 
               '/css/bootstrap.min.css', array(), ' ' );
}
//Style css
add_action('wp_enqueue_scripts', 'load_sec_css');
function load_sec_css() {
    wp_register_style( 'style',  get_template_directory_uri() . '/css/style.css', array(), ' ' );
    wp_enqueue_style( 'style',  get_template_directory_uri() . '/css/style.css', array(), ' ' );
}
//Fonts
add_action('wp_enqueue_scripts', 'load_fonts_css');
function load_fonts_css() {
wp_register_style( 'fonts',get_template_directory_uri() . 
               '/css/fonts.css', array(), ' ' );
    
wp_enqueue_style( 'fonts', get_template_directory_uri() . 
               '/css/fonts.css', array(), ' ' );
    
wp_register_style( 'font-awesome-min',get_template_directory_uri() . 
               '/css/font-awesome.min.css', array(), ' ' );
    
wp_enqueue_style( 'font-awesome-min', get_template_directory_uri() . 
               '/css/font-awesome.min.css', array(), ' ' );    
}
//Datarangepicker css
add_action('wp_enqueue_scripts', 'load_data_css');
function load_data_css() {
    wp_register_style( 'daterangepicker',  get_template_directory_uri() . '/css/daterangepicker/daterangepicker.css', array(), ' ' );
    wp_enqueue_style( 'daterangepicker',  get_template_directory_uri() . '/css/daterangepicker/daterangepicker.css', array(), ' ' );
}
// Style
add_action('wp_enqueue_scripts', 'load_css');
function load_css() {
    wp_register_style( 'styles', get_stylesheet_uri(), array(), ' ' );
    wp_enqueue_style( 'styles', get_stylesheet_uri(), array(), ' ' );
}
//JQUERY
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
function my_scripts_method() {
	wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
	wp_enqueue_script( 'jquery' );
}
//Bootstrap js
add_action( 'wp_enqueue_scripts', 'load_bootstrap_js' );
function load_bootstrap_js() {
    wp_register_script('bootstrap-min', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'bootstrap-min', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array('jquery'), null, true );
}
//Datarangepicker js
/*
add_action( 'wp_enqueue_scripts', 'load_data_js' );
function load_data_js() {
    wp_register_script('moment', get_stylesheet_directory_uri() . '/js/datarangepicker/moment.js', array('jquery'), null, true );
    wp_enqueue_script( 'moment', get_stylesheet_directory_uri() . '/js/datarangepicker/moment.js', array('jquery'), null, true );
    wp_register_script('datarangepicker', get_stylesheet_directory_uri() . '/js/datarangepicker/datarangepicker.js', array('jquery'), null, true );
    wp_enqueue_script( 'datarangepicker', get_stylesheet_directory_uri() . '/js/datarangepicker/datarangepicker.js', array('jquery'), null, true );
}*/
//Load js
add_action( 'wp_enqueue_scripts', 'load_js' );
function load_js() {
    wp_register_script('js', get_stylesheet_directory_uri() . '/js/js.js', array('jquery'), null, true );
    wp_enqueue_script( 'js', get_stylesheet_directory_uri() . '/js/js.js', array('jquery'), null, true );
}
//Setup
//Add menus
if (function_exists('add_menus')) {
	add_menus('menus');
}

//IMG_posts
add_theme_support( 'post-thumbnails' );

if ( ! function_exists( 'theme_setup' ) ) :
function theme_setup(){
    //Add support theme html 5    
    add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption') ); 
    //Add custom logo
    add_theme_support( 'custom-logo', array(
		'height'      => 53,
		'width'       => 262,
		'flex-height' => false,
	) );
    //Menu
    register_nav_menus( array(
		'primary' => __( 'Top Menu', 'visa' )
    ) );
}
endif;
add_action( 'after_setup_theme', 'theme_setup' );
remove_filter('the_content', 'wpautop');
//Footer section
register_sidebar( array(
        'name' => __( 'First footer', '' ),
        'id' => 'footer-area-first',
        'description' => __( 'footer', '' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );
register_sidebar( array(
        'name' => __( 'Second footer', '' ),
        'id' => 'footer-area-second',
        'description' => __( 'footer', '' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );
//Header section
register_sidebar( array(
        'name' => __( 'Email', '' ),
        'id' => 'header-area-first',
        'description' => __( 'header', '' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );
register_sidebar( array(
        'name' => __( 'Language', '' ),
        'id' => 'header-area-second',
        'description' => __( 'header', '' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );
remove_action( 'add_option_new_admin_email', 'update_option_new_admin_email' );
remove_action( 'update_option_new_admin_email', 'update_option_new_admin_email' );

/**
 * Disable the confirmation notices when an administrator
 * changes their email address.
 *
 * @see http://codex.wordpress.com/Function_Reference/update_option_new_admin_email
 */
function wpdocs_update_option_new_admin_email( $old_value, $value ) {

    update_option( 'admin_email', $value );
}
add_action( 'add_option_new_admin_email', 'wpdocs_update_option_new_admin_email', 10, 2 );
add_action( 'update_option_new_admin_email', 'wpdocs_update_option_new_admin_email', 10, 2 );