<?php
   class ProductosModel {

      //Crea la conexión a la DB
    private function crearConexion () {

      $host = 'localhost';
      $user = 'root';
      $password = '';
      $database = 'pet_shop';
  
      try {
          $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $password);
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

         $arreglo= $db->prepare("SELECT * FROM productos WHERE destacado = 1");
         $arreglo->excecute();
         $productosDestacados= $arreglo-> fetchAll(PDO::FETCH_OBJ);

         return $productosDestacados;
      }


}


