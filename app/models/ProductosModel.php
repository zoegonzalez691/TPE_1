<?php
   class ProductosModel {

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

      public function traerTodos(){
         $db = $this->crearConexion();

         $sentencia = $db->prepare("SELECT * FROM productos");
         $sentencia->execute();
         $productos= $sentencia->fetchAll(PDO::FETCH_OBJ);

         return $productos;
      }

      public function traerDestacados(){
         $db= $this->crearConexion();

         $sentencia= $db->prepare("SELECT * FROM productos WHERE destacado = ?");
         $sentencia->execute([1]);
         $productosDestacados= $sentencia-> fetchAll(PDO::FETCH_OBJ);

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

      public function eliminarProducto($id){
         $db = $this-> crearConexion();
         $sentencia= $db-> prepare("DELETE FROM productos WHERE id_producto = ?");
         $sentencia-> execute([$id]);
      } 

      public function guardarProductos($nombre,$descripcion,$precio,$destacado,$imagen,$categoria){
         $db= $this->crearConexion();
         $sentencia= $db->prepare("INSERT INTO productos (`nombre`,`descripcion`,`precio`, `destacado`,`imagen`,`fk_categoria`) 
         VALUES(?,?,?,?,?,?)");
         try{
            $sentencia->execute([$nombre,$descripcion,$precio,$destacado,$imagen,$categoria]);
            $productoNuevo= $sentencia-> fetch(PDO::FETCH_OBJ);
     
            return $productoNuevo;
            }
            catch(\Throwable $th){
            echo $th;
            die(__file__);
            return null;
            }
      }

   
      public function guardarCambiosProducto($nombre,$descripcion,$precio,$destacado,$imagen,$categoria,$id){
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


