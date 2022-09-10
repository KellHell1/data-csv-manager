<?php

require_once __DIR__.'./model/database.php';

$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'],'/')) : '/';

ConnectionDB::connection();

if ($url[0] == '/' && $_SERVER['REQUEST_METHOD'] == 'GET') {

    require_once __DIR__.'./controller/main_controller.php';
    require_once __DIR__.'./view/main_view.php';

    $indexController = New MainController;

    }

elseif ($url[0] == '/' && $_SERVER['REQUEST_METHOD'] == 'POST'){
    print_r($_POST);
    print_r($_SERVER);
    }

?>