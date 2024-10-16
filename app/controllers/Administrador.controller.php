<?php
require_once 'app/views/Administrador.view.php';
require_once 'app/models/ProductosModel.php';
require_once 'app/models/Categorias.model.php';
class AdministradorController{

private $model;
private $view;
private $modelCategoria;

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
    $this->modelCategoria = new CategoriasModel();
    $this->model = new ProductosModel();
    $this->view = new AdministradorView();
}



public function mostrarPanel(){
    $this->view->mostrarPanel();
}

public function administrarProductos(){
    $productos= $this-> model-> traerTodos();
    $this-> view-> mostrarProductos($productos);
}

public function  editarProducto($id){
    //deberia hacer un formulario para que el admin ingrese los datos que quiere editar
    $producto= $this-> model-> editarPorID($id);
    $this->view-> mostrarEditado($producto);
}

public function eliminarProducto($id){
    $this-> model-> eliminarPorID($id);
    header("Location: " . BASE_URL . 'panel/productos');
}


public function  mostrarFormularioAgregar(){
    $categorias= $this-> modelCategoria -> getCategorias();
    $this-> view-> mostrarFormularioAgregar($categorias);
    $nombre = $_REQUEST['especie_animal'];
    $descripcion = $_REQUEST['descripcion'];
    $categoria = $_REQUEST['fk_categoria'];
    $imagen = $_REQUEST['imagen'];
    $this->model->guardarProducto($nombre,$descripcion,$categoria,$imagen);
    header('Location:'.BASE_URL.'panel/productos');


}

public function agregarProducto(){
    $productoAgregado= $this-> model-> agregarProducto();
    $this->view-> mostrarProductoNuevo($productoAgregado);
}


}

?>