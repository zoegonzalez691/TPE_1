<?php

require_once 'config/config.php';

class CategoriasModel{

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

    public function getCategorias(){
        $pdo = $this->CrearConexion();
        $sql = "select * from categorias";
        $query = $pdo->prepare($sql);
        $query->execute();
    
        $categorias = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $categorias;
    }

    public function TraerCategoria($id) {
        $pdo = $this->CrearConexion();
        $sql = "SELECT * FROM categorias WHERE id_categoria = :id";
        $query = $pdo->prepare($sql);
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();

        $categoria = $query->fetch(PDO::FETCH_OBJ); // Retorna un solo objeto
    
        return $categoria;
    }
    
        

}