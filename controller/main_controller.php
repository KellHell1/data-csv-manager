<?php

require'./model/model.php';

class MainController {

    static function get_main() {
        require'./view/main_view.php';
    }

    static function import_main($lst) {
        foreach ($lst as $elem) {
            // print_r($elem);
            // print_r('<br>');
            $obj = employee::import_csv($elem);
        }
        header("Location: http://localhost/test/index.php");
    }

    static function delete_records() {
        employee::delete_records();
        header("Location: http://localhost/test/index.php");
    }
}

?>