<?php

$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'],'/')) : '/';

print_r($_SERVER['REQUEST_METHOD'].'<br>');

if ($url[0] == '/' && $_SERVER['REQUEST_METHOD'] == 'GET') {

    require_once __DIR__.'./controller/main_controller.php';
    require_once __DIR__.'./view/main_view.php';
    
    $indexController = New MainController;

    }

elseif ($url[0] == '/' && $_SERVER['REQUEST_METHOD'] == 'POST'){
    echo 'error';
    print_r($_POST);
    }
 
?>