<?php
   class AdministradorModel {

      //Crea la conexión a la DB
    private function crearConexion () {
  
      try {
         $db =
         new PDO(
         "mysql:host=".dbHost.
         ";dbname=".dbName.";charset=utf8", 
         User, Password);
      } catch (\Throwable $th) {
          die($th);
      }

      return $db;
  }

  public function eliminarPorID($id){
    $db = $this-> crearConexion();
    $sentencia= $db-> prepare("DELETE FROM productos WHERE id_producto = ?");
    $sentencia-> execute([$id]);
 }

 public function guardarProducto($nombre,$descripcion,$imagen,$categoria){
    $db= $this->crearConexion();
    $sentencia= 'INSERT INTO productos (nombre, descripcion, imagen, fk_categoria) VALUES(?,?,?,?)';
    $query = $db->prepare($sentencia);
       try{
       $query->execute([$nombre,$descripcion,$imagen,$categoria]);
       $productoNuevo= $query-> fetch(PDO::FETCH_OBJ);

       return $productoNuevo;
       }
       catch(\Throwable $th){
       echo $th;
       die(__file__);
       return null;
       }
 }
}