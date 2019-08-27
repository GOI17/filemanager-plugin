<?php

/** 
 * @package Frontend Files
 * 
*/

namespace Inc\Base;

class Enqueue {

    public function register() {

        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue' ) );

    }

    function enqueue() {

        // Enqueue all scripts or styles files

        wp_enqueue_style( 'style', PLUGIN_URL . 'assets/style.css' );
        
        // Bootstrap JS

        wp_enqueue_script('prefix_bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' );
        
        // Bootstrap CSS

        wp_enqueue_style('bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
        
    }

}

?>