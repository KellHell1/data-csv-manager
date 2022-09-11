<?php

class InfoController extends MainController {

static function get_records() {
    $result = employee::get_all_records();
    //print_r($result);
    require'./view/info_view.php';
    //header("Location: http://localhost/test/view/info_view.php");
}

}