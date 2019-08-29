<?php 

/**
 * @package  Frontend Files
 */

class Template {

    public static function read_folder_url( $dir ) {

        echo '<div id="file-manager"><table>';

        echo "<thead>
                <th>
                    <h3>$dir Directory</h3>
                </th>
            </thead>
            <tbody>";

        self::create_file_manager( $dir );

        echo '</tbody></table></div>';
    
    }

    public function create_file_manager( $dir ) {
        
        $cleanPath = realpath( $dir ) . DIRECTORY_SEPARATOR;

        $scanDir = scandir( $cleanPath );    

        foreach ($scanDir as $key => $name) {

            if ( $name == '.' || $name == '..') continue;

            echo '<tr>
                    <td>';
            
            if ( is_dir( $cleanPath . $name) ) 
                echo "<p id='folder'>
                        $name Folder
                    </p>";
            
            if ( is_file( $cleanPath . $name) ) 
                echo "<p>
                        $name
                    </p>";

            if ( is_dir( $cleanPath . $name ) && is_readable( $cleanPath . $name ) ) {

                $subPath = $cleanPath . $name;

                self::create_file_manager( $subPath );

            }

            echo '</td>';
            
            echo '</tr>';
            
        }
        
    }
    
}
