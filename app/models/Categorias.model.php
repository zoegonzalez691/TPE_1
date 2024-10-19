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
    
    public function EncontrarCategoriaByName($nombreCat){
        $pdo = $this->CrearConexion();
        $sql = "SELECT * FROM categorias WHERE especie_animal = :nombreCat";
        $query = $pdo->prepare($sql);
        $query->bindParam(':nombreCat', $nombreCat);
        $query->execute();

        $categoria = $query->fetch(PDO::FETCH_OBJ);

        return $categoria;
    
    }

    public function ModificarCat($id, $especie_animal, $descripcion){
        $pDO = $this->crearConexion();
        $sql = 'UPDATE categorias SET especie_animal = ?, descripcion = ? WHERE id_categoria = ?';
        $query = $pDO->prepare($sql);
        $query->execute([$especie_animal, $descripcion, $id]);
        
    }

    public function eliminarCategoria($nombre){
        $pdo = $this->CrearConexion();
        $sql = 'DELETE FROM categorias WHERE especie_animal = ?';
        $query = $pdo->prepare($sql);
        try {
            $query->execute([$nombre]);
            return true;
        } catch (\Throwable $th) {
            return false;
        }


    }

    public function crearCategoria($nombre, $descripcion){
        $pdo = $this->CrearConexion();
        $sql = 'INSERT INTO categorias (especie_animal, descripcion) VALUES (? , ?)';
        $query = $pdo->prepare($sql);
        try{
            $query->execute([$nombre, $descripcion]);
            return true;
        }catch (\Throwable $th) {
                return false;
            }
       
    }      

}