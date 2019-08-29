<?php

/** 
 * @package Frontend Files
 * 
*/

// if ( file_exists( dirname( PLUGIN_URL ) . '/inc/base/enqueue.php' ) ) {

    require_once 'base/enqueue.php';

// }

final class Init {

    public static function get_services() {

        return [
            Enqueue::class
        ];

    }

    public static function register_services() {

        foreach ( self::get_services() as $class ) {

            $service = self::instantiate( $class );

            if ( method_exists( $service, 'register' ) ) {

                $service->register();

            }

        }

    }

    private static function instantiate( $class ) {

        // Create a instance of each class

        $service = new $class();

        return $service;

    }

}

?>