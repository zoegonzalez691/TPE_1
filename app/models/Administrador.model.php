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

  



 public function guardarCambios($nombre,$descripcion,$precio,$destacado,$imagen,$categoria,$id){
   $db= $this->crearConexion();
   $sentencia= $db->prepare("UPDATE productos SET `nombre`= ?, `descripcion`= ?,`imagen`=?,`fk_categoria`=?,`precio`= ?,`destacado`=? WHERE id_producto= ?");
   try{
      $sentencia->execute([$nombre,$descripcion,$imagen,$categoria,$precio,$destacado,$id]);
      $productoModificado= $sentencia->fetch(PDO::FETCH_OBJ);

      return $productoModificado;
   }
   catch(\Throwable $th){
      echo $th;
      die(__file__);
      return null;
   }

}
}