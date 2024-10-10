<?php

require_once 'config/config.php';

class UsersModel{

    private function CrearConexion(){
        try{
        $db =
            new PDO(
            "mysql:host=".dbHost.
            ";dbname=".dbName.";charset=utf8", 
            User, Password);
        }catch(\Throwable $th) {
            die($th);
        }

        return $db;
    }

    

}