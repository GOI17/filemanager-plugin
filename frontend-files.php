<?php

/** 
 * @package Frontend Files
 * 
*/

/*
Plugin Name: Frontend Files
Plugin URI: https://github.com/GOI17/filemanager-plugin
Description: Front End file manager
Version: 1.0.0
Author: Gilberto Olivas
Author URI: https://www.linkedin.com/in/golivas-it
Text Domain: frontend-files
*/

defined( 'ABSPATH' ) or die( 'Hey, what are you doing here?' );

if ( file_exists( dirname( __FILE__ ) . '/inc/base/activate.php' ) && 
     file_exists( dirname( __FILE__ ) . '/inc/base/deactivate.php' ) && 
     file_exists( dirname( __FILE__ ) . '/inc/init.php' ) &&
     file_exists( dirname( __FILE__ ) . '/inc/template/template.php' ) ) {

    require_once dirname( __FILE__ ) . '/inc/base/activate.php';
    
    require_once dirname( __FILE__ ) . '/inc/base/deactivate.php';

    require_once dirname( __FILE__ ) . '/inc/init.php';

    require_once dirname( __FILE__ ) . '/inc/template/template.php';

}

define( 'PLUGIN_PATH', plugin_dir_path( __FILE__ ) );

define( 'PLUGIN_URL', plugin_dir_url( __FILE__ ) );

define( 'PLUGIN', plugin_basename( __FILE__ ) );

define( 'ROOT_DIRECTORY', 'wp-content' );

function activate_frontendfiles() {

    $activate = new Activate;

    $activate->activate();
    
}

register_activation_hook( __FILE__, 'activate_frontendfiles');

function deactivate_frontendfiles() {

    $activate = new Deactivate;

    $activate->deactivate();
    
}

register_deactivation_hook( __FILE__, 'deactivate_frontendfiles');

if ( class_exists( 'Inc\\Init' ) ) {
    
    Init::register_services();
    
}

function load_view() {
    
    return Template::read_folder_url("firmware");
     
}

add_shortcode( 'file-manager', 'load_view' );

?>
