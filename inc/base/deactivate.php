<?php

/** 
 * @package Frontend Files
 * 
*/

class Deactivate {

    public function deactivate() {

        flush_rewrite_rules();

    }

}

?>