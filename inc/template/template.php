<?php 

/**
 * @package  Frontend Files
 */

class Template {

    protected static $table;

    protected static $rows;

    public static function read_folder_url( $dir ) {

        echo '<div class="table-resposive"><table class="table table-hover table-bordered">';

        echo '<thead><th scope="col">Name</th></thead><tbody>';

        self::create_file_manager( $dir );

        echo '</tbody></table></div>';
    
    }

    public function create_file_manager( $dir ) {
        
        $cleanPath = realpath( $dir ) . DIRECTORY_SEPARATOR;

        $scanDir = scandir( $cleanPath );    

        foreach ($scanDir as $key => $name) {

            if ( $name == '.' || $name == '..') continue;

            echo '<tr><td>';
            
            echo $name;

            if ( is_dir( $cleanPath . $name ) && is_readable( $cleanPath . $name ) ) {

                $subPath = $cleanPath . $name;

                self::create_file_manager( $subPath );

            }

            echo '</td></tr>';

        }
        
    }
    
}
