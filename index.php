<?php

require_once __DIR__.'./model/database.php';
require_once __DIR__.'./controller/main_controller.php';

$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'],'/')) : '/';

// ConnectionDB::connection();

if ($url[0] == '/' && $_SERVER['REQUEST_METHOD'] == 'GET') {

    // require_once __DIR__.'./controller/main_controller.php';
    // require_once __DIR__.'./view/main_view.php';

    MainController::get_main();
    }

elseif ($url[0] == '/' && $_SERVER['REQUEST_METHOD'] == 'POST'){

    $filename = $_FILES["file"]["tmp_name"];
    
    $file = fopen($filename, "r");
    while (fgetcsv($file, 1000, ",") !== FALSE) {
        for ($i = 0; $row = fgetcsv($file); ++$i) {
            //print_r("$row[0].'<br>'.$row[1].'<br>'.$row[2].'<br>'.$row[3].'<br>'.$row[4].'<br>'.$row[5].'<br>'");
            $lst = [$i => ['uid' => $row[0],'name' => $row[1],'age' => $row[2],'email' => $row[3],'phone' => $row[4],'gender' => $row[5]]];
            MainController::import_main($lst);
        }
        }
    fclose($file);
    //MainController::get_main();
}
?>