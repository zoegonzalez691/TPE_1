<?php
require_once 'config/config.php';
   class ProductosModel {

      //Crea la conexión a la DB
    private function crearConexion () {
  
      try {
          $pdo = new PDO("mysql:host=dbHost;dbname=dbName;charset=utf8", User, Password);
      } catch (\Throwable $th) {
          die($th);
      }

      return $pdo;
  }

      public function traerTodos(){
         $db = $this->crearConexion();

         $sentencia = $db->prepare("SELECT * FROM productos");
         $sentencia->execute();
         $productos= $sentencia->fetchAll(PDO::FETCH_OBJ);

         return $productos;
      }

      public function traerDestacados(){
         $db= $this->crearConexion();

         $arreglo= $db->prepare("SELECT * FROM productos WHERE destacado = ?");
         $arreglo->execute([1]);
         $productosDestacados= $arreglo-> fetchAll(PDO::FETCH_OBJ);

         return $productosDestacados;
      }

      public function traerPorID($id){
         $db= $this->crearConexion();
         $sentencia= $db->prepare("SELECT productos.*, categorias.especie_animal AS categoria
                                   FROM productos 
                                   JOIN categorias 
                                   ON productos.fk_categoria=id_categoria
                                   WHERE id_producto= ?");
         $sentencia->execute([$id]);
         $producto= $sentencia->fetch(PDO::FETCH_OBJ);

         return $producto;
      }

      public function TraerProductosCategoria($categoria){
        $db = $this->crearConexion();
        $sql = "SELECT * FROM productos WHERE 
                  fk_categoria = '$categoria' ";
         $query = $db->prepare($sql);
         $query->execute();
     
         $productos = $query->fetchAll(PDO::FETCH_OBJ);
     
         return $productos;


      }

}


