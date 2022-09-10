<?php

//require_once'database.php';

class employee {
  static function import_csv($elem) {
    $mysql = new mysqli('localhost', 'root', '', 'user_data');
    $result = $mysql->query("INSERT INTO employee(`UID`, `Name`, `Age`, `Email`, `Phone`, `Gender`) VALUES ($elem[uid],  '$elem[name]', '$elem[age]', '$elem[email]', $elem[phone], '$elem[gender]');");
    // print_r(mysqli_fetch_all($result));

  }
 }