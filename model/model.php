<?php

//require_once'database.php';

class employee {
  static function import_csv($elem) {
    $mysql = new mysqli('localhost', 'root', '', 'user_data');
    try {
        $mysql->query("INSERT INTO employee(`UID`, `Name`, `Age`, `Email`, `Phone`, `Gender`) 
        VALUES ($elem[uid],  '$elem[name]', '$elem[age]', '$elem[email]', $elem[phone], '$elem[gender]');");
    }
    catch (Exception $e) {
            $mysql->query("UPDATE employee SET `UID`=$elem[uid],`Name`='$elem[name]',`Age`='$elem[age]',`Email`='$elem[email]',`Phone`=$elem[phone],`Gender`='$elem[gender]' 
            WHERE `UID` = $elem[uid]");
    }

  }
 }