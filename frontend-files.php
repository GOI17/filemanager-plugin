<?php

/** 
 * @package Frontend Files
 * 
*/

/*
Plugin Name: Frontend Files
Plugin URI: 
Description: Front End file manager
Version: 1.0.0
Author: Gilberto Olivas
Author URI: https://www.linkedin.com/in/golivas-it
Text Domain: frontend-files
*/

defined( 'ABSPATH' ) or die( 'Hey, what are you doing here?' );

if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php') ) {

    require_once dirname( __FILE__ ) . '/vendor/autoload.php';

}

define( 'PLUGIN_PATH', plugin_dir_path( __FILE__ ) );

define( 'PLUGIN_URL', plugin_dir_url( __FILE__ ) );

define( 'PLUGIN', plugin_basename( __FILE__ ) );

define( 'ROOT_DIRECTORY', 'wp-content' );

function activate_frontendfiles() {

    Inc\Base\Activate::activate();
    
}

register_activation_hook( __FILE__, 'activate_frontendfiles');

function deactivate_frontendfiles() {
    
    Inc\Base\Deactivate::deactivate();
    
}

register_deactivation_hook( __FILE__, 'deactivate_frontendfiles');

if ( class_exists( 'Inc\\Init' ) ) {
    
    Inc\Init::register_services();
    
}

function load_view() {
    
    return Inc\Template\Template::create_file_manager();
     
}

add_shortcode( 'file-manager', 'load_view' );

?>