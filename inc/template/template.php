<?php 

/**
 * @package  AlecadddPlugin
 */

 namespace Inc\Template;

class Template {

    public function create_file_manager() {

        $files = scandir(ROOT_DIRECTORY);

        print_r($files);

        ?> 
        
        <div class="table-responsive-sm">
            <table class="table">
                <tbody>
                    <?php foreach( $files as $file ) { ?>
                        <tr>
                            <td><?php echo $file ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <?php
    
    }

}

?>