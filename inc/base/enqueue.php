<?php

/** 
 * @package Frontend Files
 * 
*/

class Enqueue {

    public function register() {

        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue' ) );

    }

    function enqueue() {

        // Enqueue all scripts or styles files
        
        // Bootstrap JS
        
        wp_enqueue_script('bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' );
        
        wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.4.1.min.js' );
        
        wp_enqueue_script('bootstrap_popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' );
        
        // Bootstrap CSS

        wp_enqueue_style('bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
        
        // Custom JS & CSS files
        
        wp_enqueue_style( 'style', PLUGIN_URL . 'assets/style.css' );
        
    }

}

?>