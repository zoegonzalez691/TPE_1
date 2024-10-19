<?php
require_once 'app/views/Administrador.view.php';
require_once 'app/controllers/ProductosController.php';
require_once 'app/controllers/Categorias.controller.php';


class AdministradorController{

private $model;
private $view;
private $categoriaController;
private $controllerProductos;


private function estaLogueado(){
    session_start();
   if (!isset($_SESSION['ID_USER'])) {
       header('Location: ' . BASE_URL . 'iniciosesion');
       die();
   }
   else if (($_SESSION['ROLE']) == "no"){
       header('Location: ' . BASE_URL . 'home' );

   }


}

public function __construct(){
    $this->categoriaController = new CategoriasController();
    $this->controllerProductos = new ProductosController();
    $this->view = new AdministradorView();
    
}    
    
public function mostrarPanel(){
    $this->estaLogueado();
    $this->view->mostrarPanel();
}

public function administrarProductos(){
    $productos= $this->controllerProductos->traerProductos();
    $this->view->mostrarAdminProductos($productos);
}

public function eliminarProducto($id){
    $this->estaLogueado();
    $this-> controllerProductos-> eliminarPorID($id);
     header('Location:' . BASE_URL . 'panel/productos');
}   
   

public function  mostrarFormularioAgregar(){
    $this-> estaLogueado();
    $categorias= $this->categoriaController->TraerCategorias();
    $this-> view-> mostrarFormularioAgregar($categorias);
  
}

public function agregarProducto(){
    $this->estaLogueado();
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $categoria = $_POST['fk_categoria'];
    $precio= $_POST['precio'];
    $destacado= $_POST['destacado'];
    $_FILES = ['input_name']['type'];
    if($_FILES['input_name']['type'] == "image/jpg" ||
     $_FILES['input_name']['type'] == "image/jpeg" ||
      $_FILES['input_name']['type'] == "image/png" ) {
        $productoNuevo= $this->controllerProductos->guardarProducto($nombre,$descripcion,$precio,$destacado,$categoria,$_FILES = ['input_name']['tmp_name']);
    }
    else{
        $productoNuevo= $this->controllerProductos->guardarProducto($nombre,$descripcion,$precio,$destacado,$categoria);
        
    }

    $this->controllerProductos->mostrarProductos($productoNuevo);
}

public function guardarCambiosProducto(){
    $this->estaLogueado();
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $categoria = $_POST['fk_categoria'];
    $precio= $_POST['precio'];
    $destacado= $_POST['destacado'];
    $imagen = $_POST['imagen'];
    $id= $_POST['id_producto'];
    $cambios= $this->controllerProductos->guardarCambios($nombre,$descripcion,$precio,$destacado,$imagen,$categoria,$id);
    $this->controllerProductos->mostrarProductos();
}

public function editarProducto($id){
    $this-> estaLogueado();
    $categorias= $this->categoriaController->TraerCategorias();
    $producto = $this->controllerProductos->traerProductoID($id);
    $this->view->mostrarFormularioEditar($producto,$categorias);
}


public function administrarCat(){
    $categorias = $this->categoriaController->TraerCategorias();
    $this->view->MostrarCategorias($categorias);

}

public function ModificarCategoria($categoria){
    $this->estaLogueado();
    $categoria = $this->model->TraerCategoria($categoria);
    $this->view->Modificarcategoria($categoria);
}












}
?>