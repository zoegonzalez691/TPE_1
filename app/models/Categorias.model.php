<?php

require_once 'config/config.php';

class CategoriasModel{

    protected $db;
    
    private function CrearConexion(){
        $this->db = new PDO(
            "mysql:host=".dbHost.
            ";dbname=".dbName.";charset=utf8", 
            User, Password);

        return $this->db;
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