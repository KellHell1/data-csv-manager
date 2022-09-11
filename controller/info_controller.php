<?php

class InfoController extends MainController {

static function get_records() {
    $result = employee::get_all_records();
    require'./view/info_view.php';
}

function download_records() {
    $result = employee::get_all_records();
    
    $output = fopen("data.csv", "w");  
    fputcsv($output, array("UID", "Name", "Age", "Email", "Phone", "Gender"));  

    while($row = mysqli_fetch_assoc($result))  
    {  
         fputcsv($output, $row);  
    }  
    fclose($output);
    header('Content-Type: text/csv; charset=utf-8');
    readfile('data.csv');
    
}

}