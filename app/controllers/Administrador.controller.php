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



public function eliminarProducto($id){
    $this-> model-> eliminarPorID($id);
    header("Location: " . BASE_URL . 'panel/productos');
}


public function  mostrarFormularioAgregar(){
    $categorias= $this-> modelCategoria -> getCategorias();
    $this-> view-> mostrarFormularioAgregar($categorias);
  
}

public function agregarProducto(){
    $nombre = $_REQUEST['especie_animal'];
    $descripcion = $_REQUEST['descripcion'];
    $categoria = $_REQUEST['fk_categoria'];
    $imagen = $_REQUEST['imagen'];
    $productoNuevo= $this->model->guardarProducto($nombre,$descripcion,$imagen,$categoria);
    $this->view->mostrarProductos($productoNuevo);
    header('Location:'.BASE_URL.'panel/productos');
}

public function editarProducto($id){
    $categorias= $this-> modelCategoria -> getCategorias();
    $producto = $this->model->traerPorID($id);
    $this->view->mostrarFormularioEditar($producto,$categorias);
}

 //   //Modifica una tarea
   // public function modificar(){
     //   $this->checkLogin();


        //Tomo datos del formulario
       // $id = $_REQUEST['id'];
        //$descripcion = $_REQUEST['descripcion'];
        //$terminada = $_REQUEST['terminada'];
        //$prioridad = $_REQUEST['prioridad'];

        //Envío datos al modelo
       // $this->model->updateTask($descripcion, $terminada, $prioridad, $id);
        
        //Redirecciono
        //header('Location: ' . BASE_URL . 'home');
   // }



}

//Categorias 




















?>