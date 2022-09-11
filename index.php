<?php

require_once __DIR__.'./model/database.php';
require_once __DIR__.'./controller/main_controller.php';
require_once __DIR__.'./controller/info_controller.php';

$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'],'/')) : '/';
//print_r($url);


if ($url[0] == '/' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    MainController::get_main();
    }

elseif ($url[0] == '/' && $_SERVER['REQUEST_METHOD'] == 'POST'){

    $filename = $_FILES["file"]["tmp_name"];
    if($_FILES["file"]["size"] <= 5242880) {
        $file = fopen($filename, "r");
        while (fgetcsv($file, 1000, ",") !== FALSE) {
            for ($i = 0; $row = fgetcsv($file); ++$i) {
                if (count($row) == 6) {
                    $lst = [$i => ['uid' => $row[0],'name' => $row[1],'age' => $row[2],'email' => $row[3],'phone' => $row[4],'gender' => $row[5]]];
                    MainController::import_main($lst);
                }
                else{
                    print_r('not valid document');
                    break 2;
            }
        }
        }
    fclose($file);
    } 

}
elseif ($_SERVER['PATH_INFO'] == '/delete'){
    MainController::delete_records();
}

elseif ($_SERVER['PATH_INFO'] == '/allrecords'){
    InfoController::get_records();
}
?>