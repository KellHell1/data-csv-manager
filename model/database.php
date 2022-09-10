<?php
    class ConnectionDB{

    static function connection() {
        try {
            $mysql = new mysqli('localhost', 'root', '', 'user_data');
            }
        catch (exception $e) {
            echo "Connection failed: ". $e->getMessage();
        }
}}
?>